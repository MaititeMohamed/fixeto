<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container-fluid  bg-light pb-4">
<div class="row ">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
        <?php //flash('register_success'); ?>
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="<?php echo URLROOT; ?>/users/login" method="post">
          <div class="form-group">
              <label>Email:<sup>*</sup></label>
              <input type="text" name="Email" class="form-control form-control-lg <?php echo (!empty($data['Email_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['Email']; ?>">
              <span class="invalid-feedback"><?php echo $data['Email_error']; ?></span>
          </div>    
          <div class="form-group">
              <label>Password:<sup>*</sup></label>
              <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['passworde_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
              <span class="invalid-feedback"><?php echo $data['passworde_error']; ?></span>
          </div>
          <div class="form-row  d-flex mt-3">
            <div class="col">
              <input type="submit" class="btn btn-success btn-block" value="Login">
            </div>
            <div class="col">
              <a href="<?php echo URLROOT; ?>/users/register" class="btn btn-light btn-block">No account? Register</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
