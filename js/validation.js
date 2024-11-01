//we only have two types of form elements
//either input or select so we will
//just go through and pick out which element 
//we are working on. we need the division of elements
//however because we will have the case when multiple forms 
//will be on a page.
jQuery(document).ready(function($) {
  //regular expressions we'll be matching our 
  //submitted data against.
  var $name_interest_RegEx = /[a-zA-Z]/;
  var $phone_RegEx = /^\(?([1-9]{1}[0-9]{2})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;

  $("input").blur(function(){
    
    //value of our field input
    var value = $(this).attr("value");

    //value is null, let's check if that's ok
    if(value == ""){
      checkValue($(this));  
    }

    //now must validate our fields
    //input data. phone and email fields will
    //be different than name fields and the interst
    //field. the interest field is unique because it can
    //be either a select field or text field, we'll handle
    //selects later on.

    //check for a non email/phone/or special field
    if($(this).attr("name") == "FullName" || $(this).attr("name") == "SkillsInterests" || $(this).attr("name") == "Company" || $(this).attr("name") == "City") {
      checkNameInterest($(this), $name_interest_RegEx);
    }
    //check for email field
    else if($(this).attr("name") == "Email") {
      checkEmail($(this));
    }
    //check for phone field
    else if($(this).attr("name") == "Mobile") {
      checkPhone($(this), $phone_RegEx);
    }
    //check for phone field
    else if($(this).attr("name") == "User14") {
      checkDob($(this));
    }

  });


  //now we have to validate our select fields.
  //this part is really easy, just make sure 
  //they clicked a value.
  $("select.field").change(function(){
   //swap out which form we submit based on the city,
   //this is for when a different location should receive this data
    if($(this).hasClass('field_city')){
      city = $(this).val();
      var obj = jQuery.parseJSON( $('#destination_submit').val() );
        form = $(this).closest('form')
        form.attr('action', obj[city]);
    }

    //check the field status
    //and change the valid and invalid 
    //status, really simple.
    
    //check for invalid and remove if need be
    if( $(this).hasClass("invalid") ){
      $(this).toggleClass("invalid");
    }
    //check for valid and add if it's not there
    if ( ! $(this).hasClass("valid") ){
      $(this).toggleClass("valid");
      $(this).next().text("Passed");
    }

    return;
    
  });
  
  //check all the data one last time
  //then submit the form.
  $(".form_submit").submit(function(event){
    $(this).find(".field").each(function(){
      //we go through each field and see
      //if a null value is acceptable
      if( $(this).val() == "") {
        checkValue($(this));
      }

      //we just run through each field and check them here
      //check for a non email/phone/or special field
      if($(this).attr("name") == "FullName" || $(this).attr("name") == "SkillsInterests" || $(this).attr("name") == "Company" || $(this).attr("name") == "City") {
        checkNameInterest($(this), $name_interest_RegEx);
      }
      //check for email field
      else if($(this).attr("name") == "Email") {
        checkEmail($(this));
      }
      //check for phone field
      else if($(this).attr("name") == "Mobile") {
        checkPhone($(this), $phone_RegEx);
      }
      //check for phone field
      else if($(this).attr("name") == "User14") {
        checkDob($(this));
      }
      //check for a select field
      else if($(this).is("select")) {
        if($(this).value == ''){
          checkValue($(this));
        }
      }
    });

    //if we have any invalid field, alert
    //the user so they can be corrected,
    //else let's continue with our submission.
    if($(this).find('.invalid').length){
      event.preventDefault();
      alert("Please Make Sure All Fields Are Correct");
      return;
    }

    else {
      // submit our form
      // first let's check if we need to
      // do an ajax submission or not.
      if($(this).hasClass('form_submit_ajax')){
        //send our ajax request
        var fName = $(this).find("[name='FullName']").val();
        var email = $(this).find("[name='Email']").val();
        var phone = $(this).find("[name='Mobile']").val();
        var procs = $(this).find("[name='SkillsInterests']").val();
        var datastring = '';
        datastring += "FullName="+fName;
        datastring += "&Email="+email;
        datastring += "&Mobile="+phone;
        datastring += "&SkillsInterests="+procs;

        $.ajax({
          url: '/wp-content/plugins/tightrope/formsubmission.php',
          data: datastring,
          type: 'POST',
          async: false,
          success:function(html) {
          //when we hit our success point we 
          //need to re-submit the form again.

            //first we find the parent container, we'll 
            //need it for replacing the form with the 
            //one we're about to submit
            var parent = $(this).attr('id').parent();
            //remove the unique_form class as we don't need
            //it after submission to our first source.
            $(this).attr('id').toggleClass("form_submit_ajax");
            //now replace the current form with the new one
            //to submit
            parent.html(html);
            //$("#active_standard").submit();
          }
        });
      }
    }
  });

  //validate our name and interest
  function checkNameInterest(x, regex){
    if(x.is("select")){
      if(x.val() == null){
        checkValue(x);
      }
      else if (x.val().length >= 0) {
        //add the valid class if it's not there
        if(x.hasClass("invalid")){
          x.toggleClass("invalid");
        }
        //remove the invalid class if it's there
        if( ! x.hasClass("valid") ){
          x.toggleClass("valid");
        }
        x.next().text("Passed");
      }
        
    }
    else {
      if(x.val().match(regex)){
        //remove the invalid class if it's there
        if(x.hasClass("invalid")){
          x.toggleClass("invalid");
        }
        //add the valid class if it's not there
        if( ! x.hasClass("valid") ){
          x.toggleClass("valid");
        }
          x.next().text("Passed");
      }
      else if( ! x.val().match(regex) ){
        if( x.hasClass("valid") ) {
          x.toggleClass("valid");
        }
        if( ! x.hasClass("invalid") ){
          x.toggleClass("invalid");
        }
        //check for either name or interest field
        //so the user gets the right error message
        if(x.attr("name")=="FullName"){
          x.next().text("Invalid Name");
        }
        else if(x.attr("name")=="SkillsInterests"){
          x.next().text("Invalid Interest");
        }
        else if(x.attr("name")=="Company"){
          x.next().text("Invalid Company Name");
        }
        else if(x.attr("name")=="City"){
          x.next().text("Invalid Location");
        }
      }
    }
  }

  //check our email function
  function checkEmail(x) {
    if(x.val().indexOf('@') != -1){
      //remove the invalid class if it's there
      if(x.hasClass("invalid")){
        x.toggleClass("invalid");
      }
      //add the valid class if it's not there
      if( ! x.hasClass("valid") ){
        x.toggleClass("valid");
      }
        x.next().text("Passed");
    }
    else if( x.val().indexOf('@') == -1 ){
      if( x.hasClass("valid") ) {
        x.toggleClass("valid");
      }
      if( ! x.hasClass("invalid") ){
          x.toggleClass("invalid");
      }
      x.next().text("Invalid Email");
    }
  }

  function checkPhone(x, regex) {
    if(x.val().match(regex)){
      //remove the invalid class if it's there
      if(x.hasClass("invalid")){
        x.toggleClass("invalid");
      }
      //add the valid class if it's not there
      if( ! x.hasClass("valid") ){
        x.toggleClass("valid");
      }
      x.next().text("Passed");
    }
    else if( ! x.val().match(regex) ){
      if( x.hasClass("valid") ) {
        x.toggleClass("valid");
      }
      if( ! x.hasClass("invalid") ){
        x.toggleClass("invalid");
      }
      x.next().text("Invalid Phone");
    }
  }

  //let's check that our date of birth field is correct
  //if it is we will mirror the date back in mm/dd/yyyy
  function checkDob(x, regex) {
    
    var m = moment(x.val(),["MM-DD-YYYY", "MM/DD/YYYY", "MM DD YYYY", "MM.DD.YYYY"], true);

    if(m.isValid()){
      //remove the invalid class if it's there
      if(x.hasClass("invalid")){
        x.toggleClass("invalid");
      }
      //add the valid class if it's not there
      if( ! x.hasClass("valid") ){
        x.toggleClass("valid");
      }
      x.next().text("Passed");
      x.val(x.val().replace(/\D/g, '/'));
    }
    else {
      if( x.hasClass("valid") ) {
        x.toggleClass("valid");
      }
      if( ! x.hasClass("invalid") ){
        x.toggleClass("invalid");
      }
      x.next().text("Invalid Date");
    }
       
  }

  //check for a value, it doesn't matter
  //what field the user clicked at this point
  //all input fields follow the same validation
  //rules for null values.
  //if the field has an optional data attribute
  //then no value is acceptable obviously but if
  //they do input one then the value must still be
  //valid. and if the field is required then obviously
  //no value is not valid and we must still validate the 
  //value, again obviously.
  function checkValue(x) {
    if( x.data("status") == "optional" ){
      //if we have the invalid class on the optional
      //field that has no value then we can switch it to
      //valid, if it has no class then keep 
      if(x.hasClass("invalid")){
          x.toggleClass("invalid").toggleClass("valid");
        x.next().text("Passed")
        return true;
      }
      //if we have neither valid or invalid go ahead and give
      //the optional field and valid class
      else if(! x.hasClass("valid") && ! $(this).hasClass("invalid") ){
        x.toggleClass("valid");
        x.next().text("Passed")
        return true;
      }
      //nothing else to do, just return true.
      else {
        return true;
      }
    }
    //required field so let's handle it
    else {
      //if we don't have the invalid class on this field already
      //we check to see if it was valid before, if so remove that
      //because now that a required field is blank it is now 
      //invalid, then we will go ahead and add the invalid
      //field and give the user a message about their error.
      if( ! x.hasClass("invalid") ){
        if( x.hasClass("valid") ) {
          x.toggleClass("valid");
        }

        x.toggleClass("invalid");
        x.next().text("Required Field");
        return false;
      }
      //if we already have our invalid field, just check the
      //message. If they previously had a bad input we don't
      //say bad input when they should be told the field is 
      //required. We need to alert the user of the error,
      //either invalid input or required field left blank.
      else {
        if(! x.next().text() == "Required Field" || ! x.next().text() == "" ){
          x.next().text("Required Field");
        }
        return false;
      }
    }
  }

});