<script src="assets/js/jquery-3.5.1.js"></script>
<?php 
//jquey is frame work that runns on js, 
include("functions.php");
echo '<!doctype html>';
echo '<html>';
echo '<head>';
echo '<met charset="utf-8"></met>';
echo '<title>Web Tech </title>';
echo '<link rel="stylesheet" href="assets/css/bootstrap.css">';
echo '<style>';
echo '#container { padding:10px;}';
echo '</style>';
echo '<script src="assets/js/hover.js"></script>';
echo '<script src="assets/js/dataValidation.js"></script>';
echo '</head>';
echo '<body>';
echo '<div id="page-inner">';
include("navigation.php");
echo '<div id="mainContent">';
include("home.php");
echo '</div>';
echo '</div>';
echo '</body>';
echo '</html>';
?>
<script>
function updateContent(page){  //destinatoin of content we  can to queury

    $.ajax({
        type:'post',
        //response of data is beign fed into data
        url:'https://ec2-18-118-187-45.us-east-2.compute.amazonaws.com/hw17/'+page+'.php',  
        success:function(data){
            //hide spinner here
            //if successfull , it will create a function that will take the page in here
			switch (page){  //switch control stage of menue
                case "home":
                    document.getElementById("school").classList.remove("active");
                    document.getElementById("work").classList.remove("active");
                    document.getElementById("contact").classList.remove("active");
                    document.getElementById("home").classList.add("active");
                    document.title="Home";
                    break;
                case "school":
                    document.getElementById("home").classList.remove("active");
                    document.getElementById("work").classList.remove("active");
                    document.getElementById("contact").classList.remove("active");
                    document.getElementById("school").classList.add("active");
                    document.title="School";

                    break;
                case "work":
                    document.getElementById("home").classList.remove("active");
                    document.getElementById("school").classList.remove("active");
                    document.getElementById("contact").classList.remove("active");
                    document.getElementById("work").classList.add("active");
                     document.title="Work";

                    break;
                case "contact":
                    document.getElementById("home").classList.remove("active");
                    document.getElementById("work").classList.remove("active");
                    document.getElementById("school").classList.remove("active");
                    document.getElementById("contact").classList.add("active");
                    document.title="Contact";

                    break;
                default:
                    document.getElementById("school").classList.remove("active");
                    document.getElementById("work").classList.remove("active");
                    document.getElementById("contact").classList.remove("active");
                    document.getElementById("home").classList.add("active");
                    break;
            };
             
            $('#mainContent').html(data);//Show fetched data //load main content with data that is return from the page. Update first then we execute or load content of data here. 
        }
    });
};
</script>
