<?php include 'menu.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Hashing Function - Keerthi</title>
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
    .container {
      max-width: 700px;
      margin: auto;
      margin-top: 40px;
    }
    input[type="text"], input[type="submit"] {
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
    .result {
      margin-top: 20px;
      padding: 10px;
      background-color: #f1f1f1;
      word-break: break-all;
    }
  </style>
</head>

<body class="w3-light-grey">

<div class="w3-container w3-white w3-padding w3-card container">
  <h2 class="w3-teal w3-padding">Generate SHA-512 Hash</h2>

  <form method="POST" action="">
    <label>Enter text to hash:</label>
    <input type="text" name="inputText" required>
    <input type="submit" value="Generate Hash">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $text = htmlspecialchars($_POST["inputText"]);
      $hash = hash('sha512', $text);
      echo "<div class='result'><strong>SHA-512 Hash:</strong><br>$hash</div>";
  }
  ?>
</div>

</body>
</html>
