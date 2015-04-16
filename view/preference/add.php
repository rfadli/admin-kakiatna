<!DOCTYPE html>
<html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/public/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="/public/custom-plugins/wizard/wizard.css" media="screen">

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

	<!-- Themer (Remove if not needed) -->  
	<div id="mws-themer">
        <div id="mws-themer-content">
        	<div id="mws-themer-ribbon"></div>
            <div id="mws-themer-toggle">
                <i class="icon-bended-arrow-left"></i> 
                <i class="icon-bended-arrow-right"></i>
            </div>
        	<div id="mws-theme-presets-container" class="mws-themer-section">
	        	<label for="mws-theme-presets">Color Presets</label>
            </div>
            <div class="mws-themer-separator"></div>
        	<div id="mws-theme-pattern-container" class="mws-themer-section">
	        	<label for="mws-theme-patterns">Background</label>
            </div>
            <div class="mws-themer-separator"></div>
            <div class="mws-themer-section">
                <ul>
                    <li class="clearfix"><span>Base Color</span> <div id="mws-base-cp" class="mws-cp-trigger"></div></li>
                    <li class="clearfix"><span>Highlight Color</span> <div id="mws-highlight-cp" class="mws-cp-trigger"></div></li>
                    <li class="clearfix"><span>Text Color</span> <div id="mws-text-cp" class="mws-cp-trigger"></div></li>
                    <li class="clearfix"><span>Text Glow Color</span> <div id="mws-textglow-cp" class="mws-cp-trigger"></div></li>
                    <li class="clearfix"><span>Text Glow Opacity</span> <div id="mws-textglow-op"></div></li>
                </ul>
            </div>
            <div class="mws-themer-separator"></div>
            <div class="mws-themer-section">
	            <button class="btn btn-danger small" id="mws-themer-getcss">Get CSS</button>
            </div>
        </div>
        <div id="mws-themer-css-dialog">
        	<form class="mws-form">
            	<div class="mws-form-row">
		        	<div class="mws-form-item">
                    	<textarea cols="auto" rows="auto" readonly="readonly"></textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Themer End -->

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
                    <li class="active"><a href="/"><i class="icon-home"></i> Dashboard</a></li>
                    <li><a href="#"><i class="icon-graph"></i> Media</a></li>
                    <li><a href="/category/index"><i class="icon-calendar"></i> Category</a></li>
                    <li><a href="/content/index"><i class="icon-folder-closed"></i> Content</a></li>
                    <li><a href="/user/index"><i class="icon-table"></i> User</a></li>
                    <li><a href="/preference/index"><i class="icon-cogs"></i> Preference</a></li>
                    <li><a href="/contact/index"><i class="icon-font"></i> Contact</a></li>
                    
                </ul>
            </div>         
        </div>
        
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
        
        	<!-- Inner Container Start -->
            <div class="container">
            
            	<!-- Statistics Button Container -->
            	<div class="mws-stat-container clearfix">
                	
                    <!-- Statistic Item -->
                	<a class="mws-stat" href="#">
                    	<!-- Statistic Icon (edit to change icon) -->
                    	<span class="mws-stat-icon icol32-building"></span>
                        
                        <!-- Statistic Content -->
                        <span class="mws-stat-content">
                        	<span class="mws-stat-title">Floors Climbed</span>
                            <span class="mws-stat-value">324</span>
                        </span>
                    </a>

                	<a class="mws-stat" href="#">
                    	<!-- Statistic Icon (edit to change icon) -->
                    	<span class="mws-stat-icon icol32-sport"></span>
                        
                        <!-- Statistic Content -->
                        <span class="mws-stat-content">
                        	<span class="mws-stat-title">Calories Burned</span>
                            <span class="mws-stat-value down">74%</span>
                        </span>
                    </a>

                	<a class="mws-stat" href="#">
                    	<!-- Statistic Icon (edit to change icon) -->
                    	<span class="mws-stat-icon icol32-walk"></span>
                        
                        <!-- Statistic Content -->
                        <span class="mws-stat-content">
                        	<span class="mws-stat-title">Kilometers Walked</span>
                            <span class="mws-stat-value">14</span>
                        </span>
                    </a>
                    
                	<a class="mws-stat" href="#">
                    	<!-- Statistic Icon (edit to change icon) -->
                    	<span class="mws-stat-icon icol32-bug"></span>
                        
                        <!-- Statistic Content -->
                        <span class="mws-stat-content">
                        	<span class="mws-stat-title">Bugs Fixed</span>
                            <span class="mws-stat-value up">22%</span>
                        </span>
                    </a>
                    
                	<a class="mws-stat" href="#">
                    	<!-- Statistic Icon (edit to change icon) -->
                    	<span class="mws-stat-icon icol32-car"></span>

                        <!-- Statistic Content -->
                        <span class="mws-stat-content">
                        	<span class="mws-stat-title">Cars Repaired</span>
                            <span class="mws-stat-value">77</span>
                        </span>
                    </a>
                </div>
                
                
                <!-- Panels Start -->
                
                <div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span>Add Preference</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                    	<form class="mws-form" action="<?php echo $link; ?>" role="form" method="post" enctype="multipart/form-data">
                    	
                    		<div class="mws-form-inline">
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">Website Name</label>
                    				<div class="mws-form-item">
                    					<?php
											echo '<input type="text" name="name_website" class="small" value="'.$name_website.'"/>';
										?>
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">Contact</label>
                    				<div class="mws-form-item">
                    					<?php
											echo '<input type="text" name="contact" class="small" value="'.$contact.'"/>';
										?>
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">Address </label>
                    				<div class="mws-form-item">
                    					<?php
											echo '<input type="text" name="address" class="small" value="'.$address.'"/>';
										?>
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">Phone </label>
                    				<div class="mws-form-item">
                    					<?php
											echo '<input type="text" name="phone" class="small" value="'.$phone.'"/>';
										?>
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">Email </label>
                    				<div class="mws-form-item">
                    					<?php
											echo '<input type="text" name="email" class="small" value="'.$email.'"/>';
										?>
                    				</div>
                    			</div>
                    		</div>
                    		<div class="mws-button-row">
                    			<input type="submit" value="Submit" class="btn btn-danger">
                    			<input type="reset" value="Reset" class="btn ">
                    		</div>
                    	</form>

                
                
    <!-- JavaScript Plugins -->
    <script src="/public/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/public/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/public/js/libs/jquery.placeholder.min.js"></script>
    <script src="/public/custom-plugins/fileinput.js"></script>

    <!-- jQuery-UI Dependent Scripts -->
    <script src="/public/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/public/jui/jquery-ui.custom.min.js"></script>
    <script src="/public/jui/js/jquery.ui.touch-punch.js"></script>

    <!-- Plugin Scripts -->
    <script src="/public/plugins/colorpicker/colorpicker-min.js"></script>
    <script src="/public/plugins/validate/jquery.validate-min.js"></script>

    <!-- Core Script -->
    <script src="/public/bootstrap/js/bootstrap.min.js"></script>
    <script src="/public/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/public/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->

</body>
</html>