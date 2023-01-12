<script src="assets/js/jquery-3.5.1.js"></script>
<?php	
echo '<div id="container">';
echo '<div class="panel panel-primary">';
echo '<div class="panel-heading">Contact Form Entries</div>';
echo '<div class="panel-body">';
echo '<table border="1">';
echo '<tr>';
echo '<th> First Name</th>';
echo '<th> Last Name</th>';
echo '<th> Email</th>';
echo '<th> Comment</th>';
echo '</tr>';
echo '<tbody id="content">';//js needs a tag to be sending data to, will be geting table information into the body.
echo '</tbody>';
echo '</table>';
echo '</div>';  //end panel-body
echo '</div>';  //end panel-primary
echo '</div>';  //end container   
?>
<script>
function refresh_div() {  //create a new function called refresh_div, this function will cald ajax query method for jquery.
    $.ajax({
        type: 'post',
        url: 'https://ec2-18-118-187-45.us-east-2.compute.amazonaws.com/hw17/query_entries.php',  //for querying info, go here and get all data returned, and to be sent to content. Body div will be recieave this information.
        success: function(data) { //will query the uri ^ , when getting succes, it will get the pay load -the data, i will add this payload directy as html. 
        $('#content').html(data);
    }
});
};
    setInterval(function(){ refresh_div(); }, 500);  //Evey 500 miliseconds, it will exceute- it will run  script every half second. Retrieves info and info will be dynamically loaded to content. This is a small db so quereis_entries are fine.
    refresh_div();
</script>