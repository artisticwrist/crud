<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up now</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="signup-flex bg" style="background-image: url(./images/Green.jpg);">
        <div class="overlay">
            <nav>
                <h1>LOG IN NOW</h1>
            </nav>
            <section>
                <h1>Welcome</h1>
                <p>Log in by entering your details below</p>
            </section>
        </div>
    </div>
    <div class="signup-flex signup-form">
        <nav>
            <div class="ham-burger">
                <div class="burger"></div>
                <div class="burger"></div>
                <div class="burger"></div>
            </div>
        </nav>
        <section class="section-form">
            <form method="post" action="logscript.php">
                <h3>WELCOME</h3>
                <p>Log in by entering your details below</p>
                <?php 
                if(isset($_GET['error'])){ 
                    ?>
                    <p class='error' style='background:rgb(95,228,111); color: white; padding: 5px;width: 100%; border-radius: 5px; margin:5px;'><?php  echo $_GET['error']; ?></p>
                <?php }  
                ?>
                <input type="text" name="username" placeholder="Type username">
                <br>
                <input type="password" placeholder="Type password" name='passcode'>
                <div class="form-group">
                    <button>Forgot pasword?</button>
                </div>
                <button class="signup-btn">Sign In</button>
            </form>
            <P class="have-account">Don't have an account ? <a href="signup.php">Create</a></P>
        </section>
        <footer>
            <p>copyright reserved. @theblackwrist inc.</p>
        </footer>
    </div>
</body>
</html>