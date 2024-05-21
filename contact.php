<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <title>Document</title>
</head>
<body>
  <form action="process.php" method="post">
    <div class="container">
      <p>CONTACT US</p>
      
      <div class="login">
        <input type="text" name="name" placeholder="Your Name" class="input">
        <input type="text" name="email" placeholder="Your Email Address" class="input">
      </div>
      
      <div class="subject">
        <input type="text" name="subject" placeholder="Subject" class="input">
      </div>
      
      <div class="msg">
        <textarea class="area" name="message" placeholder="Leave a Message"></textarea>
      </div>
      
      <input type="submit" name="create" class="btn" value="Send Message">
    </div>
  </form>
</body>
</html>