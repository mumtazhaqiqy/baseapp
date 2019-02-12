<div class="panel signin">
  <div class="panel-heading">
    <h1><?= $login['title']?></h1>
    <h4 class="panel-title"><?= $login['welcome']?></h4>
  </div>
  <div class="panel-body">
    <?= message_box('error', TRUE)?>
    <?php echo form_open('','','id="loginForm"'); ?>
      <div class="form-group mb10">
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input type="text" class="form-control" name="identity" placeholder="Enter Username">
        </div>
      </div>
      <div class="form-group nomargin">
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
          <input type="password" class="form-control" name="password" placeholder="Enter Password">
        </div>
      </div><br>
      <?php if ($login['enable_forgot'] ) : ?>
      <div><a href="#" class="forgot">Forgot password?</a></div>
      <?php endif?>
      <div class="form-group">
        <button class="btn btn-success btn-quirk btn-block" type="submit">Sign In</button>
      </div>
    </form>
    <hr class="invisible">
    <div class="form-group">
    <?php if ($login['enable_signup'] ) : ?>
    <a href="signup.html" class="btn btn-default btn-quirk btn-stroke btn-stroke-thin btn-block btn-sign">Not a member? Sign up now!</a>
    <?php endif?>
    </div>
  </div>
</div><!-- panel -->
