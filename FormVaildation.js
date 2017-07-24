function firstnameNotBlank() {
var firstnameID = document.getElementById('firstname').value;
if (firstnameID.length==0)
{
return "Enter your firstname\n";
}
else 
{
return "";
}
}

function lastnameNotBlank() {
var lastnameID = document.getElementById('lastname').value;
if (lastnameID.length==0)
{
return "Enter your last name\n";
}
else 
{
return "";
}
}

function addressNotBlank() {
var addressID = document.getElementById('address').value;
if (addressID.length==0)
{
return "Enter your address\n";
}
else 
{
return "";
}
}

function postcodeNotBlank() {
var postcodeID = document.getElementById('postcode').value;
if (postcodeID.length==0)
{
return "Enter your postcode\n";
}
else 
{
return "";
}
}

function emailNotBlank() {
var emailID = document.getElementById('email').value;
if (emailID.length==0)
{
return "Enter your email\n";
}
else 
{
return "";
}
}

function requiredNotBlank() {
var requiredID = document.getElementById('area').value;
if (requiredID.length==0)
{
return "Enter your area\n";
}
else 
{
return "";
}
}

function datePattern()
{
var dateMatch = document.getElementById('date').value;
var patt=/\d{4}\-\d{1,2}\-\d{1,2}/;
if(!patt.test(dateMatch))
{
return "Please enter a valid date\n";
}
else
{
return "";
}
}

function vaildate()
{
console.log("working")
var result = datePattern() + firstnameNotBlank() + lastnameNotBlank() + addressNotBlank() + postcodeNotBlank() + emailNotBlank() + requiredNotBlank();
	if (result == "")
	{
	return true;
	}
	else
	{
	alert(result);
	return false;
	}
}


