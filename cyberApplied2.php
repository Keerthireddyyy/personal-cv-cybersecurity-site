<?php include 'menu.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Encryption/Decryption - Keerthi</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- W3.CSS & Fonts -->
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
      word-break: break-word;
    }
    .decrypted {
      margin-top: 20px;
      padding: 10px;
      background-color: #d4edda;
      color: #155724;
    }
  </style>
</head>

<body class="w3-light-grey">

<div class="w3-container w3-white w3-padding w3-card container">
  <h2 class="w3-teal w3-padding">Encrypt & Decrypt Text</h2>

  <form method="POST" action="">
    <label>Enter text to encrypt:</label>
    <input type="text" name="text" required>
    <input type="submit" value="Encrypt/Decrypt">
  </form>

  <?php
  function encrypt($string, $key = 'secretkey') {
      return base64_encode(openssl_encrypt($string, "AES-128-ECB", $key));
  }

  function decrypt($string, $key = 'secretkey') {
      return openssl_decrypt(base64_decode($string), "AES-128-ECB", $key);
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $input = htmlspecialchars($_POST["text"]);
      
      // Generating the hash of the input text
      $hash = hash('sha512', $input);  // SHA-512 hash
      
      // Encrypting and Decrypting
      $encrypted = encrypt($input);
      $decrypted = decrypt($encrypted);
      
      // Displaying results
      echo "<div class='result'><strong>Original Text:</strong> $input<br>";
      echo "<strong>SHA-512 Hash:</strong> $hash<br>";
      echo "<strong>Encrypted:</strong> $encrypted</div>";

      // Displaying Decrypted text section
      echo "<div class='decrypted'><strong>Decrypted:</strong> $decrypted</div>";
  }
  ?>
</div>

</body>
</html>
