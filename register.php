<?php require('connection.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <style>
        /* General body styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Container for the form */
        form {
            width: 400px;
            background-color: #222222;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            color: #fff;
        }

        /* Avatar image */
        .imgcontainer {
            text-align: center;
        }

        .avatar {
            width: 100px;
            border-radius: 50%;
            border: 5px solid #fff;
            margin-bottom: 20px;
        }

        /* Styling for the input fields */
        .container {
            margin: 20px 0;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 15px;
            margin: 10px 0 20px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            background-color: #f0f0f0;
            color: #333;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            outline: none;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
        }

        /* Login button */
        button[type="submit"] {
            width: 100%;
            padding: 15px;
            background-color: #2575fc;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #6a11cb;
        }

        /* Remember me checkbox */
        label {
            font-size: 14px;
            display: flex;
            align-items: center;
            color: #ddd;
        }

        /* Cancel button */
        .cancelbtn {
            width: 100%;
            padding: 15px;
            background-color: #ffffff;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            color: #ff0000;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .cancelbtn:hover {
            background-color: #c0392b;
        }

        /* Footer link styling */
        .psw {
            color: #ddd;
            font-size: 14px;
        }

        .psw a {
            color: #2575fc;
            text-decoration: none;
        }

        .psw a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<form id="loginForm">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="user_name" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>    

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" name="register">Register</button>

  </div>

</form>

<script>
    // JavaScript function to handle form submission and redirect to a linked page
    document.getElementById("loginForm").addEventListener("submit", function(event) {
        event.preventDefault();  // Prevent the form from submitting

        // Define the link (you can replace this with any URL you wish)
        const linkedPage = "https://uiqbmmfalju6jbmzmj3wga.on.drv.tw/www.Architect_KV.com/Architect/Architect.html"; // Replace with your desired link

        // Open the linked page
        window.location.href = 'Architect.html';
    });
</script>

</body>
</html>
