<?php
echo '<div class="panel panel-default">';
echo '<div class="panel-heading">';
echo '<div class="text-center">Main Banner Section</div>';
echo '</div></div>';

echo '<div class="row">';
echo '<div class="col-sm-6">';
echo '<div class="panel panel-default" id="panel1" onmouseover="panelOn(this.id)" onmouseout="panelOff(this.id)">';
echo '<div class="panel-heading">Panel 1 </div>';
echo '<div class="panel-body">';
echo 'Welcome to my main page!';
echo '</div>';
echo '</div>';
echo '</div>';

echo '<div class="col-sm-6">';
echo '<div class="panel panel-defualt" id="panel2" onmouseover="panelOn(this.id)" onmouseout="panelOff(this.id)">';
echo '<div class="panel-heading">Panel 2</div>';
echo '<div class="panel-body">';
echo '<img src="images/profile.jpg" alt="Profile" title="Maria Vanesa" height="auto" width="316" align="left">';
echo '</div>'; //close body
echo '</div>'; //close panel default
echo '</div>'; //close class


echo '<div class="panel panel-default" id= "panel3" onmouseover="panelOn(this.id)" onmouseout="panelOff(this.id)">';
echo '<div class="panel-heading"> Panel 3</div>';
echo '<div class="panel-body">';
echo 'Click on each section to learn about me!';
echo '</div>'; //close panle defult
echo '</div>'; //close panel body
echo '<div class="panel-footer">';
echo '<div class="text-center">Assignment 17 PHP </div></div>';
?>