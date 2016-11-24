<!DOCTYPE html>
<html lang="en">
<head>
  <title>HTML5 Goodness</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Vollkorn:regular,italic,bold" rel="stylesheet" type="text/css">
  <!--[if lt IE 9]>
  <script src="js/html5.js"></script>
  <script src="js/IE9.js"></script>
  <![endif]-->
</head>
<body>
<div id="headerwrap">
  <header id="mainheader" class="bodywidth clear"> <?php if ($logo): ?> <img src="<?php print $logo; ?>" alt="" class="logo"> <?php endif; ?>
    <hgroup id="websitetitle">
      <?php if ($site_name): ?>
      <h1><?php print $site_name; ?></h1>
      <?php endif; ?>
      <?php if ($site_slogan): ?>
      <h2><?php print $site_slogan; ?></h2>
      <?php endif; ?>
    </hgroup>
    <?php print render($page['header']); ?>
     <nav>
       <?php if ($main_menu): ?>
        <?php print theme('links__system_main_menu', array(
            'links' => $main_menu,
            'attributes' => array(
                'id' => 'main-menu-links',
                'class' => array('links', 'clearfix'),
            ),
            'heading' => array(
                'text' => t('Main menu'),
                'level' => 'h2',
                'class' => array('element-invisible'),
            ),
        )); ?>
       <?php endif; ?>
      </nav>
  </header>
  <?php print render($page['help']); ?>
</div>
<aside id="introduction" class="bodywidth clear">
  <?php if ($page['site_left_intro']): ?>
  <div id="introleft">
    <?php print render($page['site_left_intro']); ?>
  </div>
  <?php endif; ?>
  <?php if ($page['site_right_quote']): ?>
  <blockquote id="introquote">
  <?php print render($page['site_right_quote']); ?>
  </blockquote>
  <?php endif; ?>

</aside>
<div id="maincontent" class="bodywidth clear">
  <div id="aboutleft">
  <?php print render($page['content']); ?>
  </div>
  <section id="articlesright">
    <?php if ($page['page_article_right']): ?>
    <article>
      <?php print render($page['page_article_right']); ?>
    </article>
    <?php endif; ?>
  </section>
</div>
<div id="footerwrap">
  <footer id="mainfooter" class="bodywidth clear">
    <nav class="clear">
      <?php if ($secondary_menu): ?>
        <?php print theme('links__system_secondary_menu', array(
            'links' => $secondary_menu,
            'attributes' => array(
                'id' => 'secondary-menu-links',
                'class' => array('links', 'inline', 'clearfix'),
            ),
            'heading' => array(
                'text' => t('Secondary menu'),
                'level' => 'h2',
                'class' => array('element-invisible'),
            ),
        )); ?>
      <?php endif; ?>
    </nav>
    <?php print render($page['footer_menu']); ?>
    <p class="copyright"><?php print render($page['copyright']); ?></p>
  </footer>
</div>
</body>
</html>
