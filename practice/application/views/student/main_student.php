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
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container-fluid">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#">Student Panel</a>
            <div class="nav-collapse collapse">
              <div class="btn-group pull-right">
              <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="icon-user"></i>
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="icon-file"></i>&nbsp;&nbsp;User information</a></li>
                <li><a href="#"><i class="icon-edit"></i>&nbsp;&nbsp;Change Password</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo base_url('student/logout');?>">Logout</a></li>
              </ul>
            </div>
            </div><!--/.nav-collapse -->
          </div>
        </div>
      </div>
    <div id="main-content">
      <!-- Sidebar -->
              <div class="span3">
                <ul id="sidebar" class="nav nav-tabs nav-stacked">
                  <li class="active"><a href="index.html"><i class="icon-dashboard"></i>&nbsp;&nbsp;Shortcuts</a></li>
                  <li><a href="grid.html"><i class="icon-th-large"></i>&nbsp;&nbsp;Dashboard</a></li>
                  <li><a href="tables.html"><i class="icon-table"></i>&nbsp;&nbsp;User</a></li>
                  <li><a href="messages.html"><i class="icon-comments-alt"></i>&nbsp;&nbsp;Grades<span class="label label-success pull-right">New!</span></a></li>
                  <li><a href="news.html"><i class="icon-globe"></i>&nbsp;&nbsp;News<span class="label label-success pull-right">6</span></a></li>
                  <li><a href="products.html"><i class="icon-truck"></i>&nbsp;&nbsp;Products<span class="label label-success pull-right">3</span></a></li>
                  <li><a href="alerts.html"><i class="icon-bolt"></i>&nbsp;&nbsp;Alerts</a></li>
                  <li><a href="gallery.html"><i class="icon-camera-retro"></i>&nbsp;&nbsp;Gallery</a></li>
                  <li><a href="faqs.html"><i class="icon-legal"></i>&nbsp;&nbsp;FAQ</a></li>
                  <li><a href="user-account.html"><i class="icon-user"></i>&nbsp;&nbsp;User information</a></li>
                  <li class="accordion">
                    <a href="#collapse-additional-info" class="accordion-toggle" data-toggle="collapse" data-parent="navigation-components">
                      <i class="icon-list-ul"></i>&nbsp;&nbsp;More info
                      <span class="label label-success pull-right">Click me!</span>
                    </a>
                    <div id="collapse-additional-info" class="accordion-body collapse">
                      <div class="sidebar-extra well">
                        You can add more information here.
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            
          <!-- /Sidebar -->
      
          <!-- Content -->
          <div class="span9">
            <h1 class="page-title">Control panel overview</h1>
            
            <div class="box-container">
              <div class="box-holder">
                <a href="#"><div class="box"><span>216</span>Views</div></a>
              </div>
              
              <div class="box-holder">            
                <a href="#"><div class="box"><span>34</span>Messages</div></a>
              </div>
              
              <div class="box-holder">            
                <a href="#"><div class="box"><span>58</span>Open tickets</div></a>
              </div>
              
              <div class="box-holder">            
                <a href="#"><div class="box"><span>79</span>Invoices</div></a>
              </div>
            </div>
          </div>
          <!-- /Content --></div>

  

  <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/js/jquery.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
  </body>
</html>