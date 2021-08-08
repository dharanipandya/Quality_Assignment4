<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <title>Create New Contact Form</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            font-size: 16px;
            background: whitesmoke;
            color: #000;
            display: flex;
            align-items: center;
            justify-content: space-around;
            min-height: 100vh;
        }

        .form_box {
            width: 600px;
            background: darkgrey;
            padding: 30px;
            border-radius: 10px;
        }

        .input-row {
            position: relative;
            margin-bottom: 13px;
        }

        .form_box input:not([type="submit"]),
        .form_box textarea {
            width: 100%;
            margin: 0 0 3px;
            padding: 8px 10px;
            font-size: 15px;
            color: gray;
            border-radius: 5px;

            border: 1px solid transparent;
        }

        .form_box input[type="submit"] {
            padding: 10px 30px;
            font-size: 20px;
            cursor: pointer;
            border-radius: 5px;
            border: 0;
            color: #fff;
            background: #075680;
        }

        .error {
            display: block;
            font-weight: 700;
            font-size: 14px;
            color: rgb(184, 3, 3);
            display: none;
        }
        h1{
            text-align: center;
        }
    </style>
</head>

<body>
    
    <div class="container">
        <h1>Contact Information Form</h1>
        <form name="custom_form" action="save-form.php" method="post"  onsubmit="return validForm()">  
            <div class="form_box">
                <div class="input-row">
                    <input type="text" placeholder="First Name*" name="first_name">
                    <span class="error">Please enter your first name using alphabets</span>
                </div>
                <div class="input-row">
                    <input type="text" placeholder=" Last Name*" name="last_name">
                    <span class="error">Please enter your last name using alphabets</span>
                </div>
                <div class="input-row">
                    <input type="text" placeholder="Address*" name="address">
                    <span class="error">Please enter your address</span>
                </div>
                <div class="input-row">
                    <input type="text" placeholder=" City*" name="city">
                    <span class="error">Please enter your city</span>
                </div>
                <div class="input-row">
                    <input type="text" placeholder="Province*" name="province">
                    <span class="error">Please enter your province</span>
                </div>
                <div class="input-row">
                    <input type="text" placeholder=" Postal Code*" name="postal_code">
                    <span class="error">Please enter your postal code in this format: N2L 3W8</span>
                </div>
                <div class="input-row">
                    <input type="text" placeholder="Phone*" name="phone">
                    <span class="error">Please enter your phone no in this format 123-123-1234 or (123)123-1234</span>
                </div>
                <div class="input-row">
                    <input type="text" placeholder="Email*" name="email">
                    <span class="error">Please enter your email address in this format abc@xyz.com</span>
                </div>
                <div class="input-row">
                    <textarea placeholder="Message*" name="message"></textarea>
                    <span class="error">Please enter your message</span>
                </div>

                
                    <input type="submit" name= "submit_info" value="Submit">
                
                
               
                
                
            </div>
        </form>
    </div>
  
    <?php
 
    ?>
</body>
<script>
    function validForm() {
        //alert("alert")
        var first_name = document.custom_form.first_name;
        var last_name = document.custom_form.last_name;
        var address = document.custom_form.address;
        var city = document.custom_form.city;
        var province = document.custom_form.province;
        var postal_code = document.custom_form.postal_code;
        var phone = document.custom_form.phone;
        var email = document.custom_form.email;
        var message = document.custom_form.message;
        //First Name
        if (!first_name.value.match(/^[a-zA-z]+$/) || first_name.value == "") {
            first_name.nextElementSibling.style.display = "block";
            first_name.style.border = "1px solid #f00";
            return false
        }
        else {
            first_name.nextElementSibling.style.display = "none";
            first_name.style.border = "1px solid #transparent";
        }
        //Last Name
        if (!last_name.value.match(/^[a-zA-z]+$/) || last_name.value == "") {
            last_name.nextElementSibling.style.display = "block";
            last_name.style.border = "1px solid #f00";
            return false
        }
        else {
            last_name.nextElementSibling.style.display = "none";
            last_name.style.border = "1px solid #transparent";
        }
        //Address
        if (address.value == "") {
            address.nextElementSibling.style.display = "block";
            address.style.border = "1px solid #f00";
            return false
        }
        else {
            address.nextElementSibling.style.display = "none";
            address.style.border = "1px solid #transparent";
        }
        //City
        if (!city.value.match(/^[a-zA-z]+$/) || city.value == "") {
            city.nextElementSibling.style.display = "block";
            city.style.border = "1px solid #f00";
            return false
        }
        else {
            city.nextElementSibling.style.display = "none";
            city.style.border = "1px solid #transparent";
        }
        //Province
        if (!province.value.match(/^[a-zA-z]+$/) || province.value == "") {
            province.nextElementSibling.style.display = "block";
            province.style.border = "1px solid #f00";
            return false
        }
        else {
            province.nextElementSibling.style.display = "none";
            province.style.border = "1px solid #transparent";
        }

        //Postal Code
        if (postal_code.value == "" || !postal_code.value.match(/^([a-zA-Z]\d[a-zA-Z])\ {1}(\d[a-zA-Z]\d)$/)) {
            postal_code.nextElementSibling.style.display = "block";
            postal_code.style.border = "1px solid #f00";
            return false
        }
        else {
            postal_code.nextElementSibling.style.display = "none";
            postal_code.style.border = "1px solid #transparent";
        }

        //Phone
        //if (!phone.value.match(/^\(?([5-9]{1})\)?([0-9]{9})$/) || phone.value == "") {
        if (!phone.value.match(/^[-. (]*(\d{3})[-.)]+(\d{3})[-.]+(\d{4})\s*$/) || phone.value == "") {
            phone.nextElementSibling.style.display = "block";
            phone.style.border = "1px solid #f00";
            return false
        }
        else {
            phone.nextElementSibling.style.display = "none";
            phone.style.border = "1px solid #transparent";
        }

        //Email
        if (!email.value.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/) || email.value == "") {
            email.nextElementSibling.style.display = "block";
            email.style.border = "1px solid #f00";
            return false
        }
        else {
            email.nextElementSibling.style.display = "none";
            email.style.border = "1px solid #transparent";
        }
        //Message
        if (message.value == "") {
            message.nextElementSibling.style.display = "block";
            message.style.border = "1px solid #f00";
            return false
        }
        else {
            message.nextElementSibling.style.display = "none";
            message.style.border = "1px solid #transparent";
        }


    }
</script>

</html>