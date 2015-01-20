<?php

if ( !is_admin() ) 
{
    echo 'Direct access not allowed.';
    exit;
}

?>
<div class="wrap">
<h2>CP Appointment Calendar</h2>



<div style="border:1px solid #664444;background-color:#FDFDC8;width:90%;padding-left:10px;padding-right:10px;font-size:12px;">
    <p><strong>Upgrade notice:</strong><br /><br />
        This plugin is the <strong>free version of the CP Appointment Calendar</strong>. If you already have the pro version please use your personal download link to update it to the latest pro version.<br />
        <br /><strong>Important note:</strong> There is a more advanced plugin named <strong><a href="http://wordpress.dwbooster.com/calendars/appointment-booking-calendar?cpapp=up#download">Appointment Booking Calendar</a></strong> developed based in this one that contains all the features present in this plugin plus a large additional set of features in both free and commercial versions, including (also in <strong>free version</strong>):
    <br ><br >&nbsp; - Anti-spam Captcha image.
    <br >&nbsp; - Multi-slot Bookings.
    <br >&nbsp; - Language & translations support
    <br >&nbsp; - iCal feeds
    <br >&nbsp; - Printable list of appointments
    <br >&nbsp; - Many additional configuiration settings
    <br >&nbsp; - ... and a lot more of features
<br /><br />

 To see the plugin details go to the <strong><a href="http://wordpress.dwbooster.com/calendars/appointment-booking-calendar?cpapp=up#download">Appointment Booking Calendar</a></strong> page.</p>
</div>


<form method="post" action="options.php"> 

<?php settings_fields( 'dex-appointments-group' ); ?>

