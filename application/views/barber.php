<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="../../favicon.ico">
      <title>iBarbershop Admin Panel</title>
      <!-- Bootstrap core CSS -->
      <link href="assets/css/vendor/bootstrap.min.css" rel="stylesheet">
      <!-- fontawesome  CSS -->
      <link href="assets/css/vendor/font-awesome.min.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="assets/css/app.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="assets/css/vendor/bootstrap-multiselect.css" rel="stylesheet">
      <!-- button  CSS -->
      <script src="assets/js/vendor/modernizr-2.7.1.min.js"></script>
   </head>
   <body>
      <!-- Fixed navbar -->
      <header role="navigation">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">iBarbershop</a>
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
               <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sandy <span class="caret"></span></a>
               <ul class="dropdown-menu animated fadeInRight" role="menu">
                  <li><a href="profile.html"> Profile</a></li>
                  <li><a href="my-appointments.html">My Appointments</a></li>
                  <li><a href="help.html">Help</a></li>
                  <li class="divider"></li>
                  <li><a href="index.html">Logout</a></li>
               </ul>
            </li>
         </ul>
      </header>
      <!-- Begin page content -->
      <main role="main">
         <div class="row">
            <?php echo form_open("barber/add_barber", 'class="form-box form-vertical"');?>
            <div class="col-md-8 col-md-offset-2">
               <form class="form-horizontal" role="form">
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h4>Tell about your Barber</h4>
                     </div>
                     <div class="panel-body">
                        <ul id="myTab" class="nav nav-tabs" role="tablist">
                           <li class="active">
                              <a href="#step1" role="tab" data-toggle="tab">
                                 <h4>Step 1</h4>
                              </a>
                           </li>
                           <li>
                              <a href="#step2" role="tab" data-toggle="tab">
                                 <h4>Step 2</h4>
                              </a>
                           </li>
                           <li>
                              <a href="#step3" role="tab" data-toggle="tab">
                                 <h4>Step 3</h4>
                              </a>
                           </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                           <div class="tab-pane fade in active" id="step1">
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Barber Name</label>
                                  <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter barbershop name" name="barber_name" id="barber_name" value="<?php echo $user -> barber_name; ?>"> <span class="error"> *</span>
                                    <?php echo form_error('barber_name'); ?> >
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Barber Image</label>
                                 <div class="col-sm-9">
                                    <button class="btn btn-md btn-success"><i class="fa fa-picture-o"></i> Upload Image</button>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Gender</label>
                                 <div class="col-sm-9">
                                    <label class="radio-inline">
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked> Male
                                    </label>
                                    <label class="radio-inline">
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Female
                                    </label>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Phone</label>
                                 <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter Phone number">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Email</label>
                                 <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter email address">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Primary Preference</label>
                                 <div class="col-sm-9">
                                    <select class="form-control">
                                       <option value="">American</option>
                                       <option value="">Afro-American</option>
                                       <option value="">Latino </option>
                                       <option value="">Caucasian</option>
                                       <option value="">Asian</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Secondary Preference</label>
                                 <div class="col-sm-9">
                                    <select  multiple="multiple" class="form-control multiselect">
                                       <option value="Afro-American">Afro-American</option>
                                       <option value="American">American</option>
                                       <option value="Afro-American">Afro-American</option>
                                       <option value="Latino ">Latino </option>
                                       <option value="Caucasian">Caucasian</option>
                                       <option value="Asian">Asian</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="panel-footer text-right"> <button type="submit" class="btn btn-lg btn-primary ladda-button" data-style="expand-right"><span class="ladda-label"> <i class="fa fa-check"></i> Next</span></button></div>
                           </div>
                           <div class="tab-pane fade" id="step2">
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Shop Name</label>
                                 <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter Shop Name">                      
                                    <div class="row thumb-grid">
                                       <div class="col-xs-12 col-md-4">
                                          <figure>
                                             <img src="assets/img/shops/shop-image.png" width="200" alt=""/>
                                             <span class="checkmark">
                                             <input type="checkbox" />
                                             <label></label>
                                             </span>
                                             <address>
                                                <h3>Joe's Barbershop Chicago</h3>
                                                795 Folsom Ave, Suite 600<br>
                                                San Francisco, CA 94107<br>
                                                <abbr title="Phone">P:</abbr> (123) 456-7890
                                             </address>
                                          </figure>
                                       </div>
                                       <div class="col-xs-12 col-md-4">
                                          <figure>
                                             <img src="assets/img/shops/shop-image.png" width="200" alt=""/>
                                             <span class="checkmark">
                                             <input type="checkbox" checked />
                                             <label></label>
                                             </span>
                                             <address>
                                                <h3>Joe's Barbershop Chicago</h3>
                                                795 Folsom Ave, Suite 600<br>
                                                San Francisco, CA 94107<br>
                                                <abbr title="Phone">P:</abbr> (123) 456-7890
                                             </address>
                                          </figure>
                                       </div>
                                       <div class="col-xs-12 col-md-4">
                                          <figure>
                                             <img src="assets/img/shops/shop-image.png" width="200" alt=""/>
                                             <span class="checkmark">
                                             <input type="checkbox" checked/>
                                             <label></label>
                                             </span>
                                             <address>
                                                <h3>Joe's Barbershop Chicago</h3>
                                                795 Folsom Ave, Suite 600<br>
                                                San Francisco, CA 94107<br>
                                                <abbr title="Phone">P:</abbr> (123) 456-7890
                                             </address>
                                          </figure>
                                       </div>
                                    </div>
                                    <div class="alert danger fade in" role="alert">
                                       <p class="pull-right">
                                          <!-- <a class="close" data-dismiss="alert"></a> -->
                                          <button type="button" id="register-shop" class="btn btn-md btn-danger">Register your Shop</button>
                                       </p>
                                       <h4>Results are not found for the above search</h4>
                                       <p>Please register your Shop Name.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-register hide">
                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">BarberShop Name</label>
                                    <div class="col-sm-9">
                                       <input type="text" class="form-control" placeholder="Enter barbershop name">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">Barbershop Image</label>
                                    <div class="col-sm-9">
                                       <button class="btn btn-md btn-success"><i class="fa fa-picture-o"></i> Upload Image</button>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">Address 1</label>
                                    <div class="col-sm-9">
                                       <textarea class="form-control"></textarea>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">Address 2</label>
                                    <div class="col-sm-9">
                                       <textarea class="form-control"></textarea>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">City</label>
                                    <div class="col-sm-9">
                                       <select class="form-control" name="City">
                                          <option value="" selected="selected">Select a City</option>
                                          03.
                                          <option value="AL">Birmingham</option>
                                          04.
                                          <option value="AK">Birmingham</option>
                                          05.
                                          <option value="AZ">Montgomery</option>
                                          06.
                                          <option value="AR">Anchorage</option>
                                          07.
                                          <option value="CA">Anchorage</option>
                                          08.
                                          <option value="CO">Phoenix</option>
                                          09.
                                          <option value="CT">Scottsdale</option>
                                          10.
                                          <option value="DE">Tucson</option>
                                          11.
                                          <option value="DC">Anaheim</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">State</label>
                                    <div class="col-sm-9">
                                       <select class="form-control" name="State">
                                          <option value="" selected="selected">Select a State</option>
                                          03.
                                          <option value="AL">Alabama</option>
                                          04.
                                          <option value="AK">Alaska</option>
                                          05.
                                          <option value="AZ">Arizona</option>
                                          06.
                                          <option value="AR">Arkansas</option>
                                          07.
                                          <option value="CA">California</option>
                                          08.
                                          <option value="CO">Colorado</option>
                                          09.
                                          <option value="CT">Connecticut</option>
                                          10.
                                          <option value="DE">Delaware</option>
                                          11.
                                          <option value="DC">District Of Columbia</option>
                                          12.
                                          <option value="FL">Florida</option>
                                          13.
                                          <option value="GA">Georgia</option>
                                          14.
                                          <option value="HI">Hawaii</option>
                                          15.
                                          <option value="ID">Idaho</option>
                                          16.
                                          <option value="IL">Illinois</option>
                                          17.
                                          <option value="IN">Indiana</option>
                                          18.
                                          <option value="IA">Iowa</option>
                                          19.
                                          <option value="KS">Kansas</option>
                                          20.
                                          <option value="KY">Kentucky</option>
                                          21.
                                          <option value="LA">Louisiana</option>
                                          22.
                                          <option value="ME">Maine</option>
                                          23.
                                          <option value="MD">Maryland</option>
                                          24.
                                          <option value="MA">Massachusetts</option>
                                          25.
                                          <option value="MI">Michigan</option>
                                          26.
                                          <option value="MN">Minnesota</option>
                                          27.
                                          <option value="MS">Mississippi</option>
                                          28.
                                          <option value="MO">Missouri</option>
                                          29.
                                          <option value="MT">Montana</option>
                                          30.
                                          <option value="NE">Nebraska</option>
                                          31.
                                          <option value="NV">Nevada</option>
                                          32.
                                          <option value="NH">New Hampshire</option>
                                          33.
                                          <option value="NJ">New Jersey</option>
                                          34.
                                          <option value="NM">New Mexico</option>
                                          35.
                                          <option value="NY">New York</option>
                                          36.
                                          <option value="NC">North Carolina</option>
                                          37.
                                          <option value="ND">North Dakota</option>
                                          38.
                                          <option value="OH">Ohio</option>
                                          39.
                                          <option value="OK">Oklahoma</option>
                                          40.
                                          <option value="OR">Oregon</option>
                                          41.
                                          <option value="PA">Pennsylvania</option>
                                          42.
                                          <option value="RI">Rhode Island</option>
                                          43.
                                          <option value="SC">South Carolina</option>
                                          44.
                                          <option value="SD">South Dakota</option>
                                          45.
                                          <option value="TN">Tennessee</option>
                                          46.
                                          <option value="TX">Texas</option>
                                          47.
                                          <option value="UT">Utah</option>
                                          48.
                                          <option value="VT">Vermont</option>
                                          49.
                                          <option value="VA">Virginia</option>
                                          50.
                                          <option value="WA">Washington</option>
                                          51.
                                          <option value="WV">West Virginia</option>
                                          52.
                                          <option value="WI">Wisconsin</option>
                                          53.
                                          <option value="WY">Wyoming</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">Zip Code</label>
                                    <div class="col-sm-9">
                                       <input type="text" class="form-control" placeholder="Enter Phone number">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">Email</label>
                                    <div class="col-sm-9">
                                       <input type="text" class="form-control" placeholder="Enter email address">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">Phone</label>
                                    <div class="col-sm-9">
                                       <input type="text" class="form-control" placeholder="Enter Zip Code">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">Manager/Associate</label>
                                    <div class="col-sm-9">
                                       <select class="form-control">
                                          <option value="">Associate</option>
                                          <option value="">Manager</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="panel-footer text-right">
                                 <button type="submit" class="btn btn-lg"><i class="fa fa-angle-left"></i> Back</button>
                                 <button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-check"></i> Next</button>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="step3">
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Style Image</label>
                                 <div class="col-sm-9">
                                    <button class="btn btn-md btn-success"><i class="fa fa-picture-o"></i> Upload Image</button>
                                    <div class="row thumb-grid">
                                       <div class="col-xs-6 col-md-3">
                                          <figure>   
                                             <img src="assets/img/styles/hair-1.jpg" width="200" alt=""/>
                                             <a class="close" data-dismiss="alert"></a>
                                          </figure>
                                       </div>
                                       <div class="col-xs-6 col-md-3">
                                          <figure>   
                                             <img src="assets/img/styles/hair-2.jpg" width="200" alt=""/>
                                             <a class="close" data-dismiss="alert"></a>
                                          </figure>
                                       </div>
                                       <div class="col-xs-6 col-md-3">
                                          <figure>   
                                             <img src="assets/img/styles/hair-3.jpg" width="200" alt=""/>
                                             <a class="close" data-dismiss="alert"></a>
                                          </figure>
                                       </div>
                                       <div class="col-xs-6 col-md-3">
                                          <figure>   
                                             <img src="assets/img/styles/hair-4.jpg" width="200" alt=""/>
                                             <a class="close" data-dismiss="alert"></a>
                                          </figure>
                                       </div>
                                       <div class="col-xs-6 col-md-3">
                                          <figure>   
                                             <img src="assets/img/styles/hair-4.jpg" width="200" alt=""/>
                                             <a class="close" data-dismiss="alert"></a>
                                          </figure>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Price</label>
                                 <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter Price for style">
                                 </div>
                              </div>
                              <div class="panel-footer text-right">
                                 <button type="submit" class="btn btn-lg"><i class="fa fa-angle-left"></i> Back</button>
                                 <button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-check"></i> Save</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </main>
      <footer>
         <p> © 2014 Copyright. All Rights Reserved. </p>
      </footer>
      <!-- Bootstrap core JavaScript
         ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
      <script src="assets/js/vendor/jquery-1.11.1.min.js"></script>
      <script src="assets/js/vendor/bootstrap.min.js"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="assets/js/vendor/ie10-viewport-bug-workaround.js"></script>
      <script src="assets/js/vendor/jquery.easypiechart.js"></script>
      <script src="assets/js/vendor/highcharts.js"></script>
      <script src="assets/js/vendor/exporting.js"></script>
      <script src="assets/js/vendor/bootstrap-multiselect.js"></script>
      <script src="assets/js/script.js"></script>
   </body>
</html>