<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php if (isset($page_title)) echo strip_tags($page_title) . ' | '; ?><?php echo $site_name; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="/barbershop/assets/ico/favicon.png">
        
      <link href="/assets/css/vendor/bootstrap.min.css" rel="stylesheet">
      <!-- fontawesome  CSS -->
      <link href="/assets/css/vendor/font-awesome.min.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="/assets/css/app.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="/assets/css/vendor/bootstrap-multiselect.css" rel="stylesheet">
      <link href="/assets/css/vendor/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
      <!-- button  CSS -->
      <script src="/assets/js/vendor/modernizr-2.7.1.min.js"></script>
      <script src="/assets/js/vendor/jquery-1.11.1.min.js"></script>
   </head>
   <body>
            
       <?php if ($logged_in) : ?> 
          <!-- Wrap all page content here -->
        <div id="wrap">


      <header role="navigation">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>"> <?php if (isset($site_name)) echo $site_name; ?></a>            
         </div>
         <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown">
               <i class="fa fa-bell-o"></i>
               <span class="visible-xs-inline">Notifications</span>
               <span class="badge up bg-danger pull-right">2</span></a>
               <div class="dropdown-menu notify animated fadeInDown">
                  <div class="panel">
                     <div class="panel-heading"> <strong>You have <span>2</span> notifications</strong> </div>
                     <div class="list-group"> 
                        <a href="" class="list-group-item">
                        <span class="pull-left thumb-sm"> <img src="assets/img/barbers/a0.jpg" alt="..." class="img-circle"> </span> 
                        <span class="media-body"> You have got appointment<br> <small class="text-muted">10 minutes ago</small> </span>
                        </a> 
                        <a href="" class="list-group-item"> <span class="media-body"> Confirmed you appoinment<br> <small class="text-muted">1 hour ago</small> </span> </a> 
                     </div>
                     <div class="panel-footer"> <a href="" class="pull-right"><i class="fa fa-cog"></i></a> <a href="profile.html">See all the notifications</a> </div>
                  </div>
               </div>
            </li>
            <li class="dropdown">
               <a href="#" title="Last login: <?php echo $last_login; ?>" class="dropdown-toggle" data-toggle="dropdown"><?php echo $login_name; ?> <span class="caret"></span></a>
               <ul class="dropdown-menu animated fadeInRight" role="menu">
                      <?php if (isset($my_controller)) : ?>   
                            <?php if ($logged_in) : ?>  
                                <?php if ($is_admin) : ?>  

                          <li><a href="<?php echo base_url('auth'); ?>">Manage users</a></li>   
                                                <li><a href="<?php echo base_url('auth/create_user'); ?>">Create user</a></li>
                                                <li><a href="<?php echo base_url('auth/create_group'); ?>">Create group</a></li>
  <?php endif; ?>
    <?php endif; ?>
      <?php endif; ?>
        <?php $userId = $this->ion_auth->get_user_id(); ?>
                  <li><a href="<?php echo base_url('auth/edit_user/'. $userId); ?>"> Profile</a></li>

                  <li><a href="my-appointments.html">My Appointments</a></li>
                  <li><a href="help.html">Help</a></li>
                  <li class="divider"></li>
                  <li><a href="<?php echo base_url('auth/logout'); ?>">Logout</a></li>
               </ul>
            </li>
         </ul>
      </header>


 
   <?php endif; ?>
            