
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {

            background-size: cover;
        }

        .container {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            background: darkgrey;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .16);
            width: 450px;
            height: 680px;
            text-align: center;
            font-family: 'Nunito', sans-serif;
            border-radius: 20px;
        }

        h2 {
            margin: 1.5em;
            color: chocolate;
        }

        .button {
            color: #fff;
            background: #075680;
            padding: 1.0em;
            width: 13em;
            border-radius: 10px;
            margin: 5px;
        }
      .info{
          text-align:left;
      }
      .info,li{
          padding:5px;
          list-style: none;
      }
          
      
    </style>
</head>
<body>
<?php
     
     if(isset($_POST['submit_info'])){
         $fn = $_POST['first_name'];
         //$fn = "hello";
        $ln = $_POST["last_name"];
        $address = $_POST["address"];
        $city = $_POST["city"];
        $province = $_POST["province"];
        $pc = $_POST["postal_code"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        
         
         $file = fopen("data.txt", "a") or die("can not open file");
         $content = $fn. " ". $ln. PHP_EOL. $address. PHP_EOL. $city. " ". $province. PHP_EOL. $phone. PHP_EOL. $email. PHP_EOL. PHP_EOL;
    
         fwrite($file, $content);
       
         fclose($file);
         
        
     }
     session_start();
     $_SESSION['first_name'] = $fn;
     $_SESSION['last_name'] = $ln;
     $_SESSION['address'] = $address;
     $_SESSION['city'] = $city;
     $_SESSION['province'] = $province;
     $_SESSION['postal_code'] = $pc;
     $_SESSION['phone'] = $phone;
     $_SESSION['email'] = $email;
     $_SESSION['message'] = $message;

     header("Location: show-contact-link.php");
     ?>



</body>
</html>