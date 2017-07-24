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
<div class="customer">
    <p>Events</p>
<?php include "eventsViewer.php"; ?>
     <p>Paid and unpaid Bills</p>
    <?php include "getFile.php";?>
</div>
    </div>

</body>
</html>
