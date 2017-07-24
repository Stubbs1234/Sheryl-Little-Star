<!DOCTYPE html>
<head>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="form.js"></script>
    <script type="text/javascript">
	//Setting the height and width 0 ready for later
	var height = 0;
	var width = 0;
	//this gets the the size of the screen
 function show(){
	if (!document.all&&!document.layers&&!document.getElementById)
	return
	console.log(screen.width)
	width = screen.width;
	console.log(screen.height)
	height = screen.height;
	console.log(screen.colorDepth)
	console.log(screen.pixelDepth)
	console.log(screen.availWidth)
	console.log(screen.availHeight)
	}
	//this function load the small screen style sheet
function loadjscssfile1(){
	console.log("running small")
	var cssId = 'smallScreenSize'; 
	if (!document.getElementById(cssId))
		{
		var head  = document.getElementsByTagName('head')[0];
		var link  = document.createElement('link');
		link.id   = cssId;
		link.rel  = 'stylesheet';
		link.type = 'text/css';
		link.href = 'smallScreenSize.css';
		link.media = 'all';
		head.appendChild(link);
		}
	}
	//this loads the normal size stylesheet
function loadjscssfile(){
	console.log("running")
	var cssId = 'style';  
	if (!document.getElementById(cssId))
		{
		var head  = document.getElementsByTagName('head')[0];
		var link  = document.createElement('link');
		link.id   = cssId;
		link.rel  = 'stylesheet';
		link.type = 'text/css';
		link.href = 'style.css';
		link.media = 'all';
		head.appendChild(link);
		}
	}
	//this runs the funcation show which will run the javascript 
	show()
	//this works out what style is going to be needed
	if (width <= 1280 && height <= 1024) {
	console.log("correct")
	loadjscssfile1()
	} else {
	loadjscssfile()
	}
 </script>
</head>
<body>
    <div id="logo">
	<img src="images/logo.png" title="Logo" alt="Logo" title="Logo" class="logoPic"/>
</div>
    <div id="links">
	<a href="logout.php"><img src="images/lock.png" title="Logout" alt="Logout"/></a>
 </div>
    <div id="main1"> 
    <div id="nav">
	<a href="index.html"><img src="images/home.png" alt="Home" title="Home" class="home"/></a>
	<a href="about.html"><img src="images/about.png" alt="About" title="About" class="about"/></a>
	<a href="fees.html"><img src="images/fees.png" alt="Fees" title="Fees" class="fees"/></a>
	<a href="activity.html"><img src="images/activity.png" title="Activity" alt="Activity" class="activity"/></a>
	<a href="contact.html"><img src="images/contact.png" title="Contact" alt="Contact" class="contact"/></a>
	</div>

<div id="owner">
<!--Gets all the users on the database-->
    <p>Users</p>
    <?php
    include "getUsers.php";
    ?>
     
    <p> New User</p>
    <form name="newUser" action="newUser.php" method="post" onsubmit="return vaildate()">
       <table>
<tr>
<td>First Name:</td>
<td><input type="text" name="firstname" id="firstname"  onblur="firstnameNotBlank()" size="20" maxlength="15"/></td>
</tr><tr>
<td>Last Name:</td>
<td><input type="text" name="lastname" id="lastname" onblur="lastnameNotBlank()" size="20" maxlength="15"/></td>
</tr><tr>
<td>Email:</td>
<td><input type="text" name="email" id="email" onblur="emailNotBlank()" size="35" maxlength="35"/></td>
</tr><tr>
<td>Childs Name:</td>
<td><input type="text" name="name" id="name" onblur="childNotBlank()" size="35" maxlength="35"/></td>
</tr><tr>
<td>User Type:</td>
<td><select name="user" id="user"><option value="1">Admin</option>
    <option value="2" selected>Customer</option>
    </select></td>
</tr>
</table>  
        <p><input type="submit" name="inputForm" value="Submit"/><input type="Reset" value="Clear"/></p>
    </form>
    <p>New Bill</p>
    <form action="upload.php" method="post" enctype="multipart/form-data" onsubmit="return fileUpload();">
<table>
<tr> 
<td>File:</td>
<td>
<input type="hidden" name="MAX_FILE_SIZE" id="MAX_FILE_SIZE" value="2000000">
<input name="userfile" type="file" id="userfile">
</td>
    </tr>
    <tr>
        <td>Total:</td><td><input name="total" type="text" id="total"></td>
    </tr>
    <tr>
        <td>Customer:</td>
<td><select name="owner">
<?php 
    require "connect.php";
$sql = mysql_query("SELECT * FROM $tbl_name");
while ($row = mysql_fetch_array($sql)){
echo "<option value='".$row['email']."'>" .$row['firstname']. "</option>";
}
?>
    </select></td></tr>
    </table>
        <p><input name="upload" type="submit" id="upload" value=" Upload "></p>
</form>
    <p>Paid and unpaid Bills</p>
    <?php include "getFile.php";?>
    <p>Upload a Event</p>
    <form action="eventsupload.php" name="upload" method="post" role="form" onsubmit="return eventVaildate()">
    <table>
            <tr>
        <td>Date:</td><td><input type="text" id="date" name="date" class="textFields" onblur="dateNotBlank()"/></td>
    </tr>
 <tr>
        <td>News:</td><td>	<input type="text" id="news" name="news" class="textFields" onblur="newsNotBlank()"/></td>
        </tr>
	<tr>
        <td>Description:</td><td>	<input type="text" id="des" name="des" class="textFields" onblur="desNotBlank()"/></td>
        </tr>
        </table>
        <p><input id="uploadbutton" type="submit" value="Upload Event" class="buttons"/></p>
</form>
    <p>Events Viewer</p>
    <?php include "eventsViewer.php";?>
    </div>
    </div>

</body>
</html>
