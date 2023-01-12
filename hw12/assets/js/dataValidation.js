// JavaScript Document
// JavaScript Document
var checker1= true;
var checker2= true;
var checker3= true;
var checker4= true;
var checker5= true;
var checker6= true;
var checker7= true;

function checkFName()
{
	var fname=document.getElementById("fname").value;
	var regExName=/^[a-zA-Z\s]*$/;
	if (!fname.match(regExName) && fname != '')
	{
		checker1 = false;
		alert("Provide a vaild first name!!");
	}
	else checker1 = true;
}

function checkLName(
){
	var lname=document.getElementById("lname").value;
	var regExName=/^[a-zA-Z\s]*$/;
	if (!lname.match(regExName) && lname != '')
    {
		checker2 = false;
		alert("provide a vaild last name!");
    }
	else checker2 = true;
}


function checkComm()
{
	var regExNamee=/^[a-zA-Z\s]*$/;
    var comment=document.getElementById("comment").value;
	if (!comment.match(regExNamee))
    {
		checker3 = false;
		alert("Special Characteres not allowed!");
    }	
	else checker3 = true;
	
}

function checkEmail()
{
	var email=document.getElementById("email").value;
	var regExEmail=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/; 
	if (document.getElementById("methodEmail").checked == true || document.getElementById("methodEmail").checked == false)
	{
		if (!email.match(regExEmail) && email != '')
			{  
				checker4 = false;
				alert('Please provide a valid email address!');
			}
		else checker4 = true;
	}
}

function contactMethod()
{
	checkEmail();
	var phone=document.getElementById("phone").value;
	var email=document.getElementById("email").value;
	var regExNum=/^\d{3}-\d{3}-\d{4}$/;
	var regExemail=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/; 

	if (document.getElementById("methodPhone").checked == true)
	{
		if (!phone.match(regExNum) && phone != '')
		{
			checker5 = false;
			alert('Enter phone number in format XXX-XXX-XXXX');
		}
		else checker5 = true;
	}		
	
	
	
	if (document.getElementById("methodEmail").checked == true)
	{
		if (!phone.match(regExNum) && phone != '')
		{
			checker5 = false;
			alert('Enter phone number in format XXX-XXX-XXXX');
		}
		else checker5 = true;
	}		
	
	
}

function checkDOB()
{
	var birthDate=document.getElementById("DOB").value;
	var regExDOB=/^\d{2}\/\d{2}\/\d{4}$/;
	if (birthDate =='')
	{
		checker7 = false;
		alert('Date of Birth is a Required field');
    }
	if (!birthDate.match(regExDOB) && birthDate != '')
	{
		checker7 = false;
		alert('Enter birth date in format MM/DD/YYYY');
    }	
}

function showInput()
{
	checkFName();
	checkLName();
	checkEmail();
	contactMethod();
	checkComm();
	checkDOB();
	
	if (checker1 == true && checker2 == true && checker3 == true  && checker3 == true && checker4 == true && checker5 == true && checker6 == true && checker7 == true)
	{
		alert('First Name : ' + 
		 document.getElementById("fname").value + '\n'+ 'Last Name : ' + document.getElementById("lname").value + '\n' + 'Email : ' + document.getElementById("email").value + '\n' + 'Phone: ' + document.getElementById("phone").value + '\n' + 'DOB: ' + document.getElementById("DOB").value + '\n' + 'Comment : ' + document.getElementById("comment").value );
	}
}
