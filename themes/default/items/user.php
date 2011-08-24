<?php if (is_array($this->items)) {
foreach ($this->items as $item) {

	$this->item = $item;
	
	// Populate some vars
	if ($this->config->items['titles']['enabled'] == TRUE && $item->title != NULL) {
		$content = '<h4>'.$this->link_to($item->title, 'items', 'show', $item->id).' <small>by '.$this->link_to($item->user->username, 'users', 'show', $item->user->id).'</small></h4>';
		$content .= '<p>'.$item->content.'</p>';
	} else {
		$content = '<p>'.$this->link_to($item->user->username, 'users', 'show', $item->user->id).' '.$item->content.'</p>';
	}
	
	// Comment form toggle
	if (count($item->comments) > 0) {
		$this->show_comment_form = TRUE;
	} else {
		$this->show_comment_form = FALSE;
	}
	
?>

  <!-- Begin item -->

  <!-- Content -->
  <?php echo $content; ?>

  <!-- Meta -->
  <?php $this->loadView('items/meta'); ?>

<?php if ($this->config->items['likes']['enabled'] == TRUE) { ?>
  <!-- Likes -->
  <?php $this->loadView('likes/index'); ?>
<?php } ?>

<?php if ($this->config->items['comments']['enabled'] == TRUE) { ?>
  <!-- Comments -->
  <?php $this->loadView('comments/index'); ?>
<?php } ?>

  <!-- Spacer -->
  <p>&nbsp;</p>

  <!-- End item -->

<?php
unset($this->item);
} // end foreach loop
?>

<!--<div class="pagination">
      <ul>
        <li class="prev disabled"><a href="#">&larr; Previous</a></li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li class="next"><a href="#">Next &rarr;</a></li>
      </ul>
    </div>-->

<?php
} // end if is_array
?>