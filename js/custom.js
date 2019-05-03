function check(){
	var p=document.getElementById("pwd").value;
	var c=document.getElementById("conf-pwd").value;
	document.getElementById("errormsg").style.display = 'inline';
	if(p!=c)
		{
			document.getElementById("errormsg").style.display = 'inline';
			document.getElementById("errormsg").style.color = 'red';
			document.getElementById("errormsg").innerHTML = "Passwords Don't Match"; 
		}
	else
		{
			document.getElementById("errormsg").innerHTML = " "; 
		}	
}

function reset(){
	document.getElementById("errormsg").style.display = 'inline';
	document.getElementById("errormsg").innerHTML = " "; 
}