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
        <h2>Forgot Password</h2>
        <form name="forgotpassword-form" method="post" action="ForgotPassword_Action.php">
        <div class="row">
            <div class="col-md-8">
                <div class="form-horizontal">
                    <h4>Forgot your password?</h4>
                    <hr />
                    <div class="form-group">
                        <label name="email" class="col-md-2 control-label">Email</label>
                        <div class="col-md-10">
                            <input name="email" class="form-control" type="Email" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-10">
                            <input type="submit" value="Email Link" class="btn btn-default" />
                        </div>
                    </div>
                </div>
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
            



