  <?php include 'menu.php'; ?>
  <!DOCTYPE html>
  <html>
  <head>
    <title>Register - Keerthi</title>
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
        max-width: 600px;
        margin: auto;
        margin-top: 40px;
      }
      input[type="text"], input[type="date"], input[type="email"], input[type="submit"] {
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
    <h2 class="w3-teal w3-padding">Register</h2>
    <form method="POST" action="">
      <label>First Name:</label>
      <input type="text" name="fname" required>

      <label>Last Name:</label>
      <input type="text" name="lname" required>

      <label>Birthday:</label>
      <input type="date" name="bday" required>

      <label>Email:</label>
      <input type="email" name="email" required>

      <input type="submit" value="Register">
    </form>

    <div class="w3-margin-top">
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $fname = htmlspecialchars($_POST["fname"]);
          $lname = htmlspecialchars($_POST["lname"]);
          $bday = htmlspecialchars($_POST["bday"]);
          $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);

          if ($email) {
              echo "<p class='w3-text-green'><strong>Registered Successfully:</strong><br>Name: $fname $lname<br>Birthday: $bday<br>Email: $email</p>";
          } else {
              echo "<p class='w3-text-red'>Invalid Email!</p>";
          }
      }
      ?>
    </div>
  </div>

  </body>
  </html>

