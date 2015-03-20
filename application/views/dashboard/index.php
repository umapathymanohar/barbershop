<?php $this->load->view('_blocks/header'); ?>
  <main role="main">
         <section class="panel wrapper">
            <div class="row">
               <div class="col-md-6 border-right">
                  <a href="" class="text-muted pull-right"><img src="/assets/img/arrow-right.png" width="40" alt=""></a>
                  <h3>My Appointments</h3>
                  <hr>
                  <ul class="panel-list">
                     <?php  $count = 0; $bgcount = 0; foreach ($appointments as $appointment): ?>
                     <li> <span class="label  <?php echo (++$bgcount % 2) ? "bg-warning" : "bg-info"; ?>">
                        <i class="arrow right <?php echo (++$count % 2) ? "arrow-warning" : "arrow-info"; ?>"></i> <?php echo $appointment->appointment_time; ?></span> <a href=""> <?php echo $appointment->style_name; ?></a>
                     </li>
                         <?php endforeach ?>
                     
                  </ul>
               </div>
               <div class="col-md-6">
                  <div class="row row-sm">
                     <div class="col-md-6 text-center">
                        <span class="chart" data-percent="80"><span class="percent">80</span></span>
                        <h5>Completed</h5>
                     </div>
                     <div class="col-md-6 text-center">
                        <span class="chart pending" data-percent="50"><span class="percent">50</span></span>
                        <h5>Pending</h5>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="row">
            <div class="col-sm-12 col-md-8">
               <div id="users" style="min-width: 100%; height: 430px; margin: 0 auto 20px auto"></div>
            </div>
              <div class="col-sm-12 col-md-4">
               <article class="panel">
                  <div class="panel-heading">
                     <a href="my-appointments.html" class="text-info pull-right">More Appointments</a>
                     <h4>Appointment List</h4>
                  </div>
                  <ul class="list-group">
                      <?php $count = 0;  foreach ($appointments as $appointment): ?>
                     <li class="list-group-item">
                        <span class="badge  <?php echo (++$count % 2) ? "bg-warning" : "bg-info"; ?>"><?php echo $appointment->appointment_time; ?></span>
                        <?php echo $appointment->client_username; ?>
                     </li>
                        <?php endforeach ?>
                  </ul>
               </article>
            </div>
            
         </section>
         <section class="row">
            <div class="col-sm-12 col-md-4">
               <article class="panel transparent">
                  <h4>Barbershop</h4>
                  <ul class="list-group">
                            <?php foreach ($shops as $shop): ?>
                     <li class="list-group-item">
                        <figure class="thumb-md">
                           <img src="/uploads/<?php echo $shop->shop_image; ?>">
                        </figure>
                        <data>
                           <h4><?php echo $shop->shop_name; ?></h4>
                           <address>
                              <p><?php echo $shop->shop_address_line_1 ; ?> ,  <?php echo $shop->shop_address_line_2 ; ?><br> 
                                 <?php echo $shop->shop_state ; ?>  <?php echo $shop->shop_zip_code ; ?>, <?php echo $shop->shop_state ; ?></p>
                              <p> <i class="fa fa-map-marker"></i> Away</b> - <span class="highlights">900 m</span></p>
                           </address>
                        </data>
                     </li>
                           <?php endforeach ?>
                     

                  </ul>
                  <a href="shop" class="btn btn-info btn-addon btn-md   "><i class="fa fa-user"></i> More Shops</a>
                  <a href="shop/create" class="btn btn-primary btn-addon btn-md pull-right "><i class="fa fa-image"></i> Add Barbershop</a>
         
               </article>
            </div>
            <div class="col-sm-12 col-md-4">
               <article class="panel transparent">
                  <h4>Barbers Name</h4>
                  <ul class="list-group avatars">
                      <?php foreach ($barbers as $barber): ?>
                     <li class="list-group-item">
                        <figure class="thumb-sm avatar">
                                    <img src="/uploads/<?php echo $barber->barber_image; ?>">
                           
                           <i class="on right"></i> 
                        </figure>
                        <data>
                           <?php echo $barber->barber_name; ?>
                           <small class="text-muted">Come online and we need talk about the plans that we have discussed</small>
                        </data>
                     </li>
                      <?php endforeach ?>
                     
                  </ul>
                  <a href="barbers" class="btn btn-info btn-addon btn-md   "><i class="fa fa-user"></i> More Barbers</a>
                  <a href="barber/create" class="btn btn-primary btn-addon btn-md pull-right "><i class="fa fa-user"></i> Add Barbers</a>
               </article>
            </div>
          
                        <div class="col-sm-12 col-md-4">
               <article class="panel transparent">
                   <h4>Styles</h4>
                  <ul class="list-group avatars">
                      <?php foreach ($styles as $style): ?>
                     <li class="list-group-item">
                        <figure class="thumb-sm avatar">
                                    <img src="/uploads/<?php echo $style->style_image; ?>">
                           
                           <i class="on right"></i> 
                        </figure>
                        <data>
                           <?php echo $style->style_name; ?>
                           <small class="text-muted">Come online and we need talk about the plans that we have discussed</small>
                        </data>
                     </li>
                      <?php endforeach ?>
                     
                  </ul>
                  <a href="styles" class="btn btn-info btn-addon btn-md   "><i class="fa fa-user"></i> More Styles</a>
                  <a href="styles/create" class="btn btn-primary btn-addon btn-md pull-right "><i class="fa fa-user"></i> Add Styles</a>
               </article>
            </div>
 
         </section>
      </main>
      <?php $this->load->view('_blocks/footer'); ?>