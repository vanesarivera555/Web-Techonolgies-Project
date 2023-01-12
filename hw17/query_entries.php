<?php
include("functions.php");
//page is being called separate, so mut call functions page
$dblink=db_iconnect("contact_form");
$sql="Select * from `entries`";
$result=$dblink->query($sql) or //var $result; excute query and save response to var called result, 
die("Something went wrong with $sql<br>".$dblink->error);


// Assigning the  current value of the current row, for the sql querie that has been exucted in line 4. Give result in associate array, I want the name of the field to be array name in data. Hackers They have to know the field names, -safer for dev. Array will retrun 5 field for record
while ($data=$result->fetch_array(MYSQLI_ASSOC))
{
echo '<tr>';
echo '<td>'.$data['first_name'].'</td>';
echo '<td>'.$data['last_name'].'</td>';
echo '<td>'.$data['email'].'</td>';
echo '<td>'.$data['comment'].'</td>';
echo '</tr>';
}
?>