<?php
	ini_set('display_errors', true);
	define("SMTP", "smtp.crystone.se");
	define("SMTP_PORT", 587);

	$name = sanitize_input($_POST["name"]);


if (!preg_match("/^[a-zA-Z ]*$/",$name))
  {
  $nameErr = "Only letters and white space allowed"; 
  } 


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   if (empty($_POST["firstname"]))
     {$nameErr = "Name is required";}
   else
     {
     $name = sanitize_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name))
       {
       $nameErr = "Only letters and white space allowed"; 
       }
     }
   
if (empty($_POST["lastname"]))
     {$nameErr = "last is required";}
   else
     {
     $name = sanitize_input($_POST["lastname"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name))
       {
       $nameErr = "Only letters and white space allowed"; 
       }
     }

   if (empty($_POST["email"]))
     {$emailErr = "Email is required";}
   else
     {
     $email = sanitize_input($_POST["email"]);
     // check if e-mail address syntax is valid
     if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
       {
       $emailErr = "Invalid email format"; 
       }
     }
     
   if (empty($_POST["message"]))
     {$comment = "";}
   else
     {$comment = sanitize_input($_POST["message"]);}
}



function sanitize_input($data)
{
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}


?>