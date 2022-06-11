<?php require APPROOT . '/views/inc/header.php'; ?>
<?php foreach ($data['client'] as $client) : ?>
<section class="" style="background-color: #f4f5f7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-white bg-primary"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem; ">
              <img src="<?php echo URLROOT; ?>/public/img/users/image_03.png" class="rounded-circle img-fluid mt-4" style="width: 100px;" alt="avatar" />

              <h5><?php echo $client->FirstName;?>&nbsp;<?php echo $client->LastName;?></h5>
              <p>Client</p>
              
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    
                    <h6>Email</h6>
                    <p class="text-muted"><?php echo $client->Email;?></p>
                     
                </div>
                  <div class="col-6 mb-3">
                    <h6>Phone</h6>
                    <p class="text-muted"><?= $client->phone;?></p>
                  </div>
                </div>
                <h6>Manage your acount</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3"> 
                  
                  <form class="pull-right" action="<?php echo URLROOT; ?>/Clients/deleteClient/<?= $client->idC;?>" method="post">
                    <input type="submit" class="btn btn-danger" value="Delete Acount">
                  </form>
                  </div>
                   <div class="col-6 mb-3">
                    <button type="button" class="btn btn-success">Update Acount</button>
                  </div>
                </div>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endforeach; ?>

<?php require APPROOT . '/views/inc/footer.php'; ?>


