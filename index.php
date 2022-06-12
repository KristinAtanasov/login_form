<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Document</title>
    </head>
    <body>
        <section>
            <div class="wraper">
                <div class="sign-up">
                    <form action="forms_methods/signup.php" method="post">
                        <h4>Sign Up</h4>
                        <label for="uid">Name:</label><br>
                        <input type="text" name="uid" placeholder="Your name..."><br>
                        <label for="pwd">Password:</label><br>
                        <input type="password" name="pwd" placeholder="Password"><br>
                        <input type="password" name="pwdRepeat" placeholder="Repeat Password"><br>
                        <label for="pwd">Email:</label><br>
                        <input type="email" name="email" placeholder="Email"><br>
                        <input class="btn-signup" type="submit" value="Sign Up">
                    </form>
                </div>
                <div class="login">
                    <form action="forms_methods/login.php" method="post">
                        <h4>Log In</h4>
                        <label for="uid">Name:</label><br>
                        <input type="text" name="uid" placeholder="Your name..."><br>
                        <label for="pwd">Password:</label><br>
                        <input type="password" name="pwd" placeholder="Password"><br>
                        <input class="btn-login" type="submit" value="Log In">
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>
