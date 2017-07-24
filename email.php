<?php
/*Enter email address for the email to be sent to*/
$myemail  = "121944@student.midchesh.ac.uk";


/*Enter the name of the function with a post method*/
$title = check_input($_POST['title'], "Enter your name");
$forename = check_input($_POST['forename'], "Enter your name");
$surname = check_input($_POST['surname'], "Enter your name");
$Address = check_input($_POST['address'], "Enter your Address");
$town = check_input($_POST['town'], "Enter your town");
$postcode = check_input($_POST['postcode'], "Enter your Postcode");
$phone = check_input($_POST['phone'], "Enter your Phone Number");
$email = check_input($_POST['email'],"Enter an email address");
$reason = check_input($_POST['reason'],"Select a reason for contact");
$way = check_input($_POST['way'], "Please tell us how you want to be contact");
$other_state = check_input($_POST['other_state']);
$comments = check_input($_POST['comments'], "Write your comments");

/* Check if the email Address is valid email to use for a reply*/
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
    show_error("E-mail address not valid");
}

/*the layout of the email when receive from the website*/
$reason = "$reason";
$message = "Hello!

Your contact form has been submitted by:

First-name: $forename
Surname: $surname
Address: $Address
Postcode: $postcode
Phone Number: $phone
E-mail: mailto:$email
Reason for the email: $reason
What day: $day
Other date: $other_state
Way of Contact: $way

Comments:
$comments

End of message
";


mail($myemail, $reason, $message);

/*Take the user to a new web page if email was sent correctly*/
header('Location: contact.html#sent');
exit();

/*Check to make sure all inputs are fill in*/
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}
/*Show an error if none of the inputs are not fill in*/
function show_error($myError)
{
?>
    <html>
    
<head>  
<link rel="stylesheet" type="text/css" href="style.css">
</head>  
<body>

    <b>Please correct the following error:</b><br />
    <?php echo $myError; ?>

    </body>
    </html>
<?php
exit();
}
?>
