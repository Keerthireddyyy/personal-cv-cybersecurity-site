<?php include 'menu.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cyber Info - Keerthi Kalakata</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
  </style>
</head>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
    <div class="w3-col w3-container w3-white w3-card-4 w3-padding">
      <h2 class="w3-text-teal"><i class="fa fa-lock fa-fw w3-margin-right w3-xxlarge"></i>Cybersecurity Information</h2>

      <h3 class="w3-text-grey">My Favorite Topic: Hashing Functions</h3>
      <p>
        One of the most fascinating and crucial topics I encountered in my study of cybersecurity is <strong>hashing functions</strong>. Hashing plays a foundational role in many aspects of cybersecurity, especially in securing user data, password protection, data integrity, and digital signatures.
      </p>
      <p>
        A hashing function is a mathematical algorithm that converts an input of arbitrary length into a fixed-size string of characters, which is typically a hexadecimal number. This output is known as a <em>hash value</em>, <em>digest</em>, or <em>checksum</em>. A key property of hashing functions is that they are one-way functions—meaning that it is computationally infeasible to reverse-engineer the original input from the hash value. This makes them ideal for storing sensitive information like passwords.
      </p>
      <p>
        I was especially intrigued by how hashing is used in <strong>password storage</strong>. Instead of storing plain text passwords, systems store hashed versions of the passwords. When a user logs in, the input password is hashed and compared with the stored hash. This means even if an attacker gains access to the database, the actual passwords remain protected. Popular hashing algorithms include <strong>SHA-256</strong>, <strong>SHA-3</strong>, and <strong>bcrypt</strong>.
      </p>
      <p>
        Another concept I found fascinating is <strong>salting</strong>. A salt is a random string that is added to the input of the hash function to ensure that even if two users have the same password, their stored hashes will be different. This prevents attackers from using precomputed tables (also known as <em>rainbow tables</em>) to crack passwords.
      </p>
      <p>
        Beyond password protection, hashing functions are essential for ensuring <strong>data integrity</strong>. For instance, file integrity checkers use hash values to verify that files have not been altered or corrupted. This application is especially important in software downloads, where users are encouraged to check the hash value of the downloaded file against a provided hash.
      </p>
      <p>
        In conclusion, hashing functions are an essential part of modern cybersecurity. They provide a simple yet powerful way to secure sensitive data and verify information integrity. Understanding how they work has strengthened my knowledge of data security and has made me more aware of the best practices when handling secure information. I look forward to learning more about advanced cryptographic concepts and how they build on these fundamental ideas.
      </p>

      <h4 class="w3-text-teal">References</h4>
      <ul>
        <li>McMillan, T., & Muwanguzi, S. (2025). <em>Information Security Course Materials</em>. University of North Texas.</li>
        <li>Katz, J., & Lindell, Y. (2020). <em>Introduction to Modern Cryptography</em> (3rd ed.). CRC Press.</li>
        <li>Stallings, W. (2019). <em>Cryptography and Network Security: Principles and Practice</em> (7th ed.). Pearson.</li>
      </ul>

    </div>
  </div>
</div>

</body>
</html>
