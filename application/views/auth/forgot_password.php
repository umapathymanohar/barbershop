<?php $this->load->view('_blocks/header'); ?>
 


      <div class="small-container">
        <?php echo form_open("auth/forgot_password", array('class' => 'form-horizontal'));?>
          <div class="form-group">
            <h4>Forgot your password ?</h4>

            <?php if(!empty($message)) echo '<div id="infoMessage" class="alert alert-warning"> '.$message.'</div>';?>

                    <div class="list-group">
                      <p>Not to worry. Just enter your email address below and we'll send you an instruction email for recovery.</p>
                     <div class="list-group-item">
                     	<?php echo form_input($email, NULL, 'class="form-control"');?>
                       </div> 
                     
                     </div>

                                    </div>
                                    <p>
                                    <?php echo form_submit(array('class' => 'btn btn-lg btn-primary btn-block', 'name' => 'send', 'value' => 'Reset'));?>
                                     </p>
                                   
                                   
                              

        <?php echo form_close();?>

             </div>
<?php $this->load->view('_blocks/footer'); ?>
