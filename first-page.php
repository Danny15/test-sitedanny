<?php
  //Buffer larger content areas like the main page content
  ob_start();
?>


 

<?php
   $root = "../";
   include($root."inc/config.php");

   $sideBar = "";
   //User Tabs >> changes class of selected tab in User Menu
   $UserTab_first-page =  "selected";


  //Assign all Page Specific variables
  $pagemaincontent = ob_get_contents();
  ob_end_clean();
  //page variables like meta, title and includes
  //$pagetitle = "$G_APP_NAME: Home";
  //Apply the template
  include($root."index.html");
?>