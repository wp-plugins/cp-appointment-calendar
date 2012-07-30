<?php

if ( !defined('DEX_AUTH_INCLUDE') ) 
{
    echo 'Direct access not allowed.';
    exit;
}

?>
<form name="FormEdit" action="<?php get_site_url(); ?>" method="post" onsubmit="return doValidate(this);">
<?php


  echo __("Select date and time").":";
?>

<link rel="stylesheet" type="text/css" href="<?php echo plugins_url('TDE_AppCalendar/all-css.css', __FILE__); ?>" />
<script>
var pathCalendar = "<?php echo cp_appointment_get_site_url(); ?>";

var dex_global_date_format = '<?php echo get_option('calendar_dateformat', DEX_APPOINTMENTS_DEFAULT_CALENDAR_DATEFORMAT); ?>';
var dex_global_military_time = '<?php echo get_option('calendar_militarytime', DEX_APPOINTMENTS_DEFAULT_CALENDAR_MILITARYTIME); ?>';
var dex_global_start_weekday = '<?php echo get_option('calendar_weekday', DEX_APPOINTMENTS_DEFAULT_CALENDAR_WEEKDAY); ?>';
var dex_global_mindate = '<?php $value = get_option('calendar_mindate', DEX_APPOINTMENTS_DEFAULT_CALENDAR_MINDATE); if ($value != '') echo date("n/j/Y", strtotime($value)); ?>';
var dex_global_maxdate = '<?php $value = get_option('calendar_maxdate', DEX_APPOINTMENTS_DEFAULT_CALENDAR_MAXDATE); if ($value != '') echo date("n/j/Y",strtotime($value)); ?>';

</script>
<script type="text/javascript" src="<?php echo plugins_url('TDE_AppCalendar/all-scripts.js', __FILE__); ?>"></script>


<script>
initAppCalendar("cal1",<?php echo get_option('calendar_pages', TDE_APP_DEFAULT_CALENDAR_PAGES); ?>,2,"<?php echo get_option('calendar_language', TDE_APP_DEFAULT_CALENDAR_LANGUAGE); ?>",{m1:"<?php _e('Please select the appointment time.'); ?>"});
</script>


<input name="dex_appointments_post" type="hidden" id="1" />
<input name="selDaycal1" type="hidden" id="selDaycal1" />
<input name="selMonthcal1" type="hidden" id="selMonthcal1" />
<input name="selYearcal1" type="hidden" id="selYearcal1" />
<input name="selHourcal1" type="hidden" id="selHourcal1" />
<input name="selMinutecal1" type="hidden" id="selMinutecal1" />
<div style="z-index:1000;">
  <div id="cal1Container"></div>
</div>


<div style="clear:both;"></div>
<div id="selddiv" style="font-weight: bold;margin-top:5px;padding:3px;"></div>


<script type="text/javascript">

 function updatedate()
 {
    if (document.FormEdit.selDaycal1.value != '')
    {
        var minute = document.FormEdit.selMinutecal1.value;
        if (minute.length == 1)
            minute = "0"+minute;
        if (dex_global_date_format == '1')    
            selected_date = document.FormEdit.selDaycal1.value+"/"
                                                      +document.FormEdit.selMonthcal1.value+"/"
                                                      +document.FormEdit.selYearcal1.value+", "
                                                      +document.FormEdit.selHourcal1.value+":"
                                                      +minute;
        else
            selected_date = document.FormEdit.selMonthcal1.value+"/"
                                                      +document.FormEdit.selDaycal1.value+"/"
                                                      +document.FormEdit.selYearcal1.value+", "
                                                      +document.FormEdit.selHourcal1.value+":"
                                                      +minute;                                                      
        document.getElementById("selddiv").innerHTML = "<?php echo _e("Selected date"); ?>: "+selected_date;
    }
 }
 
 setInterval('updatedate()',200);
 
 function doValidate(form)
 {
    if (form.phone.value == '')
    {
        alert('<?php _e('Please enter a valid phone number'); ?>.');
        return false;
    }
    
    if (form.email.value == '')
    {
        alert('<?php _e('Please enter a valid email address'); ?>.');
        return false;
    }
    
    if (form.question.value == '')
    {
        alert('<?php _e('Please write your Comments/Questions'); ?>.');
        return false;
    }    

    if (form.selDaycal1.value == '')
    {
        alert('<?php _e('Please select date and time for the call'); ?>.');
        return false;
    }    
    return true;
 } 
</script>


<br />


<?php _e('Your phone number'); _e("(starting with '+ country code')");?>:<br />
<input type="text" name="phone" value=""><br />

<?php _e('Your name'); ?>:<br />
<input type="text" name="name" value=""><br />

<?php _e('Your email'); ?>:<br />
<input type="text" name="email" value=""><br />

<?php _e('Comments/Questions'); ?>:<br />
<textarea name="question" style="width:100%"></textarea><br />


<input type="submit" name="subbtn" value="<?php _e("Continue"); ?>">
</form>







