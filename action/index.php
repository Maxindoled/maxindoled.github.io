<?php 
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo '
                <div class="alert alert-danger text-center" role="alert">
                    Login Gagal!! Email atau Password salah!!!!
                </div>
            ';
        }
        else if($_GET['pesan'] == "logout"){
            echo '
                <div class="alert alert-primary" role="alert">
                    Anda Berhasil Keluar
                </div>
            ';
        }
        else if($_GET['pesan'] == "belum_login"){
            echo '
                <div class="alert alert-warning" role="alert">
                    Anda harus Login dahulu
                </div>
            ';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="../img/haha2.png" rel="icon">
    	
    <link rel="stylesheet" href="asset/css/stylelog.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
</head>
<body style="background-color: #263238;">
    <div class="box-form mt-4">
        <div class="left">
            <div class="overlay">
                <h1>Hello Maxi.</h1>
                <p>Welcome back to the MaxindoLED Company Profile admin menu. Keep calm and have a Good Work </p>
                <span>
                    <p>login with social media <i style="font-size: 5px;">Tapi Boong :p</i></p>
                    <a href="../index.php" style="text-decoration: none;" class="text-white bg-warning"><i class="fas fa-pager"></i> Page Index</a>
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a style="text-decoration: none; float: right;" href="#"><i class="fa fa-google" aria-hidden="true"></i> Login with Gmail</a>
                    
                </span>
            </div>
        </div>
	
	
		<div class="right" style="width: 400px;">
            <div class="text-center">
                <img src="asset/img/logo2.png" class="img-fluid" width="120" alt="">
            </div>

            <form action="login.php" method="post">
                <div class="form-group" style="margin-top: 60px;">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    
                    <input type="password" name="pass" class="form-control" placeholder="password">
                </div>
                <button type="submit" class="btn"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp; Log In</button>
            </form>
            
            <p class="mt-3">Don't have an account? <a href="register.php">Create Your Account</a> it takes less than a minute</p>
        </div>
        
    </div>
    <!-- <div style="height: 100%; width: 100%; margin-top: 30px;" class="container">
        <div style="width: 300px;" class="card bg-transparent">
                <div class="card-body">
                    <form action="login.php" method="POST">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control">

                        <label>Password</label>
                        <input type="password" name="pass" class="form-control">

                        <input style="width: 100%;" type="submit" class="btn btn-warning text-white mt-2" value="Login">
                    </form>
                </div>
            </div>
    </div>
    <footer style="margin-top: 100px;" class="main-footer text-center">
        <p style="font-size: x-small;">Copyright &copy; 2023-2025 MaxindoLED</p>
    </footer> -->
</body>
</html>
