<?php require APPROOT . '/views/inc/header.php'; ?>


<!-- start form register  -->
<div class="container-fluid  bg-light   pb-4">
    <div class="row ">
        <div class="col-md-6 mx-auto">
            <div class="card card-body bg-light mt-5">
                <h2>Edit</h2>
                <p>Please fill this form to Edit</p>
                <form action="<?php echo URLROOT; ?>/mechanicals/Editmechanical/<?php echo $data['idm']; ?>" method="post">
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
                    <!-- phone -->
                    <div class="form-group">
                        <label>phone:<sup>*</label>
                        <input type="text" name="phone" class="form-control form-control-lg <?php echo (!empty($data['phone_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['phone']; ?>">
                        <span class="invalid-feedback"><?php echo $data['phone_error']; ?></span>
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
                    <!-- City -->
                    <div class="form-group">
                        <label>City:<sup>*</sup></label>
                        <input type="City" name="City" class="form-control form-control-lg <?php echo (!empty($data['City_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['City']; ?>">
                        <span class="invalid-feedback"><?php echo $data['City_error']; ?></span>
                    </div>
                    <!-- twitter -->
                    <div class="form-group">
                        <label>twitter:<sup>*</sup></label>
                        <input type="twitter" name="twitter" class="form-control form-control-lg <?php echo (!empty($data['twitter_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['twitter']; ?>">
                        <span class="invalid-feedback"><?php echo $data['twitter_error']; ?></span>
                    </div>
                    <!-- instagram -->
                    <div class="form-group">
                        <label>instagram:<sup>*</sup></label>
                        <input type="instagram" name="instagram" class="form-control form-control-lg <?php echo (!empty($data['instagram_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['instagram']; ?>">
                        <span class="invalid-feedback"><?php echo $data['instagram_error']; ?></span>
                    </div>
                    <!-- facebook -->
                    <div class="form-group">
                        <label>facebook:<sup>*</sup></label>
                        <input type="facebook" name="facebook" class="form-control form-control-lg <?php echo (!empty($data['facebook_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['facebook']; ?>">
                        <span class="invalid-feedback"><?php echo $data['facebook_error']; ?></span>
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
</div>
<!-- end form register  -->
<?php require APPROOT . '/views/inc/footer.php'; ?>