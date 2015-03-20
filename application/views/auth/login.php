<?php $this->load->view('_blocks/header'); ?>
<!-- Fixed navbar -->
<div class="small-container">
 <?php echo form_open("auth/login", array('class' => 'form-horizontal')); ?>
 
 <div class="form-group">
  <h4>Login to access your account</h4>
  <?php if(!empty($message)) echo '<div id="infoMessage" class="alert alert-warning">  '.$message.'</div>';?>
  <?php $error = (isset($field['name'])) ? form_error($field['name']) : NULL; ?>
  <div class="list-group">
   <div class="list-group-item">
    <?php echo form_input($identity, NULL, 'class="form-control"'); ?>
  </div> 
  <div class="list-group-item">
   <?php echo form_input($password, NULL, 'class="form-control"'); ?>
 </div> 
</div>

</div>
<?php echo form_checkbox('remember', '1', FALSE, 'id="remember"'); ?> <?php echo $this->lang->line('login_remember_label'); ?>
<p> 
  <?php echo form_submit(array('class' => 'btn btn-lg btn-primary btn-block', 'name' => 'login', 'value' => 'Log in')); ?>
</p>

<p><a href="forgot_password"><?php echo lang('login_forgot_password'); ?></a></p>  
<div class="list-end">
 <p>Do not have an account? </p>
 <p><a href="register" class="btn btn-default btn-lg btn-block">Create an account</a></p>
</div>
<?php echo form_close(); ?>
</div>
<?php $this->load->view('_blocks/footer'); ?>
