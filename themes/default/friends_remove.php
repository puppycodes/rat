<a href="#" class="friend" onclick="friend_remove(<?php echo $_SESSION['user']['id']; ?>, <?php echo $user['id']; ?>); return false;"><?php if ($GLOBALS['app']['friends']['asymmetric'] == TRUE) { echo 'Unfollow'; } else { echo 'Remove friend'; } ?></a>