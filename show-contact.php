
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0,user-scalable=1">
<title>Contact Information</title>   
<body>
<?php
    session_start();
    
?>
<div class="container">
    <h1>Thank You</h1>
    <h2>Here is the information you have submitted:</h2>
    <form action="show-contact.php" method="post" >
    <div class="info">
    <ol>
        <li><em>First Name:</em> <id> <?php echo $_SESSION['first_name'];
          ?></id> </li>
        <li><em>Last Name:</em><id> <?php echo $_SESSION["last_name"]?> </id></li>
        <li><em>Address:</em> <?php echo $_SESSION["address"]?></li>
        <li><em>City:</em> <?php echo $_SESSION["city"]?></li>
        <li><em>Province:</em> <?php echo $_SESSION["province"]?></li>
        <li><em>Postal Code:</em> <id> <?php echo strtoupper($_SESSION["postal_code"])?> </id></li>
        <li><em>Phone:</em> <?php echo $_SESSION["phone"]?></li>
        <li><em>Email:</em> <?php echo $_SESSION["email"]?></li>
        <li><em>Message:</em> <?php echo $_SESSION["message"]?></li>
    </ol>
    </div>
    <input type="submit" name= "remove" value="Remove Contact"  <?php echo isset($_POST["remove"]) ? "disabled" : "";?>>
</form>
</div>




<?php
     
     if(isset($_POST['remove'])){
         

         $filename = "data.txt";
         $arr = file($filename);
         array_pop($arr);
         array_pop($arr);
         array_pop($arr);
         array_pop($arr);
         array_pop($arr);
         array_pop($arr);
         file_put_contents($filename, implode($arr));

         echo "Contact Successfully Removed";
         

    } 
    ?>

<a href="index.php">Go HomePage</a>
</body>
</html>