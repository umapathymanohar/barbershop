<?php $this->load->view('_blocks/header'); ?>
      <!-- Begin page content -->
      <main role="main">
         <div class="row">
            <div class="col-md-8 col-md-offset-2">
              
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h4>Tell about your Barber</h4>
                     </div>
                     <div class="panel-body">
                        <ul id="myTab" class="nav nav-tabs" role="tablist">
                           <li >
                              <a href="/barber/create"   >
                                 <h4>Step 1</h4>
                              </a>
                           </li>
                           <li  class="active">
                              <a href="/barber/createstep2"    >
                                 <h4>Step 2</h4>
                              </a>
                           </li>
                           <li>
                              <a href="/barber/createstep3" >
                                 <h4>Step 3</h4>
                              </a>
                           </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                           
                           <div class="tab-pane fade in active" id="step2">

         <?php   $messages = $this->session->userdata('content'); ?>
            <?php   $type = $this->session->userdata('type'); ?>
            <?php if ($type != '') { ?>
                        <div class="row">
                  <div class="col-md-6 col-md-offset-3">
            <?php if ($type == 'success') { ?>

               <div class="alert alert-success fade in">
                       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                       <i class="icon-ok"></i> <?php echo $messages; ?>
                   </div>
            <?php } else { ?>

                   <div class="alert alert-danger fade in"> 
                       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                       <i class="icon-close"></i><?php echo $messages; ?>
                   </div>

                     <?php } ?>
                   </div>
                   </div>
                 
            <?php } 

             $messages=array(
            'content'=>'',          
            'type'=>'',
            );    
 
         $this->session->set_userdata($messages);

            ?>
   
                            <div class="form-horizontal">
                                  <div class="form-group">
                                 <label class="col-sm-3 control-label">Shop Name</label>
                                 <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter Shop Name">                      
                                    <div class="row thumb-grid">
                                        <?php foreach ($shops as $shop): ?>
    
                                       <div class="col-xs-12 col-md-4">
                                          <figure>
                                             <img src="/uploads/<?php echo $shop->shop_image; ?>" width="200" >
                                             <span class="checkmark">
                                             <input type="checkbox" />
                                             <label></label>
                                             </span>
                                             <address>
                                                <h3><?php echo $shop->shop_address_line_1 ; ?></h3>
                                                <?php echo $shop->shop_address_line_2 ; ?><br>
                                               <?php echo $shop->shop_state ; ?>,  <?php echo $shop->shop_state ; ?> <?php echo $shop->shop_zip_code ; ?><br>
                                                <abbr title="Phone">P:</abbr> (123) 456-7890
                                             </address>
                                          </figure>
                                       </div>
                                         <?php endforeach ?>
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
                              </div>




               <form id="create-shop" class="form-horizontal hide" role="form" action="/barber/shop_save" method="POST">
            
      
                              <div class="form-register">
                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">BarberShop Name</label>
                                    <div class="col-sm-9">
                                       <input type="text" data-validation="required" name="shop_name" class="form-control" placeholder="Enter barbershop name">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">Barbershop Image</label>
                                    <div class="col-sm-9">
                                    <input id="shop-image" name="shop_image" type="file" multiple=true class="file-loading">                                    
                                    <input id="shop-uploaded-image" data-validation="required"  name="shop_uploaded_image" type="hidden">
                                       
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">Address 1</label>
                                    <div class="col-sm-9">
                                       <textarea name="shop_address_line_1" data-validation="required" class="form-control"></textarea>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">Address 2</label>
                                    <div class="col-sm-9">
                                       <textarea name="shop_address_line_2" data-validation="required" class="form-control"></textarea>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">City</label>
                                    <div class="col-sm-9">
                                       <select class="form-control" data-validation="required"  name="shop_city" >
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
                                       <select class="form-control" data-validation="required" name="shop_state" >
                                          <option value=""  selected="selected">Select a State</option>
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
                                       <input type="text" id="zipcode" data-validation="required" name="shop_zip_code" class="form-control" placeholder="Enter Phone number">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">Email</label>
                                    <div class="col-sm-9">
                                       <input type="text" data-validation="email" name="shop_email" class="form-control" placeholder="Enter email address">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">Phone</label>
                                    <div class="col-sm-9">
                                       <input type="text" id="phone" data-validation="required" name="shop_phone" class="form-control" placeholder="Enter Zip Code">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">Manager/Associate</label>
                                    <div class="col-sm-9">
                                       <select name="shop_designation" data-validation="required" class="form-control">
                                          <option value="Associate">Associate</option>
                                          <option value="Manager">Manager</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="panel-footer text-right">
                            
                              <a href="#step1" class="btn btn-lg btn-primary ladda-button" role="tab" data-toggle="tab">
                                 <span class="ladda-label"> <i class="fa fa-angle-left"></i> Back</span>
                              </a>

                        
                                 <button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-check"></i> Save</button>

                                 
                              </div>
                    
         
               </form>
                           </div>
                          
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </main>
      <?php $this->load->view('_blocks/footer'); ?>
      