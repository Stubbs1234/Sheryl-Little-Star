function checkForm()
{
  var result = true;  
  //Check to see if the box are fill before send
if (exampleForm.forename.value=="")
	  {
	  window.alert("Please enter your first name");
	  result = false;
	  }
	 if (exampleForm.surname.value=="")
    {
      alert("Please enter your last name");
      result = false;
	  }
	  if (exampleForm.address.value==""){
	alert("Please enter your address");
	result = false;
	}
	if (exampleForm.postcode.value==""){
	alert("Please enter your postcode");
	result = false; 
	}
	if (exampleForm.phone.value==""){
	alert("Please enter your phone number");
	result = false; 
	}
  if (exampleForm.email.value==""){
	alert("Please enter your email address");
	result = false; 
	}
return result;
}

function fail()
//Show an alert if the user select nothing
{
  alert("Are you sure you want to do that");
}

function visible(id) 
//Shows a text box if the user selects other
{ 
var vis = document.getElementById(id);
	   if (vis.style.display == 'block')
	   {
	   vis.style.display = "none";
	   }
	   else
	   {
	   vis.style.display = "block";
	   }  
}
function visible1(id) 
//Shows a text box if the user selects other
{ 
var vis = document.getElementById(id);
	   if (vis.style.display == 'block')
	   {
	   vis.style.display = "none";
	   }
	   else
	   {
	   vis.style.display = "block";
	   }  
}

function reset()
//reset the JavaScript and the form
{
       document.exampleForm.other.checked = false
   var vis = document.getElementById('state');       
		  vis.style.display = "none"
}

function codeStyle(x) {
document.getElementById(x).style.border="1px red solid"
}

function clearStyle(x) {
document.getElementById(x).style.border="1px black solid"
}


///////////////////////////////
function firstnameNotBlank() {
var firstnameID = document.getElementById('firstname').value;
if (firstnameID.length==0)
{
return "Enter firstname\n";
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
return "Enter last name\n";
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
return "Enter email\n";
}
else 
{
return "";
}
}

function childNotBlank() {
    var e = document.getElementById("user");
var strUser = e.options[e.selectedIndex].value;
var requiredID = document.getElementById('name').value;
    if (strUser == "1") {
        return "";
    } else {
if (requiredID.length==0)
{
return "Enter Childs Name\n";
}
else 
{
return "";
}
}
}
function vaildate()
{
console.log("working")
var result = firstnameNotBlank() + lastnameNotBlank() + childNotBlank() + emailNotBlank();
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

function dateNotBlank() {
var requiredID = document.getElementById('date').value;
    if (requiredID.length==0)
{
return "Enter date Name\n";
}
else 
{
return "";
}
}


function newsNotBlank() {
var requiredID = document.getElementById('news').value;
    if (requiredID.length==0)
{
return "Enter News\n";
}
else 
{
return "";
}
}

function desNotBlank() {
var requiredID = document.getElementById('des').value;
    if (requiredID.length==0)
{
return "Enter description \n";
}
else 
{
return "";
}
}

function eventVaildate()
{
console.log("working")
var result = dateNotBlank() + newsNotBlank() + desNotBlank()
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
function fileUpload()
{
    console.log("working");
    if(document.getElementById("userfile").files.length == 0 ){
    alert("No files selected");
        return false;
}
}
