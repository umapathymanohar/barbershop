<?php $this->load->view('_blocks/header'); ?>

<div class="small-container">
  <?php echo form_open("auth/register", array('class' => 'form-horizontal'));?>

  <div class="form-group">
      <h4>Sign up to find interesting thing</h4>
      <?php if(!empty($message)) echo '<div id="infoMessage" class="alert alert-warning">  '.$message.'</div>';?>

      <div class="list-group">
          <div class="list-group-item">
            <?php echo form_input($first_name, NULL, 'class="form-control"');?> 
      </div> 
      <div class="list-group-item">
            <?php echo form_input($last_name, NULL, 'class="form-control"');?>
      </div> 

      <div class="list-group-item">
          <?php echo form_input($email, NULL, 'class="form-control"');?> </div> 
          <div class="list-group-item">
           <?php echo form_input($password, NULL, 'class="form-control"');?> </div> 
           <div class="list-group-item">
                <?php echo form_input($password_confirm, NULL, 'class="form-control"');?> </div> 

                <div class="list-group-item">
                 <select name="user_type" class="form-control">
                  <option value="barbershop">Barbershop</option>
                  <option value="barber">Barber</option>
                  <option value="client">Client </option>
            </select> </div> 
      </div>


</div>
<p> 
      <?php echo form_submit(array('name' => 'submit', 'value' => 'Create', 'class' => 'btn btn-lg btn-primary btn-block'));?>
</p>

<div class="list-end">
 <p>Already have an account? </p>
 <p><a href="login" class="btn btn-default btn-lg btn-block">Login</a></p>
</div>

<?php echo form_close();?>



</div>



<?php $this->load->view('_blocks/footer'); ?>

