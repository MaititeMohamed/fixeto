<?php require APPROOT . '/views/inc/header.php'; ?>

<!-- start message for mechanical  -->
<div class="container  ">






<div class="row">
<?php foreach ($data['messageInfo'] as $message) : ?>
  <div class="col-sm-6 mt-2 mb-2">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">your message</h5>
        <p> from :<?= $message->FirstName ?></p>
        <p class="card-text"> message :<?= $message->content ?>.</p>
        <p class="card-text">in :<?= $message->datemessage ?></p>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</div>
</div>
<!-- end message for mechanical  -->

<?php require APPROOT . '/views/inc/footer.php'; ?>

                                                                   
                                               