<?php do_settings_fields( 'dex-appointments-group' ); ?>

   
<div id="normal-sortables" class="meta-box-sortables">


 <div id="metabox_basic_settings" class="postbox" >
  <h3 class='hndle' style="padding:5px;"><span>Calendar Configuration / Administration</span></h3>
  <div class="inside">
  
   <link rel="stylesheet" type="text/css" href="<?php echo plugins_url('TDE_AppCalendar/all-css.css', __FILE__); ?>" />
   <link rel="stylesheet" type="text/css" href="<?php echo plugins_url('TDE_AppCalendar/simpleeditor.css', __FILE__); ?>" />
   <link rel="stylesheet" type="text/css" href="<?php echo plugins_url('TDE_AppCalendar/tabview.css', __FILE__); ?>" />
   <script>
   var pathCalendar = "<?php echo cp_appointment_get_site_url(); ?>";
   </script>
   <script type="text/javascript" src="<?php echo plugins_url('TDE_AppCalendar/all-scripts.js', __FILE__); ?>"></script>
   <script type="text/javascript" language="JavaScript" src="<?php echo plugins_url('TDE_AppCalendar/tabview.js', __FILE__); ?>"></script>
   <script type="text/javascript" language="JavaScript" src="<?php echo plugins_url('TDE_AppCalendar/simpleeditor-beta-min.js', __FILE__); ?>"></script>
   
   <script>initAppCalendar("cal<?php echo TDE_APP_DEFAULT_CALENDAR_ID; ?>","3","1","<?php echo TDE_APP_DEFAULT_CALENDAR_LANGUAGE; ?>",{m1:"Please, select your appointment."});</script>
   
   <div style="padding:10px"><div id="caladmin"><div id="cal<?php echo TDE_APP_DEFAULT_CALENDAR_ID; ?>Container"></div></div></div>
   <div style="clear:both;height:20px" ></div>
   <div id="demo" class="yui-navset" style="padding-left:10px;width:690px;"></div>
   <div style="clear:both;height:20px" ></div>      
   
  </div>    
 </div> 
 
 <div id="metabox_basic_settings" class="postbox" >
  <h3 class='hndle' style="padding:5px;"><span>Public Calendar Settings</span></h3>
  <div class="inside"> 
   
   <table class="form-table">
        <tr valign="top">        
        <th scope="row">Calendar language</th>
        <td>
             <?php $value = get_option('calendar_language',DEX_APPOINTMENTS_DEFAULT_CALENDAR_LANGUAGE); ?>
             <select name="calendar_language">               
               <option value="DE" <?php if ($value == 'DE') echo ' selected="selected"'; ?>>German</option>
               <option value="DU" <?php if ($value == 'DU') echo ' selected="selected"'; ?>>Dutch</option>
               <option value="EN" <?php if ($value == 'EN') echo ' selected="selected"'; ?>>English</option>
               <option value="FR" <?php if ($value == 'FR') echo ' selected="selected"'; ?>>French</option>
               <option value="IT" <?php if ($value == 'IT') echo ' selected="selected"'; ?>>Italian</option>
               <option value="JP" <?php if ($value == 'JP') echo ' selected="selected"'; ?>>Japanese</option>
               <option value="PT" <?php if ($value == 'PT') echo ' selected="selected"'; ?>>Portuguese</option>               
               <option value="SP" <?php if ($value == 'SP') echo ' selected="selected"'; ?>>Spanish</option>            
            </select>
        </td>
        </tr>
        
        <tr valign="top">        
        <th scope="row">Date format</th>
        <td>           
             <?php $value = get_option('calendar_dateformat',DEX_APPOINTMENTS_DEFAULT_CALENDAR_DATEFORMAT); ?>
             <select name="calendar_dateformat">               
               <option value="0" <?php if ($value == '0') echo ' selected="selected"'; ?>>mm/dd/yyyy</option>
               <option value="1" <?php if ($value == '1') echo ' selected="selected"'; ?>>dd/mm/yyyy</option>         
             </select>           
        </td>
        </tr>
        
        <tr valign="top">        
        <th scope="row">Calendar Pages</th>
        <td>           
             <?php $value = get_option('calendar_pages',DEX_APPOINTMENTS_DEFAULT_CALENDAR_PAGES); ?>
             <select name="calendar_pages">               
               <option value="1" <?php if ($value == '1') echo ' selected="selected"'; ?>>1</option>
               <option value="2" <?php if ($value == '2') echo ' selected="selected"'; ?>>2</option>         
               <option value="3" <?php if ($value == '3') echo ' selected="selected"'; ?>>3</option>         
               <option value="4" <?php if ($value == '4') echo ' selected="selected"'; ?>>4</option>         
               <option value="5" <?php if ($value == '5') echo ' selected="selected"'; ?>>5</option>         
               <option value="6" <?php if ($value == '6') echo ' selected="selected"'; ?>>6</option>         
               <option value="7" <?php if ($value == '7') echo ' selected="selected"'; ?>>7</option>         
               <option value="8" <?php if ($value == '8') echo ' selected="selected"'; ?>>8</option>         
               <option value="9" <?php if ($value == '9') echo ' selected="selected"'; ?>>9</option>         
               <option value="10" <?php if ($value == '10') echo ' selected="selected"'; ?>>10</option>         
               <option value="11" <?php if ($value == '11') echo ' selected="selected"'; ?>>11</option>         
               <option value="12" <?php if ($value == '12') echo ' selected="selected"'; ?>>12</option>         
             </select>           
        </td>
        </tr>        
        
        <tr valign="top">        
        <th scope="row">Military time</th>
        <td>
             <?php $value = get_option('calendar_militarytime',DEX_APPOINTMENTS_DEFAULT_CALENDAR_MILITARYTIME); ?>
             <select name="calendar_militarytime">               
               <option value="0" <?php if ($value == '0') echo ' selected="selected"'; ?>>No</option>
               <option value="1" <?php if ($value == '1') echo ' selected="selected"'; ?>>Yes</option>         
             </select>         
        </td>
        </tr>
        
        <tr valign="top">        
        <th scope="row">Start weekday</th>
        <td>
             <?php $value = get_option('calendar_weekday',DEX_APPOINTMENTS_DEFAULT_CALENDAR_WEEKDAY); ?>
             <select name="calendar_weekday">               
               <option value="0" <?php if ($value == '0') echo ' selected="selected"'; ?>>Sunday</option>
               <option value="1" <?php if ($value == '1') echo ' selected="selected"'; ?>>Monday</option>
               <option value="2" <?php if ($value == '2') echo ' selected="selected"'; ?>>Tuesday</option>         
               <option value="3" <?php if ($value == '3') echo ' selected="selected"'; ?>>Wednesday</option>         
               <option value="4" <?php if ($value == '4') echo ' selected="selected"'; ?>>Thursday</option>         
               <option value="5" <?php if ($value == '5') echo ' selected="selected"'; ?>>Friday</option>         
               <option value="6" <?php if ($value == '6') echo ' selected="selected"'; ?>>Saturday</option>
             </select>         
        </td>
        </tr>              
        
        <tr valign="top">        
        <th scope="row">Minimum  available date</th>
        <td><input type="text" name="calendar_mindate" size="40" value="<?php echo get_option('calendar_mindate',DEX_APPOINTMENTS_DEFAULT_CALENDAR_MINDATE); ?>" /><br />
         <em style="font-size:11px;">Examples: 2012-10-25, today, today + 3 days</em>
        </td>
        </tr>
        
        <tr valign="top">        
        <th scope="row">Maximum available date</th>
        <td>
         <input type="text" name="calendar_maxdate" size="40" value="<?php echo get_option('calendar_maxdate',DEX_APPOINTMENTS_DEFAULT_CALENDAR_MAXDATE); ?>" /><br />
         <em style="font-size:11px;">Examples: 2012-10-25, today, today + 3 days</em>
        </td>
        </tr>
        
   </table>   

  </div>    
 </div>

 <div id="metabox_basic_settings" class="postbox" >
  <h3 class='hndle' style="padding:5px;"><span>Paypal Payment Configuration</span></h3>
  <div class="inside">

    <table class="form-table">
        <tr valign="top">        
        <th scope="row">Enable Paypal Payments?</th>
        <td><input type="checkbox" name="enable_paypal" disabled size="40" value="1" <?php if (get_option('enable_paypal',DEX_APPOINTMENTS_DEFAULT_ENABLE_PAYPAL)) echo 'checked'; ?> /> The feature for working without PayPal is implemented/available in the <a href="http://wordpress.dwbooster.com/calendars/cp-appointment-calendar#download">pro version</a>.</em>
        </td>
        </tr>    
    
        <tr valign="top">        
        <th scope="row">Paypal email</th>
        <td><input type="text" name="paypal_email" size="40" value="<?php echo get_option('paypal_email',DEX_APPOINTMENTS_DEFAULT_PAYPAL_EMAIL); ?>" /></td>
        </tr>
         
        <tr valign="top">
        <th scope="row">Request cost</th>
        <td><input type="text" name="request_cost" value="<?php echo get_option('request_cost',DEX_APPOINTMENTS_DEFAULT_COST); ?>" /></td>
        </tr>
        
        
        <tr valign="top">
        <th scope="row">Paypal product name</th>
        <td><input type="text" name="paypal_product_name" size="50" value="<?php echo get_option('paypal_product_name',DEX_APPOINTMENTS_DEFAULT_PRODUCT_NAME); ?>" /></td>
        </tr>        
        
        <tr valign="top">
        <th scope="row">Currency</th>
        <td><input type="text" name="currency" value="<?php echo get_option('currency',DEX_APPOINTMENTS_DEFAULT_CURRENCY); ?>" /></td>
        </tr>
        
        <tr valign="top">
        <th scope="row">URL to return after successful  payment</th>
        <td><input type="text" name="url_ok" size="70" value="<?php echo get_option('url_ok',DEX_APPOINTMENTS_DEFAULT_OK_URL); ?>" /></td>
        </tr>        
        
        <tr valign="top">
        <th scope="row">URL to return after an incomplete or cancelled payment</th>
        <td><input type="text" name="url_cancel" size="70" value="<?php echo get_option('url_cancel',DEX_APPOINTMENTS_DEFAULT_CANCEL_URL); ?>" /></td>
        </tr>        
        
        
        <tr valign="top">
        <th scope="row">Paypal language</th>
        <td><input type="text" name="paypal_language" value="<?php echo get_option('paypal_language',DEX_APPOINTMENTS_DEFAULT_PAYPAL_LANGUAGE); ?>" /></td>
        </tr>             
     </table>  

  </div>    
 </div>    
 
 
 <div id="metabox_basic_settings" class="postbox" >
  <h3 class='hndle' style="padding:5px;"><span>Notification Settings</span></h3>
  <div class="inside">
     <table class="form-table">    
        <tr valign="top">
        <th scope="row">Notification "from" email</th>
        <td><input type="text" name="notification_from_email" size="40" value="<?php echo get_option('notification_from_email', DEX_APPOINTMENTS_DEFAULT_PAYPAL_EMAIL); ?>" /></td>
        </tr>             
        <tr valign="top">
        <th scope="row">Send notification to email</th>
        <td><input type="text" name="notification_destination_email" size="40" value="<?php echo get_option('notification_destination_email', DEX_APPOINTMENTS_DEFAULT_PAYPAL_EMAIL); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Email subject confirmation to user</th>
        <td><input type="text" name="email_subject_confirmation_to_user" size="70" value="<?php echo get_option('email_subject_confirmation_to_user', DEX_APPOINTMENTS_DEFAULT_SUBJECT_CONFIRMATION_EMAIL); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Email confirmation to user</th>
        <td><textarea cols="70" rows="5" name="email_confirmation_to_user"><?php echo get_option('email_confirmation_to_user', DEX_APPOINTMENTS_DEFAULT_CONFIRMATION_EMAIL); ?></textarea></td>
        </tr>
        <tr valign="top">
        <th scope="row">Email subject notification to admin</th>
        <td><input type="text" name="email_subject_notification_to_admin" size="70" value="<?php echo get_option('email_subject_notification_to_admin', DEX_APPOINTMENTS_DEFAULT_SUBJECT_NOTIFICATION_EMAIL); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Email notification to admin</th>
        <td><textarea cols="70" rows="5" name="email_notification_to_admin"><?php echo get_option('email_notification_to_admin', DEX_APPOINTMENTS_DEFAULT_NOTIFICATION_EMAIL); ?></textarea></td>
        </tr>                                                
     </table>  
  </div>    
 </div>  
 
  
</div> 


        
    <?php submit_button(); ?>

[<a href="http://wordpress.dwbooster.com/contact-us" target="_blank">Request Custom Modifications</a>] | [<a href="http://wordpress.dwbooster.com/calendars/cp-appointment-calendar" target="_blank">Help</a>]
</form>
</div>















