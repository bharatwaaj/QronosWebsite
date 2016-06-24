<html>

    <!-- Links and Scripts -->
    <link rel="stylesheet" href="Views/StyleSheets/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="Views/StyleSheets/stylesheet_register.css" type="text/css">
    <link type="text/css" rel="Stylesheet" href="Views/Stylesheets/stylesheet_default.css"/>


    <body>

        <!-- Header Section -->
        <?php
            include 'Header.php';
        ?>

        <!-- Content Section -->
        <div class="container body-content">
            
        <h2>Register</h2>

        <form name="register-form" method="post" action="Register_Action.php">
            <div class="row">
                <div class="col-md-5">
                    <section id="loginForm">
                        <div class="form-horizontal">
                        <?php
                        if($_COOKIE['HasRegistered']==="false"){
                        echo '<h4>Hey , it seems you haven\'t Registered yet!</h4>';
                        }
                        elseif($_COOKIE['HasRegistered']==="yetto"){
                        echo '<h4>Don\'t have an account yet?</h4>';    
                        }                        
                        ?> 
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
                            <label class="col-md-2 control-label">Confirm Password</label>
                            <div class="col-md-10">
                                <input class="form-control" type="Password" name="confirmpassword" />
                                </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <input type="submit" Value="Register" class="btn btn-default" />
                            </div>
                        </div>
                    </div> 
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
            

