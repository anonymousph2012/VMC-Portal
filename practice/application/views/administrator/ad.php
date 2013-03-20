<!DOCTYPE html>
<html>
  <head>
    <title>VMC Student Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Le Styles -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-responsive.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/fonts.css');?>">
  </head>
  <body>
  	<!-- Navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container-fluid">
				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
				<a class="brand" href="index.html">Admin Dashboard</a>
				<div class="nav-collapse">
					<ul class="nav pull-right">
						<li class="divider-vertical"></li>
						<li class="dropdown">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-bullhorn icon-white"></i>&nbsp;&nbsp;Latest activity&nbsp;&nbsp;<span class="label label-important">6</span></a>
							<ul class="dropdown-menu">
                            	<li><a href="#"><i class="icon-comment"></i>New comment<span class="time">24 mins ago</span></a></li>
                            	<li><a href="#"><i class="icon-envelope-alt"></i>New message<span class="time">50 mins ago</span></a></li>
              								<li><a href="#"><i class="icon-user"></i>User registration<span class="time">17 hours ago</span></a></li>
              								<li><a href="#"><i class="icon-lock"></i>User logged in<span class="time">1 day ago</span></a></li>
                              <li><a href="#"><i class="icon-lock"></i>User signed in<span class="time">2 days ago</span></a></li>
								              <li><a href="#"><i class="icon-trash"></i>User deleted account<span class="time">5 days ago</span></a></li>
                              <li><hr><a class="dropdown-menu-footer">
                                <span class="footer"><i class="icon-eye-open"></i>&nbsp;&nbsp;View all activity</span></a>
                              </li>	
							</ul>
						</li>
						<li class="divider-vertical"></li>
						<li class="dropdown">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-user icon-white"></i>&nbsp;&nbsp;Admin
                <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="user-account.html"><i class="icon-file"></i>&nbsp;&nbsp;User information</a></li>
								<li><a href="password.html"><i class="icon-edit"></i>&nbsp;&nbsp;Change Password</a></li>
							</ul>
						</li>
						<li class="divider-vertical"></li>
						<li><a href="<?php echo base_url('administrator/logout');?>"><i class="icon-lock icon-white"></i>&nbsp;&nbsp;Logout</a></li>
						<li class="divider-vertical"></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
    <div id="main-content">
      <div class="container"><!-- Sidebar -->
      	        <div class="span3">
      	          <ul id="sidebar" class="nav nav-tabs nav-stacked">
      	            <li class="active"><a href="<?php echo base_url('administrator');?>"><i class="icon-th-large icon-white"></i>&nbsp;&nbsp;Dashboard</a></li>
      	            <li><a href="#"><i class="icon-user"></i>&nbsp;&nbsp;Student<span class="label label-success pull-right">New!</span></a></li>
      	            <li><a href="#"><i class="icon-hand-right"></i>&nbsp;&nbsp;Teachers<span class="label label-success pull-right">6</span></a></li>
      	            <li><a href="#"><i class="icon-book"></i>&nbsp;&nbsp;Subjects<span class="label label-success pull-right">3</span></a></li>
      	            <li><a href="#"><i class="icon-th-list"></i>&nbsp;&nbsp;Sections</a></li>
      	            <li class="accordion">
      	              <a href="#collapse-additional-info" class="accordion-toggle" data-toggle="collapse" data-parent="navigation-components">
      	                <i class="icon-globe"></i>&nbsp;&nbsp;Add
      	              </a>
      	              <div id="collapse-additional-info" class="accordion-body collapse">
      	                <div class="sidebar-extra well">
      	                  <ul class="nav nav-tabs">
                            <button class="btn btn-block btn-inverse">Add Student</button>
                          </ul>
                          <ul class="nav nav-tabs">
                            <button class="btn btn-block btn-inverse">Add Teacher</button>
                          </ul>
      	                </div>
      	              </div>
      	            </li>
      	          </ul>
      	        </div>
      	      
      	    <!-- /Sidebar -->
      	
      	    <!-- Content -->
      					<div class="span8">
      						<h1 class="page-title">Control panel overview</h1>
      						
      						<div class="box-container">
      							<div class="box-holder">
      								<a href="#"><div class="box"><span>216</span>Students</div></a>
      							</div>
      							
      							<div class="box-holder">						
      								<a href="#"><div class="box"><span>34</span>Teachers</div></a>
      							</div>
      							
      							<div class="box-holder">						
      								<a href="#"><div class="box"><span>58</span>Subjects</div></a>
      							</div>
      							
      							<div class="box-holder">						
      								<a href="#"><div class="box"><span>79</span>Sections</div></a>
      							</div>
      						</div>
      						
      						<div class="widget">
      							<div class="widget-header">
      								<h3><i class="icon-tag"></i>&nbsp;&nbsp;Students</h3>
      							</div>
      							<div class="widget-content">
      								<div class="box-container">
      									<table class="table table-bordered">
      										<thead>
      											<tr>
      												<th class = "span2">#</th>
      												<th class = "span2">First Name</th>
      												<th class = "span2">Lastname</th>
      												<th class = "span2">Actions</th>
      											</tr>
      										</thead>
        										<tbody>
                              <?php foreach($users as $u): ?>
                              <tr>
                                  <td><?php echo $u['stud_num']; ?></td>
                                  <td><?php echo $u['stud_fname']; ?></td>
                                  <td><?php echo $u['stud_lname']; ?></td>
                                  <td>
                                      <button class="btn btn-small btn-info">Update</button>
                                      <button class="btn btn-small btn-info">delete</button>
                                  </td>
                              </tr>
                              <?php endforeach; ?>
                            </tbody>
      									</table>
                        <button class="btn btn-success pull-right">All Student</button>
      								</div>
      							</div>
      						</div>

                  <div class="widget">
                    <div class="widget-header">
                      <h3><i class="icon-tag"></i>&nbsp;&nbsp;Teachers</h3>
                    </div>
                    <div class="widget-content">
                      <div class="box-container">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th class = "span2">#</th>
                              <th class = "span2">First Name</th>
                              <th class = "span2">Lastname</th>
                              <th class = "span2">Actions</th>
                            </tr>
                          </thead>
                            <tbody>
                              <?php foreach($teacher as $t): ?>
                              <tr>
                                  <td><?php echo $t['teacher_num']; ?></td>
                                  <td><?php echo $t['teacher_fname']; ?></td>
                                  <td><?php echo $t['teacher_lname']; ?></td>
                                  <td>
                                      <button class="btn btn-small btn-info">Update</button>
                                      <button class="btn btn-small btn-info">delete</button>
                                  </td>
                              </tr>
                              <?php endforeach; ?>
                            </tbody>
                        </table>
                        <button class="btn btn-success pull-right">All Teachers</button>
                      </div>
                    </div>
                  </div>
      					</div>
      					<!-- /Content --></div>
			</div>

  

  <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/js/jquery.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
  </body>
</html>