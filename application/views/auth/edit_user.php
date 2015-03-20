
<?php $this->load->view('_blocks/header'); ?>
<main role="main">
 <div class="row">
  <div class="col-md-8 col-md-offset-2">
   <div class="panel panel-default">
     <div class="panel-heading">
      <h4>My Account</h4>
    </div>

    <div class="panel-body">
      <ul id="myTab" class="nav nav-tabs" role="tablist">
       <li class="active">
        <a href="#step1" role="tab" data-toggle="tab">
         <h4>Personal Info</h4>
       </a>
     </li>

     <li>
      <a href="#step3" role="tab" data-toggle="tab">
       <h4>Order History</h4>
     </a>
   </li>
   <li>
    <a href="#step4" role="tab" data-toggle="tab">
     <h4>Notifications</h4>
   </a>
 </li>
</ul>
<div id="myTabContent" class="tab-content">
 <div class="tab-pane fade in active" id="step1">
  <?php echo form_open(uri_string(), array('class' => 'form-horizontal'));?>

  <?php if(!empty($message)) echo '<div id="infoMessage" class="alert alert-warning"><i class="fa fa-warning"></i> '.$message.'</div>';?>


  <div class="form-group">
   <label class="col-sm-2 control-label">First Name</label>
   <div class="col-sm-10">
    <?php echo form_input($first_name, NULL, 'class="form-control"');?>
  </div>
</div>
<div class="form-group">
 <label class="col-sm-2 control-label">Last Name</label>
 <div class="col-sm-10">
  <?php echo form_input($last_name, NULL, 'class="form-control"');?>
</div>
</div>                              
<div class="form-group">
 <label class="col-sm-2 control-label">Email Address</label>
 <div class="col-sm-10">
  <?php echo form_input($email, NULL, 'class="form-control"');?>
</div>
</div>
<div class="form-group">
 <label class="col-sm-2 control-label">Password: (if changing password)</label>
 <div class="col-sm-10">
   <?php echo form_input($password, NULL, 'class="form-control"');?>

 </div>
</div>

<div class="form-group">
 <label class="col-sm-2 control-label"> Confirm Password: (if changing password)</label>
 <div class="col-sm-10">
   <?php echo form_input($password_confirm, NULL, 'class="form-control"');?>
 </div>
</div>


<div class="form-group">
 <label class="col-sm-2 control-label">Address</label>
 <div class="col-sm-10">
  <textarea class="form-control"></textarea>
</div>
</div>
<div class="form-group">
 <label class="col-sm-2 control-label">Gender</label>
 <div class="col-sm-10">
  <label class="radio-inline">
    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked> Male
  </label>
  <label class="radio-inline">
    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Female
  </label>
</div>
</div>
<div class="form-group">
 <label class="col-sm-2 control-label">Phone</label>
 <div class="col-sm-10">
  <input type="text" class="form-control" placeholder="Enter Phone number">
</div>
</div>

<?php echo form_hidden('id', $user->id);?>
<?php echo form_hidden($csrf); ?>
<div class="panel-footer text-right">
 <button type="submit" class="btn btn-lg"><i class="fa fa-remove"></i> Cancel</button>
 <button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-check"></i> Save</button>
</div>
<?php echo form_close();?>
</div>  
<div class="tab-pane fade in" id="step3">
 <div class="table-responsive">
   <table class="table table-bordered table-striped">
    <thead>
     <tr>
      <th width="30%">Username</th>
      <th>Date</th>
      <th>Time</th>

    </tr>
  </thead>
  <tbody>
   <tr>
    <td>Andrew Matthew</td>
    <td>
     9:00 AM
   </td>
   <td>
     September 29, 2014
   </td>

 </tr>
 <tr>
  <td> John Kripo</td>
  <td>
   9:00 AM
 </td>
 <td>
   September 29, 2014
 </td>

</tr>
<tr>
  <td>Jeffrey Gilbert</td>
  <td>
   9:00 AM
 </td>
 <td>
   September 29, 2014
 </td>

</tr>
<tr>
  <td> Diego Cobalt</td>
  <td>
   9:00 AM
 </td>
 <td>
   September 29, 2014
 </td>

</tr>

</tbody>
</table>
</div>
</div>

<div class="tab-pane fade in" id="step4">
 <div class="panel panel-default">
   <div class="panel-heading"> <strong>You have <span>2</span> notifications</strong> </div>
   <div class="list-group"> 
    <a href="" class="list-group-item">
      <span class="pull-left thumb-sm"> <img src="assets/img/barbers/a0.jpg" alt="..." class="img-circle"> </span> 
      <span class="media-body"> You have got appointment<br> <small class="text-muted">10 minutes ago</small> </span>
    </a> 
    <a href="" class="list-group-item"> <span class="media-body"> Confirmed you appoinment<br> <small class="text-muted">1 hour ago</small> </span> </a> 
  </div>

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
