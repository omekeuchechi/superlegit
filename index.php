<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register and Login</title>
                     <!--------------------------------font-awesome link load local------------------------------------>
                     <!-- <link rel="stylesheet" href="/\fontawesome-free-6.5.2-web/css/all.css">
                     <link rel="stylesheet" href="/\fontawesome-free-6.5.2-web/css/brands.css">
                     <link rel="stylesheet" href="/\fontawesome-free-6.5.2-web/css/all.css">
                     <link rel="stylesheet" href="/\fontawesome-free-6.5.2-web/css/brands.css">
                     <link rel="stylesheet" href="/\fontawesome-free-6.5.2-web/css/fontawesome.css">
                     <link rel="stylesheet" href="/\fontawesome-free-6.5.2-web/css/regular.css">
                     <link rel="stylesheet" href="/\fontawesome-free-6.5.2-web/css/solid.css">
                     <link rel="stylesheet" href="/\fontawesome-free-6.5.2-web/css/svg-with-js.css">
                     <link rel="stylesheet" href="/\fontawesome-free-6.5.2-web/css/v4-font-face.css">
                     <link rel="stylesheet" href="/\fontawesome-free-6.5.2-web/css/v4-shims.css"> -->
                     <link rel="stylesheet" href="fontawesome-free-6.5.2-web/css/all.css">
                     <link rel="stylesheet" href="fontawesome-free-6.5.2-web/css/brands.css">
                     <link rel="stylesheet" href="fontawesome-free-6.5.2-web/css/fontawesome.css">
                     <link rel="stylesheet" href="fontawesome-free-6.5.2-web/css/regular.css">
                     <link rel="stylesheet" href="fontawesome-free-6.5.2-web/css/solid.css">
                     <link rel="stylesheet" href="fontawesome-free-6.5.2-web/css/svg-with-js.css">
                     <link rel="stylesheet" href="fontawesome-free-6.5.2-web/css/v4-font-face.css">
                     <link rel="stylesheet" href="fontawesome-free-6.5.2-web/css/v4-shims.css">
                     <link rel="stylesheet" href="fontawesome-free-6.5.2-web/css/v5-font-face.min.css">
                     <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container" id="signUp">
        <h1 class="form-title">Register</h1>
        <form action="register.php" method="post">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="fName" id="fName" placeholder="first-name" required>
                <label for="fName">First Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="lName" id="lName" placeholder="last-name" required>
                <label for="lName">Last Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="text" name="email" id="email" placeholder="Email" required>
                <label for="lName">Email</label>
            </div>
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="text" name="password" id="password" placeholder="Password" required>
                    <label for="lName">Password</label>
                </div>
                <input type="submit" value="Sign up" class="btn" name="signUp">
        </form>
        <p class="or">
            ----------or-----------
        </p>
        <div class="icon">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Already Have Account ?</p>
            <button id="signInButton">Sign In</button>
        </div>
    </div>

    <div class="container" id="signIn">
        <h1 class="form-title">Register</h1>
        <form action="" method="post">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="text" name="email" id="email" placeholder="Email" required>
                <label for="lName">Email</label>
            </div>
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="text" name="password" id="password" placeholder="Password" required>
                    <label for="lName">Password</label>
                </div>
                <p class="recover">
                    <a href="#">Recover Password</a>
                </p>
                <input type="submit" value="Sign in" class="btn" name="signIn">
        </form>
        <p class="or">
            ----------or-----------
        </p>
        <div class="icon">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Don't have account yet?</p>
            <button id="signUpButton">Sign up</button>
        </div>
        <script src="./js/app.js"></script>
</body>
</html>