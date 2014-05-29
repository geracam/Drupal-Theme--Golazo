<div class="black-header">
  <div class="golazo-user-menu">
    <?php if ($logged_in): ?>
      <?php print render($page['user_menu']); ?>
    <?php else: ?>
      <ul>
        <li class="menu"><a href="<?php base_path(); ?>user/login">Log In</a></li>
      </ul>
    <?php endif; ?>
  </div>
</div>
<div class="golazo-header clearfix">


  <div class="golazo-main-menu">
    <?php print render($page['main_menu']); ?>
  </div>
</div>
<div class="golazo-content-container-div clearfix">
  <?php if ($messages): ?>
    <div id="messages">
      <div class="section clearfix">
        <?php print $messages; ?>
      </div>
    </div>
  <?php endif; ?>
   
  <?php if ($breadcrumb): ?>
    <div id="breadcrumb"><?php print $breadcrumb; ?></div>
  <?php endif; ?>
   
  <h1><?php print $title; ?></h1>
   
  <?php print render($page['content']); ?>
</div>
<div class="golazo-footer">
  <hr />
  <div class="golazo-footer-text">
    &copy; 2013 golazo. All rights reserved.
  </div>
</div>