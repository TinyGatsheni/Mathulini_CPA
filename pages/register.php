<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Register CPA</title>
</head>
<body>
<style>
    body{
        background-image: url('https://i.pinimg.com/originals/61/e7/8b/61e78b08a8dd18779132812218a9f2a8.jpg');
    }

    .overlay{
        position: absolute;
        top:0;
        left:0;
        margin: 0;
        padding:0;
        width:100%;
        height:100%;
        background-color: rgba(0, 0, 0, 0.507);
        z-index: -1;
    }

    .header{
        font-size:30pt;
        color:green;
        font-weight: bolder;
        text-align: center;
        z-index: 2;
        margin-top:80px;
    }
    .form-wraaper{
        margin: 35px auto;
        padding:20px;
        width: 70%;
        height: 400px;
        background-color: rgba(204, 204, 204, 0.507);
        border-radius: 20px;
        z-index: 2;
    }
    input{
        margin:10px 0;
    }
</style>
<div class="overlay"></div>
    <div class="container">
        <div class="header">
            Mathulini CPA
        </div>
        <div class="form-wraaper">
            <form action="../server/slim/inc/apis/register.php" method="post" id="register">
                <input name="fname" type="text" class="form-control" placeholder="First Name" />
                <input name="lname" type="text" class="form-control" placeholder="Last Name" />
                <input name="username" type="text" class="form-control" placeholder="Username" />
                <input name="password" type="password" class="form-control" placeholder="Password" />
                <input name="confirmPassword" type="password" class="form-control" placeholder="Confirm Password" />
                <div class="btn-wrapper">
                    <input type="submit" name="register" class="btn btn-default" value="Register" />
                    <input type="submit" name="login" class="btn btn-primary" value="Login" />
                </div>
            </form>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
