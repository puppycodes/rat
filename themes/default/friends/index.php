<?php if ($this->user->id != $_SESSION['user']['id']) { ?>
<span id="friends_<?php echo $this->user->id; ?>">
<?php if (empty($_SESSION['user'])) { ?>
<a href="login.php?redirect_to=/<?php echo $this->user->username; ?>" class="friend"><?php if ($this->config->friends['asymmetric'] == TRUE) { echo 'Follow'; } else { echo 'Add friend'; } ?></a>
<?php } else {

	if (Friend::check($_SESSION['user']['id'], $this->user->id) == TRUE) {
		$this->loadView('friends/remove');
	} else {
		$this->loadView('friends/add');
	}
	
} ?>
</span>
<?php } ?>