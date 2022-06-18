<?php require APPROOT . '/views/inc/header.php'; ?>
      
        <div class="container">
        <form action="<?= URLROOT?>/Users/sendFeedback/<?php echo $data['idm']; ?>" method="post" class="container  mt-5 mb-5">
        <div class="form-floating">
        <textarea class="form-control <?php echo (!empty($data['content_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['content']; ?>"
         name="content" placeholder="Leave a comment here" id="floatingTextarea"
         cols="50" style="height: 12rem;"></textarea>
       
        <span class="invalid-feedback"><?php echo $data['content_error']; ?></span>

        <label for="floatingTextarea"></label>
        </div>
           <div class="form-row d-flex mt-4 mb-4 text-center">
            <div class="col ">
            <input type="submit" class="btn btn-success btn-block" value="send">
             </div>
             </div>
        </form>
     
        </div>
        
<?php require APPROOT . '/views/inc/footer.php'; ?>
