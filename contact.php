<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contactStyle.css">
</head>
<body>
    <nav class="nav-barre">
        <div class="log">
            <h1><span>D</span>octeur.</h1>
        </div>
        <ul class="list" id="lista">
            <li><a href="#"> Home</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Support</a></li>
            <li class="login">
                <button>Login</button>
                <a href="##">Login for doctors!</a>
            </li>
        </ul>
        <div class="menu">
            <div class="menu-l"></div>
            <div class="menu-l2"></div>
            <div class="menu-l"></div>
        </div>
    </nav>
    <div class="container">
        <div class="deco">
            <img src="./image/deco2.png" alt="">
            <div class="content">
                <img src="./image/doc.png" alt="">
                <h1><span> WEL</span>COME <br> Doc<span>teur.</span></h1>
                
            </div>
            <img src="./image/deco.png" alt="" class="deco-pic">
        </div>
        <div class="formule" id="form">
            <div class="login-formulaire">
                <h1>Login.</h1>
                <div class="inputs">
                    <label for="">Email</label><br>
                    <input type="text" placeholder="Enter your email" id="email">
                </div>
                <div class="inputs">
                    <label for="">Password</label><br>
                    <input type="password" placeholder="Enter your password" name="password" >
                </div>
                <a href="#">Froget passwod?</a>
                <input type="submit" value="Login" class="submit">
            </div>
        </div>
    </div>
    <script src="indexJS.js"></script>
</body>
</html>