
<div class="ptl-box ptl-comment">
  <div class="ptl-comment-container">
    <?php if(!isset($comment_reply)){$comment_reply='no';} ?>
    <?php if($comment_reply == 'no') { ?>
      <span>No comments yet</span>
    <?php } ?>
    <?php if($comment_reply == 'yes') { ?>
	  <?php for ($i=1; $i <= 10; $i++) { ?>
        <div class="ptl-comment-list">
		  <div class="ptl-comment-box">
		    <?php echo $random_keyword[array_rand($random_keyword)]; ?>
		  </div>
		  <div class="ptl-comment-date"><span>00:00</span></div>
		</div>
	  <?php } ?>
    <?php } ?>
  </div>
  <input type="text" class="ptl-comment-field" placeholder="Input comment here"/>
  <button title="Submit" class="btn ptl-comment-button">
    <span class="content_center">
      <?php require ($_SERVER['DOCUMENT_ROOT'] . '/scoutdb/img/icon/send.svg')?>
	</span>
  </button>
</div>