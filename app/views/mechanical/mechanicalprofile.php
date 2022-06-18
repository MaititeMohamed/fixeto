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
                                    <form class="pull-right" action="<?php echo URLROOT; ?>/mechanicals/deletemechanical/<?= $data['mechanical']->idm; ?>" method="post">
                                        <input type="submit" class="btn btn-danger" value="Delete Acount">
                                    </form>
                                </div>
                                <div class="col-md-12 col-lg-3   pt-3">
                                    <a class="btn btn-success" href="<?php echo URLROOT; ?>/mechanicals/Editmechanical/<?= $data['mechanical']->idm; ?>">Update Acount</a>

                                </div>
                                <div class="col-md-12 col-lg-3   pt-3">
                                    <!-- start model   -->

                                    <a href="<?php echo URLROOT; ?>/mechanicals/message/<?= $data['mechanical']->idm; ?>" type="button" class="btn btn-primary position-relative">
                                        message
                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                            <?= $data['numberOfMessage']->Numbermessage ?>

                                        </span>
                                    </a>

                                </div>
                                <div class="col-md-12 col-lg-3   pt-3">
                                    <!-- start model   -->

                                    <a href="<?php echo URLROOT; ?>/mechanicals/feedbackinfo/<?= $data['mechanical']->idm; ?>" type="button" class="btn btn-primary position-relative">
                                        feedback

                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                            2

                                        </span>
                                    </a>

                                </div>
                            <?php else : ?>

                                <div class="col-md-12 col-lg-3  pb-lg-0 pb-4 pt-3 ">
                                    <!-- <h2 class="text-md-center text-lg-start text-center "> <button type="button" class="btn btn-primary">REPORT</button></h2> -->
                                    <a href="<?php echo URLROOT; ?>/Users/sendreport/<?= $data['mechanical']->idm; ?>" class="btn btn-primary ms-2 ms-sm-1">REPORT</a>

                                </div>

                                <div class="col-md-12 col-lg-3   pt-3">
                                    <!-- <h2 class="text-md-center text-lg-start text-center "> <button type="button" class="btn btn-primary">FEDBACK</button></h2> -->
                                    <a href="<?php echo URLROOT; ?>/Users/sendFeedback/<?= $data['mechanical']->idm; ?>" class="btn btn-primary ms-2 ms-sm-1">FEDBACK</a>

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