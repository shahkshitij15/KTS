<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<html>
  <head>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
body#LoginForm{ background-image:url("https://hdwallsource.com/img/2014/9/blur-26347-27038-hd-wallpapers.jpg"); background-repeat:no-repeat; background-position:center; background-size:cover; padding:10px;}

.form-heading { color:#fff; font-size:23px;}
.panel h2{ color:#444444; font-size:18px; margin:0 0 8px 0;}
.panel p { color:#777777; font-size:14px; margin-bottom:30px; line-height:24px;}
.login-form .form-control {
  background: #020202 none repeat scroll 0 0;
  border: 1px solid #d4d4d4;
  border-radius: 4px;
  font-size: 14px;
  height: 50px;
  line-height: 50px;
}
.main-div {
  background: #ffffff none repeat scroll 0 0;
  border-radius: 2px;
  margin: 10px auto 30px;
  max-width: 38%;
  padding: 50px 70px 70px 71px;
}

.login-form .form-group {
  margin-bottom:10px;
}
.login-form{ text-align:center;}
.forgot a {
  color: #020202;
  font-size: 14px;
  text-decoration: underline;
}
.login-form  .btn.btn-primary {
  background: #f0ad4e none repeat scroll 0 0;
  border-color: #f0ad4e;
  color: #020202;
  font-size: 14px;
  width: 100%;
  height: 50px;
  line-height: 50px;
  padding: 0;
}
.forgot {
  text-align: left; margin-bottom:30px;
}
.botto-text {
  color: #020202;
  font-size: 14px;
  margin: auto;
}
.login-form .btn.btn-primary.reset {
  background: #020202 none repeat scroll 0 0;
}
.back { text-align: left; margin-top:10px;}
.back a {color: #020202; font-size: 13px;text-decoration: none;}

</style>
<!------ Include the above in your HEAD tag ---------->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
<body id="LoginForm">
<div class="container">
    <h1 class="form-heading">ABC Analytics</a></h1>
    <header id="header">
        <div class="inner">
            <nav id="nav">
                <a href="main.php">Home</a>
                <a href="#">About Us</a>
                <a href="#">Products</a>
                <a href="#">Clients</a>
                <a href="#">Contact Us</a>
                <a href="login.php">Login</a>
            </nav>
            <a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
        </div>
    </header>
    <br><br><div></div>
    
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Login</h2>
   <p>Please enter your username and password</p>
   </div>
    <form action="" name="login" method="post">

        <div class="form-group">


            <input type="text" class="form-control" name="username" placeholder="Enter username" required="required">

        </div>

        <div class="form-group">

            <input type="password" class="form-control" name="password" placeholder="Password" required="required" >

        </div>
        <div class="forgot">
        <a href="main.php">Forgot password?</a>
        </div>
    <div class="form-group">
        <button type="submit" name="submit" value="Login" class="btn btn-primary">Login</button>

    </div>
    </form>
    <?php
            if (isset($_REQUEST['submit'])) {
                extract($_REQUEST);
                $db=new mysqli("localhost","root","",'file-management');
                $sql="SELECT * from login WHERE username='$username' and password='$password'";
                $result=mysqli_query($db,$sql);
                $user_data=mysqli_fetch_array($result);
                if ($user_data['category']==1)
                {
                    echo "<script>location='index.php'</script>";
                }
                else if($user_data['category']==2)
                {
                    echo "<script>location='downloads.php'</script>";
                }
                else{
                    echo "Wrong credentials";
                }

        }
     ?>
    </div>
</div>
</div>
</div>


</body>
</html>
