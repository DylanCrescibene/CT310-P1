

<?php if(isset($_SESSION["loggedIn"])){ ?>

<div class="comment-box rounded">
  <div class="title-box">
    <h4>Comment Box</h4>
  </div>
  <div class="comment-section">
    <p>Leave a Comment!</p>
    <?php echo "<p>logged in as [" .$_SESSION["sessionUser"] . "]</p>"?>
  </div>
  <form class="form-inline" role="form">
    <div class="form-group">
      <input class="form-control" type="text" placeholder="Your Comments" />
    </div>
    <div class="form-group">
      <button class="btn btn-defualt">Add Comment</button>
    </div>
  </form>
  
</div>

<?php }else { ?>
  <p style="text-align: center"> <small>[You must log in to leave a comment] </small></p>

<?php } ?>
