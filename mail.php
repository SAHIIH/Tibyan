<?php

$message = "";
if(isset($_POST['submit'])){
  //when you add or dlate filds add a vatiable like $email,$last_name etc.
$name=$_POST['name'];
$number=$_POST['number'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];


$body .= "name: " . $name . "\n";
$body .= "number: " . $number . "\n";
$body .= "email: " . $email . "\n";
$body .= "subject: " . $subject . "\n";
$body .= "message: " . $message . "\n";
//replace with your email
mail("muhamadeyow@gmail.com","From:$Email",$body);
       //add or remove veritable from here
 if(mail(mail,$body,$message)){
            
        $message = "Hello, $name your Message hasbeen send succsessfully<p>";
            ?>
            <script>
             alert ("Thank You! your message is send");
            </script>
            <?php
          
        }else{
            $message ="<p style='color:red;'>Hello, $name your Message sending faild Chack your Email</p>";
          ?>
          <script>
            alert("Something went wrong!Check your inputs.");
          </script>
         <?php
        }

    }
    ?>


<html lang="en">
<head>
<meta http-equiv="Refresh" content="0; URL=index.html" />
  <title>Thank you</title>
</head>
<body>
  
</body>
</html>