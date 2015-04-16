<!DOCTYPE html>
<html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/public/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="/public/custom-plugins/wizard/wizard.css" media="screen">
<link rel="stylesheet" href="plugins/plupload/jquery.plupload.queue.css" media="screen">


<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/public/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/public/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/public/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/public/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/public/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/public/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/public/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/public/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/public/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/public/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/public/css/themer.css" media="screen">

<title>MWS Admin - Dashboard</title>

</head>

<body>

	<!-- Header -->
	<div id="mws-header" class="clearfix">
    
    	<!-- Logo Container -->
    	<div id="mws-logo-container">
        
        	<!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
        	<div id="mws-logo-wrap">
            	<!--img src="/public/images/mws-logo.png" alt="mws admin"-->
            	<h2 style="color: white">ADMIN</h2>
			</div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">
        
        	<!-- Notifications -->
        	<div id="mws-user-notif" class="mws-dropdown-menu">
            	<a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-exclamation-sign"></i></a>
                
                <!-- Unread notification count -->
                <span class="mws-dropdown-notif">35</span>
                
                <!-- Notifications dropdown -->
                <div class="mws-dropdown-box">
                	<div class="mws-dropdown-content">
                        <ul class="mws-notifications">
                        	<li class="read">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="read">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
	                        <a href="#">View All Notifications</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Messages -->
            <div id="mws-user-message" class="mws-dropdown-menu">
            	<a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-envelope"></i></a>
                
                <!-- Unred messages count -->
                <span class="mws-dropdown-notif">35</span>
                
                <!-- Messages dropdown -->
                <div class="mws-dropdown-box">
                	<div class="mws-dropdown-content">
                        <ul class="mws-messages">
                        	<li class="read">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="read">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
	                        <a href="#">View All Messages</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">
            
            	<!-- User Photo -->
            	<div id="mws-user-photo">
                	<img src="/public/example/profile.jpg" alt="User Photo">
                </div>
                
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">
                      Hello, <?php echo $_SESSION['userid'] ?>
                    </div>
                    <ul>
                    	<li><a href="#">Profile</a></li>
                        <li><a href="#">Change Password</a></li>
                        <li><a href="/login/logout">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
    	<!-- Necessary markup, do not remove -->
		<div id="mws-sidebar-stitch"></div>
		<div id="mws-sidebar-bg"></div>
        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
        
            <!-- Hidden Nav Collapse Button -->
            <div id="mws-nav-collapse">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
        	<!-- Searchbox -->
        	<div id="mws-searchbox" class="mws-inset">
            	<form action="typography.html">
                	<input type="text" class="mws-search-input" placeholder="Search...">
                    <button type="submit" class="mws-search-submit"><i class="icon-search"></i></button>
                </form>
            </div>
            
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>
                	<?php
                	if($_SERVER['REQUEST_URI'] == '/')
					{
						echo ' <li class="active"><a href="/"><i class="icon-home"></i> Dashboard</a>'.'</li>';
					}
					else
					{
						echo ' <li><a href="/"><i class="icon-home"></i> Dashboard</a>'.'</li>';
					}
                	?>
                	
                    <li><a href="#"><i class="icon-file"></i> Media</a></li>
                    
                    <?php
					if(($_SERVER['REQUEST_URI'] == '/category/index') || (substr($_SERVER['REQUEST_URI'],1,9 ) == 'category/' ))
					{
						echo ' <li class="active"><a href="/category/index"><i class="icon-tasks"></i> Category</a>'.'</li>';
					}
					else
					{
						echo ' <li><a href="/category/index"><i class="icon-tasks"></i> Category</a>'.'</li>';
					}
                    ?>
		             
		             <li>
						<a href="#"><i class="icon-list"></i> Contetent</a>
						<ul>
						    <?php
                			$db = Db::init();
							$stg = $db->category;
							$p = array(
								'submenu' => 'enable'
							);
							$data = $stg->find($p);
							foreach ($data as $nav) 
							{
								if($_SERVER['REQUEST_URI'] == '/content/index?idcategory='.$nav['_id'])
								{
									echo '<li class="active"><a href="/content/index?idcategory='.$nav['_id'].'"><i class="icon-folder-closed"></i>'.$nav['name'].'</a>'.'</li>';
								}
								else
								{
									echo '<li><a href="/content/index?idcategory='.$nav['_id'].'"><i class="icon-folder-closed"></i>'.$nav['name'].'</a>'.'</li>';
								}
								
							}
                    		?>
						</ul>
					</li>  
		                
                    <?php
					/*if(($_SERVER['REQUEST_URI'] == '/content/index') || (substr($_SERVER['REQUEST_URI'],1,8 ) == 'content/' ))
					{
						echo ' <li class="active"><a href="/content/index"><i class="icon-folder-closed"></i> Content</a>'.'</li>';
					}
					else
					{
						echo ' <li><a href="/content/index"><i class="icon-folder-closed"></i> Content</a>'.'</li>';
					}*/
                    ?>
                    
                    <?php
					if(($_SERVER['REQUEST_URI'] == '/user/index') || (substr($_SERVER['REQUEST_URI'],1,5 ) == 'user/' ))
					{
						echo ' <li class="active"><a href="/user/index"><i class="icon-users"></i> User</a>'.'</li>';
					}
					else
					{
						echo ' <li><a href="/user/index"><i class="icon-users"></i> User</a>'.'</li>';
					}
                    ?>
                    
                    <?php
					if(($_SERVER['REQUEST_URI'] == '/preference/index') || (substr($_SERVER['REQUEST_URI'],1,11 ) == 'preference/' ))
					{
						echo ' <li class="active"><a href="/preference/index"><i class="icon-cogs"></i> Preference</a>'.'</li>';
					}
					else
					{
						echo ' <li><a href="/preference/index"><i class="icon-cogs"></i> Preference</a>'.'</li>';
					}
                    ?>
                    
                     <?php
					if(($_SERVER['REQUEST_URI'] == '/contact/index') || (substr($_SERVER['REQUEST_URI'],1,8 ) == 'contact/' ))
					{
						echo ' <li class="active"><a href="/contact/index"><i class="icon-envelope"></i> Contact</a>'.'</li>';
					}
					else
					{
						echo ' <li><a href="/contact/index"><i class="icon-envelope"></i> Contact</a>'.'</li>';
					}
                    ?>
                    
                </ul>
            </div>         
        </div>
        
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
        
        	<!-- Inner Container Start -->
            <div class="container">
            
            	
                
              
	
	<?php echo $content ?>

    <!-- JavaScript Plugins -->
    
    <script src="/public/js/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/public/js/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/public/js/js/libs/jquery.placeholder.min.js"></script>
    <script src="/public/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/public/jui/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/public/jui/jui/jquery-ui.custom.min.js"></script>
    <script src="/public/jui/jui/js/jquery.ui.touch-punch.js"></script>

    <!-- Plugin Scripts -->
    <script src="/public/plugins/datatables/jquery.dataTables.min.js"></script>
    <!--[if lt IE 9]>
    <script src="js/libs/excanvas.min.js"></script>
    <![endif]-->
    <script src="/public/plugins/flot/jquery.flot.min.js"></script>
    <script src="/public/plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
    <script src="/public/plugins/flot/plugins/jquery.flot.pie.min.js"></script>
    <script src="/public/plugins/flot/plugins/jquery.flot.stack.min.js"></script>
    <script src="/public/plugins/flot/plugins/jquery.flot.resize.min.js"></script>
    <script src="/public/plugins/colorpicker/colorpicker-min.js"></script>
    <script src="/public/plugins/validate/jquery.validate-min.js"></script>
    <script src="/public/custom-plugins/wizard/wizard.min.js"></script>

    <!-- Core Script -->
    <script src="/public/bootstrap/js/bootstrap.min.js"></script>
    <script src="/public/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/public/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/public/js/demo/demo.dashboard.js"></script>

</body>
</html>