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
                           <li  >
                              <a href="/barber/createstep2"    >
                                 <h4>Step 2</h4>
                              </a>
                           </li>
                           <li class="active">
                              <a href="/barber/createstep3" >
                                 <h4>Step 3</h4>
                              </a>
                           </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                        
                           <div class="tab-pane fade in active" id="step3">

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
                                 <label class="col-sm-3 control-label">Style Name</label>
                                 <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter Style Name">                      
                                    <div class="row thumb-grid">
                                        <?php foreach ($styles as $style): ?>
    
                                       <div class="col-xs-12 col-md-4">
                                          <figure>
                                             <img src="/uploads/<?php echo $style->style_image; ?>" width="200" >
                                             <span class="checkmark">
                                             <input type="checkbox" />
                                             <label></label>
                                             </span>
                                             <address>
                                                <h3><?php echo $style->style_name ; ?></h3>
                                                <h2>$ <?php echo $style->style_price ; ?></h2>
                                                </address>
                                          </figure>
                                       </div>
                                         <?php endforeach ?>
                                    </div>
                                    <div class="alert danger fade in" role="alert">
                                       <p class="pull-right">
                                          <!-- <a class="close" data-dismiss="alert"></a> -->
                                          <button type="button" id="register-style" class="btn btn-md btn-danger">Create your Style</button>
                                       </p>
                                       <h4>Results are not found for the above search</h4>
                                       <p>Please create your style here.</p>
                                    </div>
                                 </div>
                              </div>
                              </div>


                              <form id="barber-step-3" class="form-horizontal hide" role="form" action="/barber/style_save" method="POST">

                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Style Name</label>
                                 <div class="col-sm-9">
                                    <input type="text"  data-validation="required" name="style_name"  class="form-control" placeholder="Enter Name for style">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Style Image</label>
                                 <div class="col-sm-9">
                                    <input id="style-image" name="style-image" type="file" multiple=true class="file-loading">
                                    <input id="style-uploaded-image" data-validation="required"  name="style_uploaded_image" type="hidden">
                                 </div>
                              </div>
                
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Price</label>
                                 <div class="col-sm-9">
                                    <input type="text"  data-validation="required"   name="style_price"  class="form-control" placeholder="Enter Price for style">
                                 </div>
                              </div>

                                      <div class="panel-footer text-right">

                      
                                 <button type="submit" class="btn btn-lg btn-info"><i class="fa fa-check"></i> Add Style</button>
                              </div>

                           </form>

                           <hr>
                              <div class="panel-footer text-right">

                                 <button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-check"></i> Save & Exit</button>
                              </div>

                           </div>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </main>
      <?php $this->load->view('_blocks/footer'); ?>