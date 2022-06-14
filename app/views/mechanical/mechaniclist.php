<?php require APPROOT . '/views/inc/header.php'; ?>

<!-- start card mechanical   -->
<div class="container-fluid " style="background-color: #eee;">
    <div class="container p-4  ">
        <!-- --- start card--- -->
        
                <div class="row d-flex  h-100 ">
                
                <?php foreach ($data['Allmechanical'] as $mechanical) : ?>
                    <div class="col-md-12 col-lg-4">
                   
                        <div class="card mb-4" style="border-radius: 15px;">
                            <div class="card-body text-center">
                                <div class="mt-3 mb-4">
                                    <img src="<?php echo URLROOT; ?>/public/img/users/image_03.png" class="rounded-circle img-fluid" style="width: 100px;" />
                                </div>
                                <h4 class="mb-2"><?= $mechanical->FirstName; ?>&nbsp;<?php echo  $mechanical->LastName ?></h4>
                                <p class="text-muted mb-4">2KM <span class="mx-2">|</span> <span>3min</span></p>
                                <div class="mb-4 pb-2">
                                
                                    <a href="https://www.facebook.com/<?=$mechanical->facebook?>"  class="btn btn-outline-primary btn-floating" target="_blank" rel="noopener noreferrer">
                                    <i class="fab fa-facebook-f fa-lg"></i>
                                    </a>
                                    
                                    <a href="https://twitter.com/<?=$mechanical->twitter?>"  class="btn btn-outline-primary btn-floating" target="_blank" rel="noopener noreferrer">
                                    <i class="fab fa-twitter fa-lg"></i>
                                    </a>
                                   
                                    <a href="https://www.instagram.com/<?=$mechanical->instagram?>"  class="btn btn-outline-primary btn-floating" target="_blank" rel="noopener noreferrer">
                                    <i class="fab fa-instagram fa-lg"></i>
                                    </a>
                                </div>

                                <div class="d-flex justify-content-center mb-2">
                                <button type="button" class="btn btn-primary">  MESSAGE </button>
                                <form class="pull-right" action="<?php echo URLROOT; ?>/mechanicals/mechanicalprofileByid/<?= $mechanical->idm; ?>" method="post">
                                 <input type="submit" class="btn btn-primary ms-2 ms-sm-1" value="Profile">
                               </form>
                                </div>
                            </div>
                        </div>
                    

                    </div>
                    <?php endforeach; ?>

                  
                </div>
                
        <!-- --- end card-- -->
        <div class="text-center">
        <button type="button" class="btn btn-primary ">  show mor </button>

        </div>
    </div>
</div>
<!-- end card mechanical   -->
<?php require APPROOT . '/views/inc/footer.php'; ?>