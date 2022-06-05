<?php require APPROOT . '/views/inc/header.php'; ?>
<!-- start form register  -->
<div class="container-fluid  bg-light">
<div class="row  mb-3">
  <div class="col-md-6 mx-auto">
    <div class="card card-body bg-light mt-5">
      <h2>Create An Account</h2>
      <p>Please fill this form to register with us</p>
      <form action="<?php echo URLROOT; ?>/users/register" method="post">
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
            <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['passworde_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
            <span class="invalid-feedback"><?php echo $data['passworde_error']; ?></span>
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
            <input type="submit" class="btn btn-success btn-block" value="Register">
          </div>
          <div class="col">
            <a href="<?php echo URLROOT; ?>/users/login" class="btn btn-light btn-block">Have an account? Login</a>
          </div>
        </div>
      </form>
    </div>
  </div>
  </div>
<!-- end form register  -->
<?php require APPROOT . '/views/inc/footer.php'; ?>
