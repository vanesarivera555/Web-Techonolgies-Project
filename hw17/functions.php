<?php							//html is a dsl language
              //it enable , turn dom_session array, array never leaves server. so mean impotnt info to be stores. the the 									user cant see. sorting o =n server side of the side session
function redirect ( $uri )    //accepting an uri, accepting text.//closing php imm
{ ?>                            
	<script type="text/javascript">  //creating js, locating page
	<!-- 
	document.location.href="<?php echo $uri; ?>";   //creating a string 
	-->
</script>
<?php die;}
function db_iconnect($db){
    $un="webuser";
    $pw="6fYOnxFeN19W2UJT";
    $hostname="localhost";
    $dblink=new mysqli($hostname,$un,$pw,$db);
    return $dblink;
    
    
 //without $dblink we would have to type it out everysingle time.
// we could type in this info to connect to php my admin
//for this reason we do not use root, 
 //function that i can call and send the database name and it will connect to that database aslong as we have access to it.   
}
?>
