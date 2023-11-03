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
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <link rel="stylesheet" href="asset/css/stylelog.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
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
                <h1>Hello Guys.</h1>
                <p>Welcome back to the MaxindoLED Company Profile admin menu. Keep calm and have a Good Work </p>
                <span>
                    <p>login with social media <i style="font-size: 5px;">Tapi Boong :p</i></p>
                    <a href="../index.php" style="text-decoration: none;" class="text-white bg-warning"><i class="fa-solid fa-pager"></i> Page Index</a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a style="text-decoration: none; float: right;" href="#"><i class="fa-brands fa-google"></i> Login with Gmail</a>
                    
                </span>
            </div>
        </div>
	
	
		<div class="right" style="width: 400px;">
            <div class="text-center">
                <img src="asset/img/logo2.png" class="img-fluid" width="120" alt="">
            </div>

            <form action="register_act.php" method="post">
                <div class="form-group" style="margin-top: 60px;">
                    <input type="text" name="nama" class="form-control" placeholder="Nickname">
    
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    
                    <input type="password" name="pass" class="form-control" placeholder="password">
                </div>
                <button type="submit" class="btn"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp; Register</button>
            </form>
            
            <p class="mt-3">You have an account? <a href="index.php">Back To Login</a> if your have email anda password</p>
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
