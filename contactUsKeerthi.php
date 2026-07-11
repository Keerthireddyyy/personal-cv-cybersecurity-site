<?php include 'menu.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Contact Us - Keerthi</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Styling and Fonts -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    html,body,h1,h2,h3,h4,h5,h6 {
      font-family: "Roboto", sans-serif;
    }
    .form-container {
      max-width: 700px;
      margin: auto;
      margin-top: 40px;
    }
    input[type="text"], input[type="email"], textarea, input[type="submit"] {
      width: 100%;
      padding: 12px;
      margin: 8px 0;
      box-sizing: border-box;
    }
    input[type="submit"] {
      background-color: teal;
      color: white;
      border: none;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #006666;
    }
  </style>
</head>

<body class="w3-light-grey">

<div class="w3-container form-container w3-white w3-padding w3-card">
  <h2 class="w3-teal w3-padding">Contact Us</h2>

  <p><strong>Course:</strong> Information and Cyber Security</p>
  <p><strong>Email:</strong> <a href="mailto:keerthikalakata@my.unt.edu">keerthikalakata@my.unt.edu</a></p>
  <p><strong>Phone:</strong> +1 940-363-0273</p>

  <form method="GET" action="">
    <label>First Name:</label>
    <input type="text" name="fname" required>

    <label>Last Name:</label>
    <input type="text" name="lname" required>

    <label>Email:</label>
    <input type="email" name="email" required>

    <label>Message:</label>
    <textarea name="message" rows="5" required></textarea>

    <input type="submit" value="Submit">
  </form>

  <div class="w3-margin-top">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["fname"])) {
        $fname = htmlspecialchars($_GET["fname"]);
        $lname = htmlspecialchars($_GET["lname"]);
        $email = filter_var($_GET["email"], FILTER_VALIDATE_EMAIL);
        $message = htmlspecialchars($_GET["message"]);

        if ($email) {
            echo "<h3 class='w3-text-green'>Thank you for contacting us!</h3>";
            echo "<p><strong>Name:</strong> $fname $lname</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Message:</strong><br>$message</p>";
        } else {
            echo "<p class='w3-text-red'>Invalid Email Address</p>";
        }
    }
    ?>
  </div>
</div>

</body>
</html>
