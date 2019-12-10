<!doctype html>
<html lang="en">
<!-- This is an assignment for my Client-side Web Development class, Paul's Pet Palace is ficticous.  Thanks. -->
<!-- This is PPP2 -->

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143266012-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-143266012-1');
    </script>

    <title>Julie Baliga - Paul's Pet Palace</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/9abc6f4c0d.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Lobster+Two&display=swap" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet" type="text/css" />
</head>

<body id="contact" data-spy="scroll" data-target=".navbar" data-offset="50">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0"></script>

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><i class="fas fa-paw"></i> Paul's Pet Palace</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="about-us.html">About Us</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                Pets
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="dogs.html"><i class="fas fa-dog"></i> Dogs</a></li>
                                <li> <a href="cats.html"><i class="fas fa-cat"></i> Cats</a></li>
                                <li> <a href="birds.html"><i class="fas fa-crow"></i> Birds</a></li>
                            </ul>
                        </li>
                        <li><a href="contact-us.html"><i class="fa fa-fw fa-envelope"></i>Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!---->
        
       <main  class="bg-img">
      
				

				<section class="thankyou">
					 <header class="blockheader" class="container">
							 <h1 class="container-text2" <a name="thankyou">Thank you for your submission!</h1>
					 </header>

			 </section>
<<?php
if(!isset($_POST['submit']))
{

	echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

//Validate first
if(empty($name)||empty($visitor_email))
{
    echo "Name and email are mandatory!";
    exit;
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}

$email_from = 'stardreamed@gmail.com';
$email_subject = "New Form submission";
$email_body = "You have received a new message from the user $name.\n".
    "Here is the message:\n $message\n";

$to = "stardreamed@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: thank-you.html');


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}

?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</main>
       <footer class="text-center">
        <a class="up-arrow" href="contact-us.html" data-toggle="tooltip" title="TO TOP">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a><br><br>
        <p><span class="glyphicon glyphicon-copyright-mark"></span> Copyright 2019 Julie M. Baliga</p>
    </footer>
        
    </div>
	<script src="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
