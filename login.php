<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>Login</title>
    <link rel="stylesheet" href="style_login.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  </head>
  <body>
    <div class="login">

      <div class="avatar">
        <i class="fa fa-user"></i>
      </div>

      <h2>Login Form</h2>
      <form action="cek_login.php" method="post">
        <div class="box-login">
          <i class="fas fa-envelope-open-text"></i>
          <input type="text" placeholder="Username" name="user">
        </div>
        <div class="box-login">
          <i class="fas fa-lock"></i>
          <input type="password" placeholder="Password" name="pass">
        </div>
        <button type="submit" name="submit" class="btn-login">Login</button>
      </form>
      <div class="bottom">
          <a href="register.php">Register</a>
      </div>
    </div>
  </body>
  </html>