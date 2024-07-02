<div id="profile_display" class="relative">
    <?php if(is_user_logged_in()) { ?>
        <?php $current_user = wp_get_current_user(); ?>
      <div id="profile_display_inner">
        <div class="profile_image"></div>
        <div class="profile_data">
          <div class="pr_data_name"><a href="#"><?php echo $current_user->display_name; ?></a></div>
          <div class="pr_data_acc_type"><a href="#">Pro Account</a></div>
          <div class="pr_data_messages"><a href="#"><span>1</span> New Message</a></div>
          <i class="fa fa-bars user_menu_open"></i>
          <i class="fas fa-times user_menu_close" style="display: none"></i>
        </div>
      </div>
    <?php } else { ?>
      <div class="log_in_button"><a href="<?php echo wp_login_url(); ?>">Log In</a></div>
    <?php } ?>
</div>
<div id="profile_display_container" class="hidden"><div class="signout">
	<a href="/wp-login.php?action=logout">Sign Out</a>
	</div>
  <div class="content"><?php get_sidebar('user-menu');?></div>
	<div class="userdata">
		Long text goes here
	</div>

</div>