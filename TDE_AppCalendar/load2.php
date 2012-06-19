<?php
  error_reporting(7);
  header("Cache-Control: no-store, no-cache, must-revalidate");
  header("Pragma: no-cache");  
  define("TDE_APP_AJAX",1);
  require "admin/config.inc.php";
  $calid = str_replace  (TDE_APP_CAL_PREFIX, "",$_GET["id"]);
  $query = "SELECT * FROM ".TDE_APP_CALENDAR_DATA_TABLE." where ".TDE_APP_DATA_IDCALENDAR."='".$calid."'";
  $result = mysql_query($query) or die("Query failed");
  while ($row = mysql_fetch_array($result))
  {
      echo $row[TDE_APP_DATA_ID]."\n";
      $dn =  explode(" ", $row[TDE_APP_DATA_DATETIME]);
      $d1 =  explode("-", $dn[0]);
      $d2 =  explode(":", $dn[1]);
      
      echo intval($d1[0]).",".intval($d1[1]).",".intval($d1[2])."\n";
      echo intval($d2[0]).":".($d2[1])."\n";
      echo $row[TDE_APP_DATA_TITLE]."\n";
      echo $row[TDE_APP_DATA_DESCRIPTION]."\n*-*\n";
  }

?>