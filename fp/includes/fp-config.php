<?php
/*
Used to store all of WEB120 configuration information
*/
define("THIS_PAGE", basename($_SERVER['PHP_SELF']));
       
switch(THIS_PAGE) {
    case "index.php":
        $title= "FP - Index";
        break;
    case "locations.php":
        $title= "FP - Locations";
        break;
    default:
        $title= THIS_PAGE;
}
?>