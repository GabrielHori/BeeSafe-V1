<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeeSafe Sign In & Sign up</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- CONTAINER -->
    <div class="container">
        <div class="forms-container">
            <!-- Sign in  -->
            <div class="signin-signup">
            <form action="connexion.php" class="sign-in-form">
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="email">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="text" placeholder="Password">
                    </div>
                    <input type="submit" value="Login" class="btn solid">

                    <p class="social-text">Or Sign in with social plateforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                    </div>
                </form>
                <!-- Sign Up -->
                <?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div class="alert alert-success">
                                <strong>Succès</strong> inscription réussie !
                            </div>
                        <?php
                        break;

                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe différent
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email non valide
                            </div>
                        <?php
                        break;

                        case 'email_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email trop long
                            </div>
                        <?php 
                        break;

                        case 'pseudo_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> pseudo trop long
                            </div>
                        <?php 
                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte deja existant
                            </div>
                        <?php 

                    }
                }
                ?>
                <form action="inscription.php" class="sign-up-form">
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" placeholder="email">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="text" placeholder="Password">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="text" placeholder="Confirm your Password">
                    </div>
                    <input type="submit" value="Sign" class="btn solid">
                    <!-- Social icon -->
                    <p class="social-text">Or Sign up with social plateforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <!-- Sign up left panel -->
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus reprehenderit quibusdam facilis! Dolores dicta voluptates voluptatibus perspiciatis accusamus inventore eveniet.</p>
                <button class="btn transparent" id="sign-up-btn">Sign up</button>
                </div>

                <img src="assets/undraw_maker_launch_crhe.svg" class="image" alt="">
            </div>
             <!-- Sign in Right panel -->
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus reprehenderit quibusdam facilis! Dolores dicta voluptates voluptatibus perspiciatis accusamus inventore eveniet.</p>
                <button class="btn transparent" id="sign-in-btn">Sign in</button>
                </div>

                <img src="assets/undraw_press_play_bx2d.png" class="image" alt="">
            </div>

        </div>
    </div>

    <script src="js/main.js"></script>
    <script src="https://kit.fontawesome.com/20bd2b2081.js" crossorigin="anonymous"></script>
</body>
</html>
