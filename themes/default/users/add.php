
<div class="row">
  <div class="span8 columns offset4">

    <form action="<?php echo $this->link_to(NULL, 'users', 'add'); if (isset($_GET['redirect_to'])) { echo '/?redirect_to='.$_GET['redirect_to']; } ?>" method="post">
    
      <?php
      
      // Invite code passsed so include it
      if (isset($this->code)) {
      	echo '<input type="hidden" name="code" value="'.$this->code.'" />';
      }
      
      ?>
      
      <h2 class="center">Signup</h2>
      	
      <table class="center">
        <tr><td class="align_right">Email:</td><td><input type="text" name="email" value="<?php echo $_GET['email']; ?>" /></td></tr>
        <tr><td class="align_right">Username:</td><td><input type="text" name="username" value="<?php echo $_GET['username']; ?>" /></td></tr>
        <tr><td class="align_right">Password:</td><td><input type="password" name="password1" /></td></tr>
        <tr><td class="align_right">Password again:</td><td><input type="password" name="password2" /></td></tr>
        <tr><td></td><td class="align_left"><input type="submit" value="Signup" class="btn" /></td></tr>
      </table>
      	
      <p class="small">Already got a <?php echo $this->config->name ?> account? <a href="login.php<?php if (isset($_GET['redirect_to'])) { echo '/?redirect_to='.$_GET['redirect_to']; } ?>">Login</a> now!</p>
    
    </form>

  </div>
</div>
