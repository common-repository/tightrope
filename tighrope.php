<?php

/*
Plugin Name: Tightrope Form
Plugin URI: http://crystalcleardm.com
Description: A simple plugin that creates a form.
Version: 1.0
Author: Ronald Pannullo
Author URI: http://www.crystalcleardm.com
License: GPL2
*/

class tightrope_form extends WP_Widget {

public $id_base = 'signupForm';
public $name = 'Tightrope';
public $number = 1;
public $id = true;

  // constructor
function tightrope_form() {
  parent::WP_Widget($id_base, $name = __('Tightrope', 'tightrope_form_widget') );
}


function form($instance) {
// Check values
if( $instance) {
     $title = esc_attr($instance['title']);
     $heading = esc_attr($instance['heading']);
     $subheading = esc_attr($instance['subheading']);
     $value = esc_attr($instance['value']);
     $actionType = esc_attr($instance['actionType']);
     $action = esc_attr($instance['action']);
     $fullname = esc_attr($instance['fullname']);
     $email = esc_attr($instance['email']);
     $company = esc_attr($instance['company']);
     $company_placeholder = esc_attr($instance['company_placeholder']);
     $phone = esc_attr($instance['phone']);
     $dob = esc_attr($instance['dob']);
     $captcha = esc_attr($instance['captcha']);
     $location = esc_attr($instance['location']);
     $location_type = esc_attr($instance['location_type']);
     $locations = esc_attr($instance['locations']);
     $destinations = esc_attr($instance['destinations']);
     $city = esc_attr($instance['city']);
     $state = esc_attr($instance['state']);
     $interests = esc_attr($instance['interests']);
     $interest_type = esc_attr($instance['interest_type']);
     $placeholder = esc_attr($instance['placeholder']);
     $procedureone = esc_attr($instance['procedureone']);
     $proceduretwo = esc_attr($instance['proceduretwo']);
     $procedurethree = esc_attr($instance['procedurethree']);
     $procedurefour = esc_attr($instance['procedurefour']);
     $procedurefive = esc_attr($instance['procedurefive']);
     $proceduresix = esc_attr($instance['proceduresix']);
     $orientation = esc_attr($instance['orientation']);
     $submit = esc_attr($instance['submit']);
} 

else {
     $title = '';
     $heading = '';
     $subheading = '';
     $value = '';
     $actionType = '';
     $action = '';
     $fullname= '';
     $email = '';
     $company = '';
     $company_placeholder = '';
     $phone = '';
     $dob = '';
     $captcha = '';
     $location = '';
     $location_type = '';
     $locations = '';
     $destinations = '';
     $city = '';
     $state = '';
     $interests = '';
     $interest_type = '';
     $placeholder = '';
     $procedureone = '';
     $proceduretwo = '';
     $procedurethree = '';
     $procedurefour = '';
     $procedurefive = '';
     $proceduresix = '';
     $orientation = '';
     $submit = '';
}
?>

<p>
<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id('heading'); ?>"><?php _e('Form Heading:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('heading'); ?>" name="<?php echo $this->get_field_name('heading');?>" type="text" value="<?php echo $heading; ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id('subheading'); ?>"><?php _e('Form Subheading:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('subheading'); ?>" name="<?php echo $this->get_field_name('subheading');?>" type="text" value="<?php echo $subheading; ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id('value'); ?>"><?php _e('Value Number:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('value'); ?>" name="<?php echo $this->get_field_name('value');?>" type="text" value="<?php echo $value; ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id('actionType'); ?>"><?php _e('Standard API key:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('actionType'); ?>" name="<?php echo $this->get_field_name('actionType');?>" type="radio" value="standard"  <?php checked( 'standard', $actionType ); ?> />
</p>
<p>
<label for="<?php echo $this->get_field_id('actionType'); ?>"><?php _e('Unique Form Action:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('actionType'); ?>" name="<?php echo $this->get_field_name('actionType');?>" type="radio" value="unique" <?php checked( 'unique', $actionType ); ?> />
</p>
<p>
<label for="<?php echo $this->get_field_id('action'); ?>"><?php _e('Form Action:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('action'); ?>" name="<?php echo $this->get_field_name('action');?>" type="text" value="<?php echo $action; ?>" />
</p>
<p>
<span>Full Name:</span>
<br />
<label for="fullname_required"><?php _e('Required:', 'tightrope_form_widget'); ?></label>
<input id="fullname_required" name="<?php echo $this->get_field_name('fullname'); ?>" type="radio" value="required" <?php checked( 'required', $fullname ); ?> />
<label for="fullname_optional"><?php _e('Optional:', 'tightrope_form_widget'); ?></label>
<input id="fullname_optional" name="<?php echo $this->get_field_name('fullname'); ?>" type="radio" value="optional" <?php checked( 'optional', $fullname ); ?> />
<label for="fullname_not_used"><?php _e('Not Used:', 'tightrope_form_widget'); ?></label>
<input id="fullname_not_used" name="<?php echo $this->get_field_name('fullname'); ?>" type="radio" value="not used" <?php checked( 'not used', $fullname ); ?> />
</p>
<p>
<span>Email:</span>
<br />
<label for="email_required"><?php _e('Required:', 'tightrope_form_widget'); ?></label>
<input id="email_required" name="<?php echo $this->get_field_name('email'); ?>" type="radio" value="required" checked="checked"  <?php checked( 'required', $email ); ?> />
</p>
<p>
<span>Company:</span>
<br />
<label for="company_required"><?php _e('Required:', 'tightrope_form_widget'); ?></label>
<input id="company_required" name="<?php echo $this->get_field_name('company'); ?>" type="radio" value="required"  <?php checked( 'required', $company ); ?> />
<label for="company_optional"><?php _e('Optional:', 'tightrope_form_widget'); ?></label>
<input id="company_optional" name="<?php echo $this->get_field_name('company'); ?>" type="radio" value="optional" <?php checked( 'optional', $company ); ?> />
<label for="company_not_used"><?php _e('Not Used:', 'tightrope_form_widget'); ?></label>
<input id="company_not_used" name="<?php echo $this->get_field_name('company'); ?>" type="radio" value="not used" <?php checked( 'not used', $company ); ?> />
</p>
<p>
<label for="<?php echo $this->get_field_id('company_placeholder'); ?>"><?php _e('Company Placeholder Text:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('company_placeholder'); ?>" name="<?php echo $this->get_field_name('company_placeholder');?>" type="text" value="<?php echo $company_placeholder; ?>" />
</p>
<p>
<span>Phone:</span>
<br />
<label for="phone_required"><?php _e('Required:', 'tightrope_form_widget'); ?></label>
<input id="phone_required" name="<?php echo $this->get_field_name('phone'); ?>" type="radio" value="required"  <?php checked( 'required', $phone ); ?> />
<label for="phone_optional"><?php _e('Optional:', 'tightrope_form_widget'); ?></label>
<input id="phone_optional" name="<?php echo $this->get_field_name('phone'); ?>" type="radio" value="optional" <?php checked( 'optional', $phone ); ?> />
<label for="phone_not_used"><?php _e('Not Used:', 'tightrope_form_widget'); ?></label>
<input id="phone_not_used" name="<?php echo $this->get_field_name('phone'); ?>" type="radio" value="not used" <?php checked( 'not used', $phone ); ?> />
</p>
<span>Date of Birth:</span>
<br />
<label for="dob_required"><?php _e('Required:', 'tightrope_form_widget'); ?></label>
<input id="dob_required" name="<?php echo $this->get_field_name('dob'); ?>" type="radio" value="required"  <?php checked( 'required', $dob ); ?> />
<label for="dob_optional"><?php _e('Optional:', 'tightrope_form_widget'); ?></label>
<input id="dob_optional" name="<?php echo $this->get_field_name('dob'); ?>" type="radio" value="optional" <?php checked( 'optional', $dob ); ?> />
<label for="dob_not_used"><?php _e('Not Used:', 'tightrope_form_widget'); ?></label>
<input id="dob_not_used" name="<?php echo $this->get_field_name('dob'); ?>" type="radio" value="not used" <?php checked( 'not used', $dob ); ?> />
</p>
<p>
<span>Captcha:</span>
<br />
<label for="captcha_required"><?php _e('Required:', 'tightrope_form_widget'); ?></label>
<input id="captcha_required" name="<?php echo $this->get_field_name('captcha'); ?>" type="radio" value="required" <?php checked( 'required', $captcha ); ?> />
<label for="captcha_not_used"><?php _e('Not Used:', 'tightrope_form_widget'); ?></label>
<input id="captcha_not_used" name="<?php echo $this->get_field_name('captcha'); ?>" type="radio" value="not used"  <?php checked( 'not used', $captcha ); ?> />
</p>
<p>
<span>Location:</span>
<br />
<label for="location_required"><?php _e('Required:', 'tightrope_form_widget'); ?></label>
<input id="location_required" name="<?php echo $this->get_field_name('location'); ?>" type="radio" value="required" <?php checked( 'required', $location ); ?> />
<label for="location_optional"><?php _e('Optional:', 'tightrope_form_widget'); ?></label>
<input id="location_optional" name="<?php echo $this->get_field_name('location'); ?>" type="radio" value="optional"  <?php checked( 'optional', $location ); ?> />
<label for="location_not_used"><?php _e('Not Used:', 'tightrope_form_widget'); ?></label>
<input id="location_not_used" name="<?php echo $this->get_field_name('location'); ?>" type="radio" value="not used"  <?php checked( 'not used', $location ); ?> />
</p>
<p>
<label for="<?php echo $this->get_field_id('location_type'); ?>"><?php _e('Dropdown:', 'tightrope_form_widget'); ?></label>
<input id="<?php echo $this->get_field_id('location_type'); ?>" name="<?php echo $this->get_field_name('location_type'); ?>" type="radio" value="dropdown"  <?php checked( 'dropdown', $location_type ); ?> />
</p>
<p>
<label for="<?php echo $this->get_field_id('location_type'); ?>"><?php _e('Text Field:', 'tightrope_form_widget'); ?></label>
<input id="<?php echo $this->get_field_id('location_type'); ?>" name="<?php echo $this->get_field_name('location_type'); ?>" type="radio" value="textfield" <?php checked( 'textfield', $location_type ); ?> />
</p>
<p>
<label for="<?php echo $this->get_field_id('city'); ?>"><?php _e('City:', 'tightrope_form_widget'); ?></label>
<input id="<?php echo $this->get_field_id('city'); ?>" name="<?php echo $this->get_field_name('city'); ?>" type="checkbox" value="city" <?php checked( 'city', $city ); ?> />
</p>
<p>
<label for="<?php echo $this->get_field_id('state'); ?>"><?php _e('State:', 'tightrope_form_widget'); ?></label>
<input id="<?php echo $this->get_field_id('state'); ?>" name="<?php echo $this->get_field_name('state'); ?>" type="checkbox" value="state" <?php checked( 'state', $state ); ?> />
</p>
<p>
<label for="<?php echo $this->get_field_id('locations'); ?>"><?php _e('Locations List, Colon Separated:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('locations'); ?>" name="<?php echo $this->get_field_name('locations');?>" type="text" value="<?php echo $locations; ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id('destinations'); ?>"><?php _e('From Destinations, Comma Separated:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('destinations'); ?>" name="<?php echo $this->get_field_name('destinations');?>" type="text" value="<?php echo $destinations; ?>" />
</p>
<p>
<span>Interests:</span>
<br />
<label for="interests_required"><?php _e('Required:', 'tightrope_form_widget'); ?></label>
<input id="interests_required" name="<?php echo $this->get_field_name('interests'); ?>" type="radio" value="required"  <?php checked( 'required', $interests ); ?> />
<label for="interests_optional"><?php _e('Optional:', 'tightrope_form_widget'); ?></label>
<input id="interests_optional" name="<?php echo $this->get_field_name('interests'); ?>" type="radio" value="optional" <?php checked( 'optional', $interests ); ?> />
<label for="interests_not_used"><?php _e('Not Used:', 'tightrope_form_widget'); ?></label>
<input id="interests_not_used" name="<?php echo $this->get_field_name('interests'); ?>" type="radio" value="not used" <?php checked( 'not used', $interests ); ?> />
</p>
<p>
<label for="<?php echo $this->get_field_id('interest_type'); ?>"><?php _e('Dropdown:', 'tightrope_form_widget'); ?></label>
<input id="<?php echo $this->get_field_id('interest_type'); ?>" name="<?php echo $this->get_field_name('interest_type'); ?>" type="radio" value="dropdown"  <?php checked( 'dropdown', $interest_type ); ?> />
</p>
<p>
<label for="<?php echo $this->get_field_id('interest_type'); ?>"><?php _e('Text Field:', 'tightrope_form_widget'); ?></label>
<input id="<?php echo $this->get_field_id('interest_type'); ?>" name="<?php echo $this->get_field_name('interest_type'); ?>" type="radio" value="textfield" <?php checked( 'textfield', $interest_type ); ?> />
</p>
<p>
<label for="<?php echo $this->get_field_id('placeholder'); ?>"><?php _e('Placeholder Text:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('placeholder'); ?>" name="<?php echo $this->get_field_name('placeholder');?>" type="text" value="<?php echo $placeholder; ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id('procedureone'); ?>"><?php _e('Procedure 1:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('procedureone'); ?>" name="<?php echo $this->get_field_name('procedureone');?>" type="text" value="<?php echo $procedureone; ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id('proceduretwo'); ?>"><?php _e('Procedure 2:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('proceduretwo'); ?>" name="<?php echo $this->get_field_name('proceduretwo');?>" type="text" value="<?php echo $proceduretwo; ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id('procedurethree'); ?>"><?php _e('Procedure 3:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('procedurethree'); ?>" name="<?php echo $this->get_field_name('procedurethree');?>" type="text" value="<?php echo $procedurethree; ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id('procedurefour'); ?>"><?php _e('Procedure 4:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('procedurefour'); ?>" name="<?php echo $this->get_field_name('procedurefour');?>" type="text" value="<?php echo $procedurefour; ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id('procedurefive'); ?>"><?php _e('Procedure 5:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('procedurefive'); ?>" name="<?php echo $this->get_field_name('procedurefive');?>" type="text" value="<?php echo $procedurefive; ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id('proceduresix'); ?>"><?php _e('Procedure 6:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('proceduresix'); ?>" name="<?php echo $this->get_field_name('proceduresix');?>" type="text" value="<?php echo $proceduresix; ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id('orientation'); ?>"><?php _e('Select Orientation', 'tightrope_form_widget'); ?></label>
<select name="<?php echo $this->get_field_name('orientation'); ?>" id="<?php echo $this->get_field_id('orientation'); ?>" class="widefat">
<?php
$orientations = array('Vertical', 'Horizontal');
foreach ($orientations as $value) {
echo '<option value="' . $value . '" id="' . $value . '"', $orientation == $value ? ' selected="selected"' : '', '>', $value, '</option>';
}
?>
</select>
</p>
<P>
<label for="<?php echo $this->get_field_id('submit'); ?>"><?php _e('Submit Button Text:', 'tightrope_form_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('submit'); ?>" name="<?php echo $this->get_field_name('submit');?>" type="text" value="<?php echo $submit; ?>" />
</p>
<?php

}


  // widget update
  function update($new_instance, $old_instance) {
    $instance = $old_instance;
      // Fields
      $instance['title'] = strip_tags($new_instance['title']);
      $instance['heading'] = strip_tags($new_instance['heading']);
      $instance['subheading'] = strip_tags($new_instance['subheading']);
      $instance['value'] = strip_tags($new_instance['value']);
      $instance['actionType'] = strip_tags($new_instance['actionType']);
      $instance['action'] = strip_tags($new_instance['action']);
      $instance['fullname'] = strip_tags($new_instance['fullname']);
      $instance['email'] = strip_tags($new_instance['email']);
      $instance['company'] = strip_tags($new_instance['company']);
      $instance['company_placeholder'] = strip_tags($new_instance['company_placeholder']);
      $instance['phone'] = strip_tags($new_instance['phone']);
      $instance['dob'] = strip_tags($new_instance['dob']);
      $instance['captcha'] = strip_tags($new_instance['captcha']);
      $instance['location'] = strip_tags($new_instance['location']);
      $instance['location_type'] = strip_tags($new_instance['location_type']);
      $instance['locations'] = strip_tags($new_instance['locations']);
      $instance['destinations'] = strip_tags($new_instance['destinations']);
      $instance['city'] = strip_tags($new_instance['city']);
      $instance['state'] = strip_tags($new_instance['state']);
      $instance['interests'] = strip_tags($new_instance['interests']);
      $instance['interest_type'] = strip_tags($new_instance['interest_type']);
      $instance['placeholder'] = strip_tags($new_instance['placeholder']);
      $instance['procedureone'] = strip_tags($new_instance['procedureone']);
      $instance['proceduretwo'] = strip_tags($new_instance['proceduretwo']);
      $instance['procedurethree'] = strip_tags($new_instance['procedurethree']);
      $instance['procedurefour'] = strip_tags($new_instance['procedurefour']);
      $instance['procedurefive'] = strip_tags($new_instance['procedurefive']);
      $instance['proceduresix'] = strip_tags($new_instance['proceduresix']);
      $instance['orientation'] = strip_tags($new_instance['orientation']);
      $instance['submit'] = strip_tags($new_instance['submit']);
     return $instance;

  }

  // widget display
  function widget($args, $instance) {
      extract( $args );
   // these are the widget options
      $number = str_replace('tightrope_form-', '', $widget_id);
   $title = apply_filters('widget_title', $instance['title']);
   $heading = $instance['heading'];
   $subheading = $instance['subheading'];
   $value = $instance['value'];
   $actionType = $instance['actionType'];
   $action = $instance['action'];
   $fullname = $instance['fullname'];
   $email = $instance['email'];
   $company = $instance['company'];
   $company_placeholder = $instance['company_placeholder'];
   $phone = $instance['phone'];
   $dob = $instance['dob'];
   $captcha = $instance['captcha'];
   $location = $instance['location'];
   $location_type = $instance['location_type'];
   $locations = $instance['locations'];
   $destinations = $instance['destinations'];
   $city = $instance['city'];
   $state = $instance['state'];
   $interests = $instance['interests'];
   $interest_type = $instance['interest_type'];
   $placeholder = $instance['placeholder'];
   $procedureone = $instance['procedureone'];
   $proceduretwo = $instance['proceduretwo'];
   $procedurethree = $instance['procedurethree'];
   $procedurefour = $instance['procedurefour'];
   $procedurefive = $instance['procedurefive'];
   $proceduresix = $instance['proceduresix'];
   $orientation = $instance['orientation'];
   $submit = $instance['submit'];
   echo $before_widget;
   // Display the widget
   
   // Check if title is set
   if ( $title ) {
      echo $before_title . $title . $after_title;
   }
   //form 
   echo '<div class="widget-text tightrope_form_widget_box">
          <div class="form-container-'.$orientation.'">';

          //check what type of action our form has
          //is it the regular or are unique one.
           if ($actionType == 'standard'){
            echo '<form name="signupForm" class="form_submit form_submit_standard" id="signupForm_'.$number.'" method="post" action="https://app.crystalpec.com/j1.pl?'.$action.'"> ';
          }
          else if ($actionType == 'unique'){
            echo '<form name="signupForm" class="form_submit form_submit_ajax" id="signupForm_'.$number.'" method="post" action="'.$action.'"> ';
          }

      echo '<input type="hidden" name="AutomaticTeamIDs" value='.$value.' />';
   // Check if heading is set
   if ( $heading ) {
      echo'<div class="heading"><h2>'.$heading.'</h2></div>';
   }
   // Check subheading is set
   if ( $subheading ) {
      echo'<div class="subheading"><h4>'.$subheading.'</h4></div>';
   }
   echo '<div class="form-wrap">';
   echo '<div class="field-wrap">';
   // Check if full name is set
   if ($fullname != 'not used'){
    if( $fullname == 'required' ) {
      echo '<div class="name-wrap">
    <input type="text" name="FullName" placeholder="Full Name*" maxlength="64" id="signup_FullName_'.$number.'" class="field" data-status="required"/>
          <span id="name" class="error-msg"></span>
      </div>';
    }
    else if($fullname == 'optional'){
      echo '<div class="name-wrap">
    <input type="text" name="FullName" placeholder="Full Name" maxlength="64" id="signup_FullName_'.$number.'" class="field" data-status="optional"/>
    <span id="name" class="error-msg"></span>
      </div>';
    }
   }
   //Email will always be set, it is required no matter what, no reason to check for it
    echo '<div class="email-wrap">
            <input type="email" name="Email" placeholder="Email*" maxlength="64" id="signup_Email_'.$number.'" class="field" data-status="required"/>
            <span id="email" class="error-msg"></span>
          </div>';
   // Check if Company is set
   if($company != 'not used'){
    if( $company == 'required' ) {
      echo '<div class="company-wrap">';
      if($company_placeholder){
        echo '<input type="text" name="Company" placeholder="'.$company_placeholder.'*" maxlength="64" id="signup_Company_'.$number.'" class="field" data-status="required"/>';
      }
      else{
       echo '<input type="text" name="Company" placeholder="Company Name*" maxlength="64" id="signup_Company_'.$number.'" class="field" data-status="required"/>'; 
      }
    
    echo '<span id="company" class="error-msg"></span>
      </div>';
    }
    else if( $company == 'optional' ) {
      echo '<div class="company-wrap">';
    if($company_placeholder){
        echo '<input type="text" name="Company" placeholder="'.$company_placeholder.'" maxlength="64" id="signup_Company_'.$number.'" class="field" data-status="required"/>';
      }
      else{
       echo '<input type="text" name="Company" placeholder="Company Name" maxlength="64" id="signup_Company_'.$number.'" class="field" data-status="required"/>'; 
      }
    
    echo '<span id="company" class="error-msg"></span>
      </div>';
    }
   }
   // Check if Phone is set
   if($phone != 'not used'){
    if( $phone == 'required' ) {
      echo '<div class="phone-wrap">
    <input type="text" name="Mobile" placeholder="Phone*" maxlength="64" id="signup_Mobile_'.$number.'" class="field" data-status="required"/>
    <span id="phone" class="error-msg"></span>
      </div>';
    }
    else if( $phone == 'optional' ) {
      echo '<div class="phone-wrap">
    <input type="text" name="Mobile" placeholder="Phone" maxlength="64" id="signup_Mobile_'.$number.'" class="field" data-status="optional"/>
    <span id="phone" class="error-msg"></span>
      </div>';
    }
   }
   // Check if Phone is set
   if($dob != 'not used'){
    if( $dob == 'required' ) {
           echo '<div class="dob-wrap">
    <input type="text" name="User14" placeholder="Birthday mm/dd/yyyy*" maxlength="64" id="signup_Birthday_'.$number.'" class="field" data-status="required"/>
    <span id="dob" class="error-msg"></span>
      </div>';
    }
    else if( $dob == 'optional' ) {
      echo '<div class="dob-wrap">
    <input type="text" name="User14" placeholder="Birthday mm/dd/yyyy" maxlength="64" id="signup_Birthday_'.$number.'" class="field" data-status="required"/>
    <span id="dob" class="error-msg"></span>
      </div>';
    }
   }
   // Check if Location is set
   if($location == 'required'){
    if ($location_type == 'dropdown'){
      //we took our possible form destination, and our
      //possible city locations in as strings with each one
      //separated by a specific delimeter so now we need to turn them into
      //an array so we can dynamically populate
      $form_destinations = explode(", ", $destinations);
      $city_locations = explode(": ", $locations);
      $combined = array();
      $i = 0;
      //were going to convert the two arrays into one associate array
     // that way we can pass it to our javascript
      foreach($city_locations as $value){
        $combined[$value] = $form_destinations[$i];
         $i++;
       }

      //using php's json encode function, we can
      //now convert our new associative array to 
      //json to pass
      $combined_as_json = json_encode($combined, JSON_PRETTY_PRINT);
      
      
      //start echoing out our field
     ?>

       <div class="location-wrap">
      <select name='City' id='signup_City_<?php echo $number; ?>' class='field field_location field_city' data-status='required'/>
        <option value="" disabled selected>Location*</option>
      <?php
       foreach ($city_locations as $value) {
          echo '<option value="'.$value .'">'.$value.'</option>';
        }
        echo '</select>
              <span id="location" class="error-msg"></span>'; ?>
        <input type="hidden" id="destination_submit" name="destination" value='<?php echo $combined_as_json; ?>'/>

             <?php echo '</div>';
    }
    else {
      if($city && $city == 'city') {
        echo '<div class="location-wrap">
        <input type="text" name="City" id="signup_City_'.$number.'" class="field field_location field_city" placeholder ="City" data-status="required"/>
        <span id="location class="error-msg"></span>
        </div>';
      }
      if($state && $state == 'state') {
        echo '<div class="location-wrap">
              <select name="State" id="signup_State_'.$number.'" class="field field_location field_state" data-status="required">
                <option value="" disabled selected>State*</option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District Of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
              </select>
        <span id="location class="error-msg"></span>
        </div>';
      }
      if (! $city && ! $state) {
        echo '<div class="location-wrap">
        <input type="text" name="City" id="signup_City_'.$number.'" class="field field_location field_city" placeholder="City" data-status="required"/>
        <span id="location class="error-msg"></span>
        </div>';
      }
    }
   }
   if($location == 'optional'){
    if ($location_type == 'dropdown'){
      //we took our possible form destination, and our
      //possible city locations in as strings with each one
      //separated by a specific delimeter so now we need to turn them into
      //an array so we can dynamically populate
      $form_destinations = explode(", ", $destinations);
      $city_locations = explode(": ", $locations);
      $combined = array();
      $i = 0;
      //were going to convert the two arrays into one associate array
     // that way we can pass it to our javascript
      foreach($city_locations as $value){
        $combined[$value] = $form_destinations[$i];
         $i++;
       }

      //using php's json encode function, we can
      //now convert our new associative array to 
      //json to pass
      $combined_as_json = json_encode($combined, JSON_PRETTY_PRINT);
      
      
      //start echoing out our field
     ?>

       <div class="location-wrap">
      <select name='City' id='signup_City_<?php echo $number; ?>' class='field field_location field_city' data-status='optional'/>
        <option value="" disabled selected>Location</option>
      <?php
       foreach ($city_locations as $value) {
          echo '<option value="'.$value .'">'.$value.'</option>';
        }
        echo '</select>
              <span id="location" class="error-msg"></span>'; ?>
        <input type="hidden" id="destination_submit" name="destination" value='<?php echo $combined_as_json; ?>'/>

             <?php echo '</div>';
    }
    else {
      if($city && $city == 'city') {
        echo '<div class="location-wrap">
        <input type="text" name="City" id="signup_City_'.$number.'" class="field field_location field_city" placeholder="City" data-status="optional"/>
        <span id="location class="error-msg"></span>
        </div>';
      }
      if($state && $state == 'state') {
        echo '<div class="location-wrap">
        <select name="State" id="signup_State_'.$number.'" class="field field_location field_state" data-status="optional">
                <option value="" disabled selected>State</option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District Of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
              </select>
        <span id="location class="error-msg"></span>
        </div>';
      }
      if (! $city && ! $state) {
        echo '<div class="location-wrap">
        <input type="text" name="City" id="signup_City_'.$number.'" class="field field_location field_city" placeholder="City" data-status="required"/>
        <span id="location class="error-msg"></span>
        </div>';
      }
    }
   }
  // Check if interests
   if($interests != 'not used'){
    if($interests == 'required' && $interest_type == 'dropdown' ) {
      if($placeholder){
       echo '<div class="service-wrap">
    <select name="SkillsInterests" id="signup_SkillsInterests_'.$number.'" class="field" data-status="required">
               <option value="" disabled selected>'.$placeholder.'*</option>';
      }
      else{
        echo '<div class="service-wrap">
    <select name="SkillsInterests" id="signup_SkillsInterests_'.$number.'" class="field" data-status="required">
                <option value="" disabled selected>Service*</option>';
      }
      if( $procedureone ) {
        echo '<option value="'.$procedureone.'">'.$procedureone.'</option>';
      }
      if ( $proceduretwo ){
        echo '<option value="'.$proceduretwo.'">'.$proceduretwo.'</option>';
      }
      if ( $procedurethree ){
        echo '<option value="'.$procedurethree.'">'.$procedurethree.'</option>';
      }
      if ( $procedurefour ){
        echo '<option value="'.$procedurefour.'">'.$procedurefour.'</option>';
      }
      if ( $procedurefive ){
        echo '<option value="'.$procedurefive.'">'.$procedurefive.'</option>';
      }
      if ( $proceduresix ){
        echo '<option value="'.$proceduresix.'">'.$proceduresix.'</option>';
      }
      echo '<option value="Other">Other</option>
      </select>
  <span id="service" class="error-msg"></span>
  </div>';
   }
   else if( $interests == 'required' && $interest_type == 'textfield') {
    if($placeholder){
      echo '<div class="service-wrap">
    <input type="text" name="SkillsInterests" placeholder="'.$placeholder.'*" id="signup_SkillsInterests_'.$number.'" class="field" data-status="required">
    <span id="service" class="error-msg"></span>
      </div>';
    }
    else{
      echo '<div class="service-wrap">
    <input type="text" name="SkillsInterests" placeholder="Service*" id="signup_SkillsInterests_'.$number.'" class="field" data-status="required">
    <span id="service" class="error-msg"></span>
      </div>';
    }
  }
  else if($interests == 'optional' && $interest_type == 'dropdown' ) {
      if($placeholder){
       echo '<div class="service-wrap"><select name="SkillsInterests" id="signup_SkillsInterests_'.$number.'" class="field" data-status="optional">
              <option value="" disabled selected>'.$placeholder.'</option>';
      }
      else{
        echo '<div class="service-wrap"><select name="SkillsInterests" id="signup_SkillsInterests_'.$number.'" class="field" data-status="optional">
              <option value="" disabled selected>Select Procedure</option>';
      }

      if( $procedureone ) {
        echo '<option value="'.$procedureone.'">'.$procedureone.'</option>';
      }
      if ( $proceduretwo ){
        echo '<option value="'.$proceduretwo.'">'.$proceduretwo.'</option>';
      }
      if ( $procedurethree ){
        echo '<option value="'.$procedurethree.'">'.$procedurethree.'</option>';
      }
      if ( $procedurefour ){
        echo '<option value="'.$procedurefour.'">'.$procedurefour.'</option>';
      }
      if ( $procedurefive ){
        echo '<option value="'.$procedurefive.'">'.$procedurefive.'</option>';
      }
      if ( $proceduresix ){
        echo '<option value="'.$proceduresix.'">'.$proceduresix.'</option>';
      }
      echo '<option value="Other">Other</option>
      </select><span id="service" class="error-msg"></span></div>';
   }
   else if( $interests == 'optional' && $interest_type == 'textfield') {
    if($placeholder){
     echo '<div class="service-wrap">
    <input type="text" name="SkillsInterests" placeholder="'.$placeholder.'" id="signup_SkillsInterests_'.$number.'" class="field" data-status="optional">
    <span id="service" class="error-msg"></span>
     </div>';
    }
    else{
     echo '<div class="service-wrap">
    <input type="text" name="SkillsInterests" placeholder="Service" id="signup_SkillsInterests_'.$number.'" class="field" data-status="optional">
    <span id="service" class="error-msg"></span>
     </div>';
    }
  }
}
  if($captcha == 'required'){
   echo '</div>';
    echo '<div id="captchaTable">
    <div id="captchaText">For security purposes, please type the letters and numbers you see below.</div>
        <ul>
        <li><img id="captchaImage" src="https://app.crystalpec.com/captcha.pl?20150616061554"></li>
        <li><input id="captchaInput" type="text" name="captcha" size="16" maxlength="6" style="color: #fff; font-weight: bold; font-family: verdana; font-size: 14px;" class="field"></li>
        <li><input id="formSubmit" type="submit" name="formSubmit" value="Send" onclick="javascript: return SubmitForm(event, '.$number.')" /></li></ul></div>';
   }
   if($captcha != 'required'){
   if ( $submit ) {
      echo '<input id="formSubmit" type="submit" name="formSubmit" value="'.$submit.'"/>';
  echo '</div>';
   }
   if ( !$submit ) {
      echo '<input id="formSubmit" type="submit" name="formSubmit" value="Send"/>';
  echo '</div>';
   }
 }
   
   echo'<input type="hidden" name="Referrer" value="" /> 
        <input type="hidden" name="qstring" id="q" value="'.$action.'" /> 
        <input type="hidden" name="formSubmitCheck" value="1" />
    </div>';
   echo '</form>
          </div>
        </div>';
   echo $after_widget;
  }
}
// register widget
add_action('widgets_init', create_function('', 'return register_widget("tightrope_form");'));

//enqueue validation script
function form_validation(){
    wp_register_script('moment_library', 'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js');
    wp_register_script('form_validation',plugins_url('js/validation.js', __FILE__), array('jquery', 'moment_library'));
    wp_enqueue_script('form_validation');
    
}
add_action('wp_enqueue_scripts','form_validation');
/**
 * Register style sheet.
 */
function register_plugin_styles() {
  wp_register_style( 'tightrope-style', plugins_url( 'tightrope/css/styles.css' ) );
  wp_enqueue_style( 'tightrope-style' );
}

add_action( 'wp_enqueue_scripts', 'register_plugin_styles' );
?>