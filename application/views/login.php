<html>
<head>
  <title>Login Admin E-Gevee</title>
</head>
<body>
  <h1>Silahkan login terlebih dahulu</h1>
  
  </div>
  <form method="post" action="<?php echo base_url('Login/proses_login'); ?>">
    <label>Username</label><br>
    <input type="text" name="username" placeholder="Username"><br><br>
    <label>Password</label><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <button href="<?php echo base_url('Home') ?>" class="btn btn-warning btn-md">Login</button>
  </form>
</body>
</html>