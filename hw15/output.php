<?php
echo "<p>Hello World!</p>";
$firstName=$_POST['fname'];
$lastName=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$comment=$_POST['comment'];
echo "<div>First Name: $firstName</div>";
echo "<div>Last Name: $lastName</div>";
echo "<div>Email $email</div>";
echo "<div>Phone $phone</div>";
echo "<div>Comment: $comment</div>";
?>