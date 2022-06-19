<?php require APPROOT . '/views/inc/header.php'; ?>

<!-- start feedbacl for mechanical  -->
<div class="container  ">
<div class="row">
<?php foreach ($data['feedbackInfo'] as $feed) : ?>
  <div class="col-sm-6 mt-2 mb-2 ">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">your feedback</h5>
        <p> from :<?= $feed->FirstName ?></p>
        <p class="card-text"> feed :<?= $feed->content ?>.</p>
        <p class="card-text">in :<?= $feed->datefeedback ?></p>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</div>
</div>
<!-- end feedback for mechanical  -->

<?php require APPROOT . '/views/inc/footer.php'; ?>

                                                                   
                                               