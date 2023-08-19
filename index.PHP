<?php
if (isset($_POST['send'])) {
  $subject="Contact Us";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $to="Abhishekgupta26267@gmail.com";
  $message = $_POST['message'];
  $data = "Name = " . $name . "\nEmail = " . $email . "\nPhone = " . $phone . "\nMessage = " . $message;
  $header = "from :$name";
  if (mail($to, $subject, $data)) {
    echo "Thank You For Contacting Us.";
  }else{
    die("Something went wrong");
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>contact</title>

  <style>
    body {
      font-family: sans-serif;
    }

    .overlay {
      width: 100%;
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      background: rgba(0, 0, 0, 0.5);
      z-index: -1;
      opacity: 0;
      transition: .7s ease-in-out;
    }

    .showOverlay {
      z-index: 1;
      opacity: 1;
    }

    .contactBox {
      padding: 0;
      border-radius: 10px;
      width: 500px;
      box-shadow: 2px 2px 10px 0 #999;
      z-index: 3;
      text-align: center;
      position: absolute;
      top: -50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background: #fff;
      overflow: hidden;
      transition: 1s ease-in-out;
    }

    .showBox {
      top: 50%;
    }

    .contactBox h2 {
      margin: 10px auto 2px;
    }

    .contactBox form {
      margin: 35px;
    }

    .contactBox input {
      color: black;
      font-size: 16px;
      font-weight: 500;
      width: 350px;
      height: 35px;
      margin: 10px 0;
      padding: 8px 10px;
      border-radius: 14px;
      border: 1px solid #777;
      outline: none;
    }

    .contactBox textarea {
      font-size: 16px;
      width: 350px;
      height: 150px;
      margin: 10px 0;
      padding: 10px;
      border-radius: 14px;
      border: 1px solid #777;
      outline: none;
    }

    .cross {
      position: absolute;
      top: 0;
      right: 0;
      font-size: 30px;
      line-height: 30px;
      width: 30px;
      height: 30px;
      cursor: pointer;
      background: rgb(255, 93, 93);
      color: white;

    }

    button {
      border-radius: 20px;
      color: #fff;
      background: rgb(35, 207, 35);
      margin-top: 10px;
      padding: 15px 25px;
      font-size: 14px;
      border: none;
    }
  </style>
</head>

<body>
  <button id="contact">Contact Us</button>
  <h2>RakS</h2>
  <div class="overlay"></div>
  <div class="contactBox">
    <h2>Contact Us</h2>
    <span class="cross">&times;</span>
    <form method="post">
      <input type="text" name="name" placeholder="Your Name" required />
      <input type="email" name="email" placeholder="Your Email" required />
      <input type="tel" name="phone" placeholder="Mobile No." required />
      <textarea name="message" cols="30" rows="3" placeholder="Write your message here.." required></textarea>
      <button type="submit" name='send'>SUBMIT</button>
    </form>
  </div>
  <script>
    function showoverlay() {
      document.querySelector(".overlay").classList.add("showOverlay");
      document.querySelector(".contactBox").classList.add("showBox");
    }
    function closeOverlay() {
      document.querySelector(".overlay").classList.remove("showOverlay");
      document.querySelector(".contactBox").classList.remove("showBox");
    }

    var contactBtn = document.querySelector("#contact")
    contactBtn.addEventListener("click", showoverlay);
    var cross = document.querySelector(".cross")
    cross.addEventListener("click", closeOverlay)
    var ocr = document.querySelector(".overlay")
    ocr.addEventListener("click", closeOverlay)
  </script>
</body>

</html>