<?php 
include("functions.php");
 echo '<!doctype html>';
echo '<html>';
echo '<head>';
echo '<met charset="utf-8"></met>';
echo '<title>Web Tech </title>';
echo '<link rel="stylesheet" href="assets/css/bootstrap.css">';
echo '<script src="assets/js/hover.js"></script>';
echo '<script src="assets/js/dataValidation.js"></script>';
echo '<style>';
echo '#container { padding:10px;}';
echo '</style>';
echo '</head>';
echo '<body>';
echo '<div class="row">';
    include("navigation.php");
if (isset($_GET['page']) && $_GET['page']!= "")
    {
        $page=$_GET['page'];
        switch ($page){
            case "work":
                include("work.php");
                    break;
            case "school":
                include("school.php");
                    break;
            case "contact":
                include("contact.php");
                    break;
                default;
            case "home":
                include("home.php");
                    break;
        }     
    }
else {
    include("home.php");
}

echo '</body>';
echo '</html>';
?>
