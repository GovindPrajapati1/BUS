<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/css.css">

</head>
<body>


<div class="form-Bg">
       
    <div class="form-header">
        <h2>Sign in</h2>
    </div>
    
    <form action="login.php" method="post">
        <div class="form-group">
            <input type="text" placeholder="login" name="uname" required="required"/>
        </div>

        <div class="form-group">
            <input type="password" placeholder="password" name="psw" required="required"/>
        </div>

        <div class="form-group">         
            <input class="inp-cbx" id="cbx" type="checkbox" name="remember" style="display: none"/>
            <label class="cbx" for="cbx">
            <span>
                <svg width="12px" height="10px" viewbox="0 0 12 10">
                    <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                </svg>
            </span>
            <span>Remember Me</span>
            </label>
            <a class="form-recovery" href="#">Forgot Password?</a>
        </div>
        <br>

        <div class="form-group">
            <button type="submit">Log In</button>
        </div>
    </form> 
</div>
    

</body>
</html>