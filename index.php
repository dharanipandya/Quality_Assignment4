<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0,user-scalable=1">
    <title>Web Applicaton</title>
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
    </style>
</head>

<body>
    <div class="container">

        <h2> Web Application <h2><br>
                <form action="" method="post">

                    <input class="button" type="submit" name="new_info" value="Create New Contact">
                    <input class="button" type="submit" name="search_info" value="Search Existing Contact">

                </form>
    </div>
    <?php
    if(isset($_POST['new_info'])){
        header("Location: NewInformation.php");
        //alert("Hello World");
    }
    if(isset($_POST['search_info'])){
        header("Location: search-existing.php");
    }


?>
</body>

</html>