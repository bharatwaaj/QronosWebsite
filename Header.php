<link type="text/css" rel="Stylesheet" href="Views/Stylesheets/bootstrap.min.css"/>
<link type="text/css" rel="Stylesheet" href="Views/Stylesheets/stylesheet_index.css"/>
<link type="text/css" rel="Stylesheet" href="Views/Stylesheets/stylesheet_default.css"/>

<div class="nav navbar-default  navbar-inverse my-custom-navbar">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand"  href="index.php">QRONOS</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="About.php">About</a></li>
                        <li><a href="Contact.php">Contact</a></li>
                    </ul>
                        <?php
                        $LoginState = $_COOKIE["LoginState"];
                        $username = $_COOKIE["Username"];
                        if($LoginState==='true'){
                        echo "<LoggedInTemplate><ul class=\"nav navbar-nav navbar-right\"><li><a href=\"Profile.php\">Hey , ". $username . " !</a></li><li><a href=\"Logout.php\">Log out</a></li></ul></LoggedInTemplate>" ;
                        }else{
                            echo "<AnonymousTemplate><ul class=\"nav navbar-nav navbar-right\"><li><a href=\"Register.php\">Register</a></li><li><a href=\"Login.php\">Log in</a></li></ul></AnonymousTemplate>";    
                        }
                        ?>
                </div>
            </div>
        </div>