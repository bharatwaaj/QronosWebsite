<html>
    <!-- Links and Scripts -->
    <link rel="stylesheet" href="Views/StyleSheets/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="Views/StyleSheets/stylesheet_login.css" type="text/css">
    <link type="text/css" rel="Stylesheet" href="Views/Stylesheets/stylesheet_default.css"/>

    <body>

        <!-- Header Section -->
        <?php
            include 'Header.php';
        ?>

        <!-- Content Section -->
        <div class="container body-content">    
        <h2>Login</h2>
        <form name="login-form" method="post" action="Login_Action.php">
        <div class="row">
            <div class="col-md-5">
                <section id="loginForm">
                    <div class="form-horizontal">
                        <h4>Hey , Login to Explore more.</h4>
                        <hr />
                        <div class="form-group">
                            <label class="col-md-2 control-label">Email</label>
                            <div class="col-md-10">
                                <input class="form-control" type="Email" name="email" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Password</label>
                            <div class="col-md-10">
                                <input class="form-control" type="Password" name="password" />
                                </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <div class="checkbox">
                                    <input type="checkbox" />
                                    <label name="RememberMe">Remember me?</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <input type="submit" Value="Log in" class="btn btn-default" />
                            </div>
                        </div>
                    </div>
                    <p>
                        <a href="Register.php">Register as a new user</a>
                    </p>
                    <p>
                        <a href="ForgotPassword.php">Forgot your password?</a>
                    </p>
                    </section>
                </div>
            </div>
        </form>
        </div>

        <!-- Footer Section -->
        <?php
            include 'Footer.php';
        ?>

    </body>
</html>