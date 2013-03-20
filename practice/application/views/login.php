<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to VMC</title>
	<!-- Le styles -->
	<link href='assets/img/logo.ico' rel='icon' type='image/x-icon'/>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-responsive.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/fonts.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/login.css');?>">
	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

	
</head>
<body >
	<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo base_url();?>"><img src="assets/img/logo_tiny.png" alt="VMC">Villegers Montessori College</a>
        </div>
      </div>
    </div>

    <div class="container">
        <div class="row">

        	<div class="span6">
        		
        		<div class="login-info-wraper">
        			<div id="login-info">
        			
        				<h1><img src="assets/img/logo.png" alt="VMC" width = "100" height="100">VMC Student Portal</h1>
        			
        				<ul dir="rtl">
        					<li>View your personal information</li>
							<li>View your current schedule, academic grades</li>
							<li>Socialize with your fellow VMC Students</li>

        				</ul>
        				
        			</div>
        		</div>

        	</div>

        	<div class="span6">
        		<div id="login-wraper">
        		    <form method = "POST" action="<?php echo base_url('main/login_validation');?>" id="login-form" class="form">
        		        <legend>Sign in to <span class="blue">VMC</span></legend>
        		    
        		        <div class="body">
        		        	<!-- username -->
        		        	<?php echo form_error('stud_num'); ?>
        		        	<label>Student Number</label>
        		        	<input type="text" name="stud_num" value="<?php echo set_value('stud_num'); ?>" size="50" class="input-huge"/>
        		        	<!-- password -->
        		        	<label>Password</label>
        		        	<?php echo form_error('password'); ?>
							<input type="password" name="password" size="50" class="input-huge"/>

        		        </div>
        		    
        		         <div class="footer">         
		                    <input type="submit" class ="btn btn-success" value = "Login">
		                </div>
        		    </form>
        		</div>
        	</div>

        </div>
    </div>

    <footer class="white navbar-fixed-bottom">
      Don't have an account yet? <a href="#" class="btn btn-black">Register</a>
    </footer>

	<!--
		<div class="span4" >
			<form method = "POST" action="<?php echo base_url('main/login_validation');?>">	
			
				<h2>Login</h2>

				<?php echo form_error('stud_num'); ?>
				<input type="text" name="stud_num" value="<?php echo set_value('stud_num'); ?>" size="50" placeholder = "Student Number" class="input-huge"/>
				
				<?php echo form_error('password'); ?>
				<input type="password" name="password" size="50" placeholder = "Password"/>
			
			
				</br><input type="submit" class ="btn btn-primary" value = "Login">
			</form>
			<a class = "btn" href = '<?php echo base_url()."main/signup" ?>'>Signup</a>
		</div>

		</div>
	</div>
	-->
	<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

</body>
</html>