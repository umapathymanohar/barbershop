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
                                 <li class="active" >
                              <a href="/barber/create"   >
                                 <h4>Step 1</h4>
                              </a>
                           </li>
                           <li  >
                              <a href="/barber/createstep2"    >
                                 <h4>Step 2</h4>
                              </a>
                           </li>
                           <li >
                              <a href="/barber/createstep3" >
                                 <h4>Step 3</h4>
                              </a>
                           </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                           <div class="tab-pane fade in active" id="step1">


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

                               <form id="barber-step-1" class="form-horizontal" role="form" action="/barber/save" method="POST">
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Barber Name</label>
                                 <div class="col-sm-9">
                                    <input type="text"  id="" name="barber_name" data-validation="length" data-validation-length="4-50" class="form-control" placeholder="Enter barber name" value=" ">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Barber Image</label>
                                 <div class="col-sm-9">
                                    <input id="barber-image" name="barber_image" type="file" multiple=true class="file-loading">                                    
                                    <input id="barber-uploaded-image" data-validation="required"  name="barber_uploaded_image" type="hidden">                                    
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Gender</label>
                                 <div class="col-sm-9">
                                    <label class="radio-inline">
                                    <input type="radio" name="gender" id="inlineRadio1" value="option1" checked> Male
                                    </label>
                                    <label class="radio-inline">
                                    <input type="radio" name="gender" id="inlineRadio2" value="option2"> Female
                                    </label>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Phone</label>
                                 <div class="col-sm-9">
                                    <input type="text"   name="phone" class="form-control" id="phone" data-validation="length" data-validation-length="min14" placeholder="Enter Phone number">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Email</label>
                                 <div class="col-sm-9">
                                    <input type="text" class="form-control"   name="email"  data-validation="email"  placeholder="Enter email address">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Primary Preference</label>
                                 <div class="col-sm-9">
                                    <select class="form-control"    name="primary_preference" >
                                        <option value="Afro-American">Afro-American</option>
                                       <option value="American">American</option>
                                       <option value="Afro-American">Afro-American</option>
                                       <option value="Latino ">Latino </option>
                                       <option value="Caucasian">Caucasian</option>
                                       <option value="Asian">Asian</option>
                                    </select>   
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Secondary Preference</label>
                                 <div class="col-sm-9">
                                    <select  multiple="multiple" class="form-control"    name="secondary_preference">
                                       <option value="Afro-American">Afro-American</option>
                                       <option value="American">American</option>
                                       <option value="Afro-American">Afro-American</option>
                                       <option value="Latino ">Latino </option>
                                       <option value="Caucasian">Caucasian</option>
                                       <option value="Asian">Asian</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="panel-footer text-right"> 
                                 <button id="barber_save_step1" class="btn btn-lg btn-primary ladda-button"  type="submit"><span class="ladda-label"> <i class="fa fa-check"></i>Save & Proceed</span></button>                              
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