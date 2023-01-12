<!-- Will allow to redirect the same page over and over again, most headers
Die stops script from excecuting -->
<!--//check to see ir err is set on the url, if so display them approproate.
//we take err message and put it in u                                   rl, if we do then we can check to see if it is set on the url. If it set on the url mean we have error, so then we have to set them appropriatly. -->
<?php	
session_start();
echo '<div id="container">';
echo '<div class="panel panel-primary">';
echo '<div class="panel-heading">Contact Form</div>';
echo '<div class="panel-body">';
echo '<form method="post" action="">';
echo '<div class="form-group">';
echo '<label>First Name:</label>';              
if (isset($_SESSION['first']) && $_SESSION['first']!="")
	echo '<input class="form-control" name="fname" type="text" id="fname" onblur="checkFName(this.value)" value="'.$_SESSION['first'].'">';
else
    echo '<input class="form-control" name="fname" type="text" id="fname" onblur="checkFName(this.value)">';
    echo '<p class="help-block" id="fnameHelp"></p>';
    echo '</div>';           
        
if (isset($_GET['err']) && strstr($_GET['err'],"FnameNull"))
	echo '<p class="help-block" id="fnameHelp">First name cannot be blank!';
else
	echo '<p class="help-block" id="fnameHelp"></p>';          

        
echo '<div class="form-group">';
echo '<label>Last Name:</label>';
if (isset($_SESSION['last']) && $_SESSION['last']!="")
	echo '<input class="form-control" name="lname" type="text" id="lname" onblur="checkLName(this.value)" value="'.$_SESSION['last'].'">';
else{
    echo '<input class="form-control" name="lname" type="text" id="lname" onblur="checkLName(this.value)">';
    echo '<p class="help-block" id="lnameHelp"></p>';
    echo '</div>';  
}
if (isset($_GET['err']) && strstr($_GET['err'],"LnameNull"))
	echo '<p class="help-block" id="lnameHelp">Lastname cannot be blank!';
else
	echo '<p class="help-block" id="lnameHelp"></p>';
   
        
echo'<div class="form-group">';
echo '<label>BirthDate:</label>';
if (isset($_SESSION['DOB']) && $_SESSION['DOB']!="")
	echo '<input class="form-control" name="DOB" type="text" id="DOB" onblur="checkDOB(this.value)" value="'.$_SESSION['DOB'].'">';
else{
    echo '<input class="form-control" name="DOB" type="text" id="DOB" onblur="checkDOB(this.value)">';
    echo '<p class="help-block" id="DOBHelp">';
    echo '</div>';
}
if (isset($_GET['err']) && strstr($_GET['err'],"birthdateNull"))
	 echo '<p class="help-block" id="DOBHelp">Birthday cannot be blank!';
else
	echo '<p class="help-block" id="DOBHelp"></p>';                    
    // </form>   
        
          
echo'<div class="form-group">';
echo '<label>Prefered Method of Contact:</label><br>';
echo '<div class="form-group">';
echo '<label for="email">Email</label>';
if (isset($_SESSION['prefMethod']) && ($_SESSION['prefMethod']=="email"))
    echo '<input type="radio" id="methodEmail" name="prefMethod" value="email">';
    
else
    echo '<input type="radio" id="methodEmail" name="prefMethod">';  echo '</div>';
        
echo'<div class="form-group">';
echo '<label for="phone">Phone</label>';
if (isset($_SESSION['prefMethod']) &&($_SESSION['prefMethod']=="phone"))
    echo '<input type="radio" id="methodPhone" name="prefMethod" 
    value="phone">';
//phone">';

else
    echo '<input type="radio" id="methodPhone" name="prefMethod">';    echo '</div>';

   //echo $_SESSION['prefMethod']; 
   //value="phone">';
  if (isset($_GET['err']) && strstr($_GET['err'],"prefMethodNull"))
	 echo '<p class="help-block" id="prefMethodHelp"> Prefered Method cannot be blank!';
else
	echo '<p class="help-block" id="prefMethodHelp"></p>';          
        
        
    
echo '<div class="form-group">';
echo '<label> Phone Number:</label>';
if (isset($_SESSION['phone']) && $_SESSION['phone']!="")
	echo '<input class="form-control" name="phone" type="text" id="phone" onblur="contactMethod(this.value)" value="'.$_SESSION['phone'].'">';
else{
    echo '<input class="form-control" name="phone" type="text" id="phone" onblur="contactMethod(this.value)";
    <p class="help-block" id="phoneHelp">';
    echo '</div>';
}
if (isset($_GET['err']) && strstr($_GET['err'],"phoneNull") && $_SESSION['prefMethod']=="phone")  
    echo '<p class="help-block" id="phoneHelp">Phone is required if selected as Prefered Method of Contact';
else
	echo '<p class="help-block" id="phoneHelp"></p>';            
     

echo '<div class="form-group">';
echo '<label>Email:</label>';
if (isset($_SESSION['email']) && $_SESSION['email']!="")
	echo '<input class="form-control" name="email" type="text" id="email" onblur="contactMethod(this.value)" value="'.$_SESSION['email'].'">';
else
    echo '<input class="form-control" name="email" type="text" id="email" onblur="checkEmail(this.value)";
    <p class="help-block" id="emailHelp">';
    echo '</div>';

    
               
