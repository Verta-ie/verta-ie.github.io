
<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "speedy2803@gmail.com";
    $email_subject = "Creche";
 /*
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 */
 
    // validation expected data exists
 /*   if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 */

  
$topic = $_POST['subject'];
 $subj = $_POST['subj'];
  $msg = $_POST['message'];
    $name = $_POST['name']; // required
    $email = $_POST['email'];
 

    
 
  /*  $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 */
  /*if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
  */
 
    $email_message = "Form details from ".$subj." page below. </br></br>";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
  $email_message .= "<b>Subject: </b>".clean_string($topic)." </br></br>";
       $email_message .= "<b>Name: </b> ".clean_string($name)." </br></br>";
      $email_message .= "<b>Email Address: </b>".clean_string($email)." </br></br>";
   $email_message .= "<b>Message: </b> ".clean_string($msg)." </br></br>";
   
 
  
      
   

 
// create email headers
  
    
$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
      $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
@mail($email_to, $subj, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
<!DOCTYPE HTML>

<html>
	<head>
		<title>LMM CARE</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        	<script src="assets/js/jquery.min.js"></script>
  
			<script src="assets/js/jquery.dropotron.min.js"></script>
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
  
	</head>
	<body>

		<!-- Header -->
        <header id="header">
        <div class="container">
            <a href="index.html"><img id="logo1" src="images/logo.svg" class="logo hiddenlogo" style="width:15%; padding:10px "></a>
            <a id="hiddentxt" style="color:white" href="index.html" class="hiddentext"><span  style="weight:900;">LMM CARE</span> <span id="addtxt" style="weight:light;"> | The Childcare Experts</span></a>
            <nav id="nav" style="right:33%;">
                <ul>
                    
                    <li>
                        <a href="">Services</a>
                        <ul>
                            <li><a href="creche.html">Crèche</a></li>
                    
                            <li><a href="hotel.html">Hotel</a></li>
                            <li><a href="weddings.html">Wedding</a></li>
                            <li><a href="corporate.html">Corporate</a></li>
                           
                        </ul>
                    </li>
                    <li><a href="about.html">About Us</a></li>
                       <li><a href="">Find a Job</a></li>
                     <li><a href="">Resources</a></li>
              
                </ul>
            </nav>
            <nav id="nav1"  style="right:0;margin-right:5%; ">
            <ul><li ><a style="color:#FEAE3B; margin-right:-10px;" href="index.html" ><i class="fa fa-home"></i> </a></li>
                <li ><a style="color:#FEAE3B;  padding-left:0;" href="contact.html" ><i class="fa fa-envelope"></i> </a></li>
             <li ><a style="color:#FEAE3B; " id="myBtn2" ><i  class="fa fa-phone" style="
    margin-left: -30px;" ></i> </a></li></ul>
          
            
                    
            </nav>

        </div>
    </header>
        <style>
            	#header {
		background: #216A95;

	}

            #header nav > ul > li > a {
						color: white;
						display: block;
						font-family: 'Raleway', sans-serif;
						font-weight: 700;
						letter-spacing: 0.05em;
						line-height: 2.5em;
						padding: 0 1em;
						text-decoration: none;
						
					}
	.dropotron {
	background: #216A95;
		box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.075);
		
		list-style: none;
		margin-top: -0.5em;
		min-width: 15em;
		padding: 0.5em 0;
	}

		.dropotron > li {
			box-shadow: inset 0 1px 0 0 rgba(255, 255, 255, 0.1);
			padding: 0;
		}

			.dropotron > li > a {
			color:white;
				display: block;
			
				font-weight: 400;
				letter-spacing: 0.05em;
				line-height: 2.75em;
				padding: 0 1em;
				text-decoration: none;
				
			}

			.dropotron > li:hover > a, .dropotron > li.active > a {
				background-color: #FEAE3B;
				color: #ffffff !important;
			}

			.dropotron > li:first-child {
				box-shadow: none !important;
			}

		.dropotron.level-0 {
			font-size: 0.8em;
			margin-top: 3.5em;
		}

			.dropotron.level-0:before {
				border-bottom: solid 1em #FEAE3B;
				border-left: solid 1em transparent;
				border-right: solid 1em transparent;
				content: '';
				display: block;
				height: 2em;
				left: 50%;
				margin-left: -1em;
				position: absolute;
				top: -2em;
				width: 2em;
			}
        </style>
 <style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
    
    
    <style>
