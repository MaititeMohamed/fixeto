<!-- header -->
<?php require APPROOT . '/views/inc/header.php'; ?>

<!-- start profile -->

<section class="h-100">
    <div class="h-100">
        <div class="row  h-100">
            <div class="col-lg-12 ">
                <div class="">
                    <div class=" text-white d-flex flex-row" style="background-image: url('<?php echo URLROOT; ?>/public/img/slider/image_01.jpg');background-size: cover; height:220px;">
                        <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                            <img src="<?php echo URLROOT; ?>/public/img/users/image_03.png" alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2" style="width: 150px; z-index: 1">

                        </div>
                        <div class="ms-3" style="margin-top: 130px;">
                            <h5><?= $data['mechanical']->FirstName; ?>&nbsp;<?php echo  $data['mechanical']->LastName ?></h5>
                            <p><?= $data['mechanical']->City; ?></p>
                        </div>
                    </div>
                    <div class="p-4 text-black  d-flex justify-content-center" style="background-color: #f8f9fa;">

                        <div class="row container ">



                            <?php if ($_SESSION['mechanical'] != null) : ?>

                                <div class="col-md-12 col-lg-3   pt-3">
                                    <h2 class="text-md-center text-lg-start text-center "> <button type="button" class="btn btn-danger">Delete</button></h2>

                                </div>
                                <div class="col-md-12 col-lg-3   pt-3">
                                    <!-- start update model  -->
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Update
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Update </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="d-flex">
                                                        <div>
                                                            <form action="<?php echo URLROOT; ?>/users/registerMechanical" method="post">
                                                                <div class="form-group">
                                                                    <!-- FirstName  -->
                                                                    <label>FirstName:<sup>*</label>
                                                                    <input type="text" name="FirstName" class="form-control form-control-lg <?php echo (!empty($data['FirstName_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['mechanical']->FirstName; ?>">
                                                                    <span class="invalid-feedback"><?php echo $data['FirstName_error']; ?></span>
                                                                </div>
                                                                <!-- LastName -->
                                                                <div class="form-group">
                                                                    <label>LastName:<sup>*</label>
                                                                    <input type="text" name="LastName" class="form-control form-control-lg <?php echo (!empty($data['LastName_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['mechanical']->LastName; ?>">
                                                                    <span class="invalid-feedback"><?php echo $data['LastName_error']; ?></span>
                                                                </div>
                                                                <!-- phone -->
                                                                <div class="form-group">
                                                                    <label>phone:<sup>*</label>
                                                                    <input type="text" name="phone" class="form-control form-control-lg <?php echo (!empty($data['phone_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['mechanical']->phone; ?>">
                                                                    <span class="invalid-feedback"><?php echo $data['phone_error']; ?></span>
                                                                </div>
                                                                <!-- Email Address -->
                                                                <div class="form-group">
                                                                    <label>Email Address:<sup>*</sup></label>
                                                                    <input type="text" name="Email" class="form-control form-control-lg <?php echo (!empty($data['Email_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['mechanical']->Email; ?>">
                                                                    <span class="invalid-feedback"><?php echo $data['Email_error']; ?></span>
                                                                </div>
                                                                <!-- password -->
                                                                <div class="form-group">
                                                                    <label>password:<sup>*</sup></label>
                                                                    <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['mechanical']->password; ?>">
                                                                    <span class="invalid-feedback"><?php echo $data['password_error']; ?></span>
                                                                </div>
                                                        </div>
                                                        <div class="ms-4">
                                                            <!-- Confirm Password -->
                                                            <div class="form-group">
                                                                <label>Confirm Password:<sup>*</sup></label>
                                                                <input type="password" name="confirm_password" class="form-control form-control-lg <?php echo (!empty($data['confirm_password_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['mechanical']->confirm_password; ?>">
                                                                <span class="invalid-feedback"><?php echo $data['confirm_password_error']; ?></span>
                                                            </div>
                                                            <!-- City -->
                                                            <div class="form-group">
                                                                <label>City:<sup>*</sup></label>
                                                                <input type="City" name="City" class="form-control form-control-lg <?php echo (!empty($data['City_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['mechanical']->City; ?>">
                                                                <span class="invalid-feedback"><?php echo $data['City_error']; ?></span>
                                                            </div>
                                                            <!-- twitter -->
                                                            <div class="form-group">
                                                                <label>twitter:<sup>*</sup></label>
                                                                <input type="twitter" name="twitter" class="form-control form-control-lg <?php echo (!empty($data['twitter_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['mechanical']->twitter; ?>">
                                                                <span class="invalid-feedback"><?php echo $data['twitter_error']; ?></span>
                                                            </div>
                                                            <!-- instagram -->
                                                            <div class="form-group">
                                                                <label>instagram:<sup>*</sup></label>
                                                                <input type="instagram" name="instagram" class="form-control form-control-lg <?php echo (!empty($data['instagram_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['mechanical']->instagram; ?>">
                                                                <span class="invalid-feedback"><?php echo $data['instagram_error']; ?></span>
                                                            </div>
                                                            <!-- facebook -->
                                                            <div class="form-group">
                                                                <label>facebook:<sup>*</sup></label>
                                                                <input type="facebook" name="facebook" class="form-control form-control-lg <?php echo (!empty($data['facebook_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['mechanical']->facebook; ?>">
                                                                <span class="invalid-feedback"><?php echo $data['facebook_error']; ?></span>
                                                            </div>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="modal-footer d-flex justify-content-center">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end update model  -->
                                </div>
                            <?php else : ?>

                                <div class="col-md-12 col-lg-3  pb-lg-0 pb-4 pt-3 ">
                                    <h2 class="text-md-center text-lg-start text-center "> <button type="button" class="btn btn-primary">REPORT</button></h2>
                                </div>

                                <div class="col-md-12 col-lg-3   pt-3">
                                    <h2 class="text-md-center text-lg-start text-center "> <button type="button" class="btn btn-primary">FEDBACK</button></h2>

                                </div>


                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="card-body p-4 text-black">
                    <div class="mb-5">
                        <p class="lead fw-normal mb-1">About</p>
                        <div class="p-4" style="background-color: #f8f9fa;">
                            <p class="font-italic mb-1">mechacical car</p>
                            <p class="font-italic mb-1">Lives in :&nbsp;<?= $data['mechanical']->City; ?></p>
                            <p class="font-italic mb-0"> phone :&nbsp;<?= $data['mechanical']->phone; ?></p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <p class="lead fw-normal mb-0">YOU CAN FIND ME HERE</p>

                    </div>
                    <div class="row ">
                        <div class="col-12">


                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13498.899852906557!2d-8.517190949999998!3d32.2385713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sma!4v1654264184834!5m2!1sen!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
</section>
























<!-- end profile  -->

<!-- footer -->
<?php require APPROOT . '/views/inc/footer.php'; ?>