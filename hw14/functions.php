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
?>