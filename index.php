<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="http://allfont.net/allfont.css?fonts=agency-fb" />
    <title>Homepage</title>
    <?php
    session_start();
    require "login.php";
   ?>
    <style>
        .login {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 30px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
        }
    </style>
</head>
<body>
    <li style="float:right"><button class="btn" id="btn" onclick="document.getElementById('signpop').style.display='block'">Sign up</button></li>
    <li style="float:right"><button class="btn2" id="btn2" onclick="document.getElementById('logpop').style.display='block'">Log in</button></li>
    <li style="float:right"><button class="btn2" id="btn3" onclick="location.replace('./logout.php');">Logout</button></li>
     <?php if(is_null($_SESSION["user"])) {  
                echo "<p class='usern'style='padding: 14px 16px; margin:0; color:#4e707e;' onclick=location.replace('./profile.php');>Hi, ".$result_User["name"]."</p>"; 
            }?>
            </li>       
    <div id="logpop" class="login">
        <!-- Modal content -->
        <div class="log-content">
            <span class="close" onclick="document.getElementById('logpop').style.display='none'">&times;</span>
            <div class="sep">
                <p style="color: #6690a0; font-size:40px; text-align:center; margin:10px;">Login</p>
            </div>
            <form class="user" method="post">
                <div class="sep">
                    <p>username</p>
                </div>
                <div class="sep"><input type="text" name="username" class="homeput"></div>
                <div class="sep">
                    <p>Password</p>
                </div>
                <div class="sep"><input type="password" name="password" class="homeput"></div>
                <div class="sep" style="width:50%; display:inline-block;"><input type="checkbox" checked="checked" name="remember"> <a style="font-size:18px;">Remember me</a></div>
                <div class="sep" style="width:43%; text-align:right; display:inline-block;"><a class="aa" href="#" style="font-size:18px; text-decoration:none;">Forget Password ?</a></div>
                <div class="sep"><input type="submit" name="login" class="sub" value="Login" /> </div>
            </form>
            <div class="sep" style="margin-top: 1rem; margin-bottom: 1rem;">
                <div class="line"></div>
            </div>
            <div class="sep"><button class="face">Facebook</button><button class="goog">Google</button></div>
        </div>
    </div>
</body>

</html>