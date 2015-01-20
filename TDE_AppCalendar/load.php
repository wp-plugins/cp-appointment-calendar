<?php
  error_reporting(7);
  header("Cache-Control: no-store, no-cache, must-revalidate");
  header("Pragma: no-cache");  
  define("TDE_APP_AJAX",1);
  require "admin/config.inc.php";
  $calid = str_replace  (TDE_APP_CAL_PREFIX, "",$_GET["id"]);
  $query = "SELECT * FROM ".TDE_APP_CONFIG." where ".TDE_APP_CONFIG_ID."='".$calid."'";
  $result = mysql_query($query) or die("Query failed");
  if ($row = mysql_fetch_array($result))
  {
      echo $row[TDE_APP_CONFIG_WORKINGDATES].";";
      echo $row[TDE_APP_CONFIG_RESTRICTEDDATES].";";
      echo $row[TDE_APP_CONFIG_TIMEWORKINGDATES0].";";
      echo $row[TDE_APP_CONFIG_TIMEWORKINGDATES1].";";
      echo $row[TDE_APP_CONFIG_TIMEWORKINGDATES2].";";
      echo $row[TDE_APP_CONFIG_TIMEWORKINGDATES3].";";
      echo $row[TDE_APP_CONFIG_TIMEWORKINGDATES4].";";
      echo $row[TDE_APP_CONFIG_TIMEWORKINGDATES5].";";
      echo $row[TDE_APP_CONFIG_TIMEWORKINGDATES6].";";
  }

?>