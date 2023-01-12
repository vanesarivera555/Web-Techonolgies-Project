// JavaScript Document
// JavaScript Document
function calc()
{
    var num1=document.getElementById("num1").value;
    var num2=document.getElementById("num2").value;
    var answer;
    var regEx=/^\d+$/;
	if (!num1.match(regEx))
    {
        document.getElementById('num1Help').innerHTML='Numbers only please!';
		document.getElementById('submit').classList.remove('btn-success');
		document.getElementById('submit').classList.add('btn-danger');
		document.getElementById('submit').classList.add('disabled');
		console.log('Some error message');
		console.log('Num 1 is: '+num1);
    }
	
   if (!num2.match(regEx))
    {
        document.getElementById('num2Help').innerHTML='Numbers only please!';
		document.getElementById('submit').classList.remove('btn-success');
		document.getElementById('submit').classList.add('btn-danger');
		document.getElementById('submit').classList.add('disabled');
		console.log('Some error message');
		console.log('Num 2 is: '+num2);
    }
	
    else
    {
        document.getElementById('submit').classList.remove('disabled');
		document.getElementById('submit').classList.remove('btn-danger');
		document.getElementById('submit').classList.add('btn-success');
		console.log('Everything looks good');
		var select = document.getElementById('funct').value;
		console.log(select);
		switch (select){
			case 'sub':
				answer=num1 - num2;
				break;
			case 'add':
				answer= parseInt(num1) + parseInt(num2);
				break;
			case 'multiply':
				answer=num1 * num2;
				break;
			case 'divide':
				answer=num1 / num2;
				break;

		}
		if (num1.match(regEx))
		{
			document.getElementById('num1Help').innerHTML='';
			
		}
	
		if (num2.match(regEx))
		{
			document.getElementById('num2Help').innerHTML='';

		}
	
		console.log('selection is ' + select);
		var output=document.getElementById('answer');
		output.innerHTML='The answer is: '+answer;
    }

	
	
}