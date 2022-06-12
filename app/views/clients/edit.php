<?php require APPROOT . '/views/inc/header.php'; ?>


<!-- start form register  -->
<div class="container-fluid  bg-light   pb-4">
<div class="row ">
  <div class="col-md-6 mx-auto">
    <div class="card card-body bg-light mt-5">
      <h2>Edit</h2>
      <p>Please fill this form to Edit</p>
      <form action="<?php echo URLROOT; ?>/Clients/EditClient/<?php echo $data['idC']; ?>" method="post">
        <div class="form-group">
        <!-- FirstName  -->
            <label>FirstName:<sup>*</label>
            <input type="text" name="FirstName" class="form-control form-control-lg <?php echo (!empty($data['FirstName_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['FirstName']; ?>">
            <span class="invalid-feedback"><?php echo $data['FirstName_error']; ?></span>
        </div> 
        <!-- LastName -->
        <div class="form-group">
            <label>LastName:<sup>*</label>
            <input type="text" name="LastName" class="form-control form-control-lg <?php echo (!empty($data['LastName_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['LastName']; ?>">
            <span class="invalid-feedback"><?php echo $data['LastName_error']; ?></span>
        </div> 
        <!-- Email Address -->
        <div class="form-group">
            <label>Email Address:<sup>*</sup></label>
            <input type="text" name="Email" class="form-control form-control-lg <?php echo (!empty($data['Email_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['Email']; ?>">
            <span class="invalid-feedback"><?php echo $data['Email_error']; ?></span>
        </div>   
        <!-- password -->
        <div class="form-group">
            <label>password:<sup>*</sup></label>
            <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
            <span class="invalid-feedback"><?php echo $data['password_error']; ?></span>
        </div> 
        <!-- Confirm Password -->
        <div class="form-group">
            <label>Confirm Password:<sup>*</sup></label>
            <input type="password" name="confirm_password" class="form-control form-control-lg <?php echo (!empty($data['confirm_password_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['confirm_password']; ?>">
            <span class="invalid-feedback"><?php echo $data['confirm_password_error']; ?></span>
        </div>
        <!-- phone -->
        <div class="form-group">
            <label>phone:<sup>*</label>
            <input type="text" name="phone" class="form-control form-control-lg <?php echo (!empty($data['phone_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['phone']; ?>">
            <span class="invalid-feedback"><?php echo $data['phone_error']; ?></span>
        </div> 
        

        <div class="form-row d-flex mt-3">
          <div class="col ">
            <input type="submit" class="btn btn-success btn-block" value="Edit">
          </div>
        </div>
      </form>
    </div>
  </div>
  </div>
</div>
<!-- end form register  -->
<?php require APPROOT . '/views/inc/footer.php'; ?>