/* The Modal (background) */
.modal1 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content1 {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 40%;
    min-width: 200px;;
}

/* The Close Button */
.close1 {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close1:hover,
.close1:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>

		<!-- Page Wrapper -->
			<div id="page-wrapper">
     
				<!-- Main-->
					<div id="" class="wrapper style3" style="padding-top:200px; padding-bottom:200px;" >
						<div class="container 100%">
							<header class="major">
								<h2>Thank you for contacting us!</h2>
								<p>One of our team will be in contact with you in the next one to two working days.</p>
							</header>

							<!-- Content -->
                        </div>
                </div>
                
					</div>

				<!-- Footer -->
	      <footer id="footer">
            <div class="row footer-wrapper" style="text-align:left; color:white;">
                <div class="4u 6u(small) 12u(xsmall)">
                        <h4 style=" color:#FEAE3B;">Services</h4>
                                <ul  style="  padding: 0;
    list-style-type: none;">
                        <li  ><a style="text-decoration:none; color:white; outline:none; " href="creche.html">Créche</a></li>
                                    
                        <li  ><a style="text-decoration:none; color:white; outline:none" href="hotel.html">Hotel</a></li>
                                    
                       <li  ><a style="text-decoration:none; color:white; outline:none" href="weddings.html">Wedding</a></li>
                                    
                       <li  ><a style="text-decoration:none; color:white; outline:none" href="corporate.html">Corporate</a></li>
                                    
                   
                    </ul>
                </div>
                  <div class="4u 6u(small) 12u(xsmall)">
                      <h4 style=" color:#FEAE3B;">Our Company</h4>
                                <ul  style="  padding: 0;
    list-style-type: none;">
                        <li  ><a style="text-decoration:none; color:white; outline:none" href="contact.html">Contact Us</a></li>
                                       <li  ><a style="text-decoration:none; color:white; outline:none" href="about.html">About Us</a></li>
                   
                    </ul>
                </div>
                    <div class="4u 6u(small) 12u(xsmall)" >
                        <h4 style=" color:#FEAE3B;">Contact</h4>
                                <ul class="contact-icons"  style=" padding: 0;
    list-style-type: none;">
                        <li class="icon fa-home" style=" "> LMM Care, Unit b12, LEDP, Roxboro, Limerick.
</li>
                        <li class="icon fa-phone"> 083 1704464 or 015241069</a></li>
                        <li class="icon fa-envelope-o">   info@lmmcare.com</li>
                    </ul>
                </div>
            </div>
   <hr>
<a href="" style="color:#FEAE3B;">Terms & Conditions</a>
            <p style="color:white" class="copyright">&copy; LMM CARE. All rights reserved.</p>
        </footer>

			</div>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementById("close");

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
modal.onclick = function() {
 
        modal.style.display = "none";
  
}
</script>
<div id="myModal2" class="modal1">

  <!-- Modal content -->
  <div class="modal-content1">
    <span id="close1" class="close1">&times;</span>
      <center>
      <h2 style="display:inline-block;">Call Us: <a style="text-decoration:underline;  " href="tel:+353831704464">+353831704464</a> </h2>
   </center>
  </div>

</div>
<script>
// Get the modal
var modal1 = document.getElementById('myModal2');

// Get the button that opens the modal
var btn1 = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var span1 = document.getElementById("close1");

// When the user clicks the button, open the modal 
btn1.onclick = function() {
    modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
    modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
modal1.onclick = function() {
   
        modal1.style.display = "none";
   
}
</script>
		<!-- Scripts -->
			
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
<?php
 
}
?>