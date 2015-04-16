<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/public/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/public/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/public/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/public/css/login.css" media="screen">

<link rel="stylesheet" type="text/css" href="/public/css/mws-theme.css" media="screen">

<title>MWS Admin - Login Page</title>

</head>

<body>

<div id="mws-login-wrapper">
	<div id="mws-login">
	    <h1>Login</h1>
	    <div class="mws-login-lock"><i class="icon-lock"></i></div>
        <div id="mws-login-form"></div>        
        <form class="" action="<?php echo $link; ?>" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
            <fieldset>
            	<?php
            	if(isset($error['username']))
				{
					echo '<div class="form-group has-error">';
				}
				else{
					echo '<div class="form-group">';
				}
            	?>
                    <input class="form-control" placeholder="Username" name="username" type="text" value="<?php echo $username; ?>">
                <?php
                if(isset($error['password']))
				{
					foreach ($error['password'] as $eer) 
					{		
						echo '<p class="help-block">'.$eer.'</p>';
					}
				}
                ?>
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                </div>
                <div class="checkbox">
                    <label>
                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                    </label>
                </div>
                <!-- Change this to a button or input when using this as a form -->
                <button class="btn btn-lg btn-success btn-block" type="submit">Login</button>
            </fieldset>
        </form>

        </div>
</div>
<!-- JavaScript Plugins -->
    <script src="/public/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/public/js/libs/jquery.placeholder.min.js"></script>
    <script src="/public/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/public/jui/js/jquery-ui-effects.min.js"></script>

    <!-- Plugin Scripts -->
    <script src="/public/plugins/validate/jquery.validate-min.js"></script>

    <!-- Login Script -->
    <script src="/public/js/core/login.js"></script>

</body>
</html>
