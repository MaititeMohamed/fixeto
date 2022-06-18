<?php require APPROOT . '/views/inc/header.php'; ?>

<!-- start message for mechanical  -->
<div class="container  d-flex ">
<?php foreach ($data['messageInfo'] as $message) : ?>

<div class="card mb-3 ms-5 flex-fill" style="max-width:540px;">
  <div class="row g-0">
    
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">your message</h5>
        <p> from :<?= $message->FirstName ?></p>
        <p class="card-text"> message :<?= $message->content ?>.</p>
        <p class="card-text"><small class="text-muted"><p> in :<?= $message->datemessage ?></p></small></p>
      </div>
    </div>
  </div>
</div>

<?php endforeach; ?>
</div>
<!-- end message for mechanical  -->

<?php require APPROOT . '/views/inc/footer.php'; ?>

                                                                   
                                               