if (isset($_GET['err']) && strstr($_GET['err'],"emailNull") && $_SESSION['prefMethod']== "email")
    echo '<p class="help-block" id="emailHelp">Email is required if selected as Prefered Method of Contact';

else
	echo '<p class="help-block" id="emailHelp"></p>';    
   
        
echo '<div class="form-group">';
echo '<label>Comment:</label>';
if (isset($_SESSION['comment']) && $_SESSION['comment']!="")
	echo '<input class="form-control" type="text" name="comment" id="comment" onblur="checkComm(this.value)" value="'.$_SESSION['comment'].'">;
    <p class="help-block" id="commentHelp"></p>';
else{
    echo '<input class="form-control" type="text" name="comment" id="comment" onblur="checkComm(this.value)">';
    echo '<p class="help-block" id="commentHelp"></p>';   
    echo '</div>';      
}
        
    echo '<hr>';
    echo '<button id="submit" name="submit" class="btn btn-block btn-success" type="submit">Submit</button>';
    echo '</form>';
    echo '</div>';
    echo '</div>';
    echo '</div>';

    echo '<hr>';
    echo '<div class="row">';
    echo '<div class="panel panel-default" id="2" onmouseover="panelOn(this.id)" onmouseout="panelOff(this.id)">';
    echo '<div class="panel-heading">Email Link</div>';
    echo '<div class="col-sm-3">';
    echo '<br>';
    echo '<button type="button" class="btn-default.focus"> <a href="mailto:mariavanesa@uni.edu">Email</a></button>';
    echo '</div>';
    echo '';
    echo '<div class="panel panel-default" id="3" onmouseover="panelOn(this.id)" onmouseout="panelOff(this.id)">';
    echo '';
    echo '<div class="panel-body">';
    echo '<img src="images/profile.jpg" alt="Profile" title="Maria Vanesa" height="auto" width="200" align="left">';
    echo '</div></div></div></div>';
    echo '';
    echo '<div class="row">';
    echo '<div class="panel panel-default" id="4" onmouseover="panelOn(this.id)" onmouseout="panelOff(this.id)">';
    echo '<div class="panel-heading">LinkedIn Information </div>';
    echo '<div class="col-sm-3">';
    echo '<br>';
    echo '<button type="button" class="btn-default.focus"><a href="https://www.linkedin.com/school/the-university-of-texas-at-san-antonio/mycompany/">LinkedIn</a></button>';
    echo '</div>';
    echo '</div></div>';
    echo '';
    echo '<br>';
    echo '<div class="panel panel-default" id="5" onmouseover="panelOn(this.id)" onmouseout="panelOff(this.id)">';
    echo '<div class="panel-heading">Languages</div>';
    echo '<div class="panel-body">';
    echo 'Languages: Fluent Spanish, Fluent English, Intermediate Italian';
    echo '</div></div>';
    echo '';

                                                                //has to redirect; we have to take error message and put it in url;
if(isset($_POST['submit']))                                      // use php to control, logic based on user event - in this case its submit;
{
                                                                //	die("submit has been pressed");
	$err="";
	if (isset($_POST['fname']) && $_POST['fname']!=""){
		$firstName=$_POST['fname'];
		$_SESSION['first']=$firstName;
	}
	else
		$err.="FnameNull";
    
	if (isset($_POST['lname']) && $_POST['lname']!=""){
		$lastName=$_POST['lname'];
		$_SESSION['last']=$lastName;
	}

	else
		$err.="LnameNull";
    
    if (isset($_POST['DOB']) && $_POST['DOB']!=""){
		$DOB=$_POST['DOB'];
		$_SESSION['DOB']=$DOB;
	}
	else 
		$err.="birthdateNull";     
    
      if (isset($_POST['prefMethod']) && ($_POST['prefMethod']=="phone")){  
		$prefMethod=$_POST['prefMethod'];
		$_SESSION['prefMethod']=$prefMethod;
          
    }
        else{
            $err.="prefMethodNull";
       
        } 
  	
	if (isset($_POST['email']) && $_POST['email']!=""){
		$email=$_POST['email'];
		$_SESSION['email']=$email;
	}
	else
		$err.="emailNull";   
    
    if (isset($_POST['phone']) && $_POST['phone']!=""){
		$phone=$_POST['phone'];
		$_SESSION['phone']=$phone;
	}
	else
		$err.="phoneNull";
    	
	if (isset($_POST['comment']) && $_POST['comment']!=""){
		$comment=$_POST['comment'];
		$_SESSION['comment']=$comment;
	}
	else
		$err.="commentNull";
	
if (isset($err) && $err!="")
{
                                                                            //die("Error is $err");
	redirect("index.php?page=contact&err=$err");
}
echo "<div>First Name: $firstName</div>";
echo "<div>Last Name: $lastName</div>";
echo "<div>BirthDate: $DOB</div>";
echo "<div>Prefered Method: $prefMethod</div>";
echo "<div>Email $email</div>";
echo "<div>Phone $phone</div>";
echo "<div>Comment: $comment</div>";

}      

echo '<div class="panel-footer">';
echo '<div class="text-center">Assignment 9 Bootstrap</div>';
echo '</div>';
echo '</div>';
echo '</body>';
echo '</html>';
echo '';             
?>