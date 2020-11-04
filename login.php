<?php include('server.php') ?> 
<!DOCTYPE html>
<html lang="en">

<head class="crypt-dark">
    <meta charset="UTF-8">
    <title>Crypterio</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/ui.css">
</head>

<body class="crypt-dark">
    <header>
        <div class="container-full-width">
            <div class="crypt-header">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5">
                        <div class="row">
                            <div class="col-xs-2">
                                <div class="crypt-logo"><img src="images/logo.jpg" alt=""></div>
                            </div>
                            
                            
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 d-none d-md-block d-lg-block">
                        <ul class="crypt-heading-menu fright">
                            
                            <li><a href="realtime.html">Realtime</a></li>
                            <li><a href="market-overview.html">Search</a></li>
                            
                            <li class="crypt-box-menu menu-green"><a href="login.html">login</a></li>
                        </ul>
                    </div><i class="menu-toggle pe-7s-menu d-xs-block d-sm-block d-md-none d-sm-none"></i></div>
            </div>
        </div>
        <div class="crypt-mobile-menu">
            <ul class="crypt-heading-menu">
                <li class="active"><a href="">Exchange</a></li>
                <li><a href="">Market Cap</a></li>
                <li><a href="">Treanding</a></li>
                <li><a href="">Tools</a></li>
                
                <li class="crypt-box-menu menu-green"><a href="">login</a></li>
            </ul>
            
        </div>
    </header>
    
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="cryptorio-forms cryptorio-forms-dark text-center pt-5 pb-5">
                    <div class="logo">
                        <img src="images/logo.png" alt="logo-image">
                    </div>
                    <h3 class="p-4">Welcome To Login</h3>
                    <div class="cryptorio-main-form">
                        <form method="post" action="login.php" class="text-left">
                        	<?php include('errors.php'); ?> 

                            <label for="username">Account Name</label>
                            <input type="text" id="username" name="username" placeholder="Your username/cellphone">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" placeholder="Please Input Your Password">

                            <input type="submit" value="Log In" class="crypt-button-red-full" name="login_user">
                        </form>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

	<script src="amc/core.js"></script>
	<script src="amc/charts.js"></script>
	<script src="amc/dark.js"></script>
	<script src="amc/animated.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="bootstrap/js/bootstrap.bundle.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<script src="js/main.js"></script>
	<script src="js/amc.js"></script>
	<script src="https://s3.tradingview.com/tv.js"></script>
</body>
</html>