<?php
global $user;
if (!$user->uid) { ?>

<div id="mobile-header">
<?php if ($site_name): ?>
  <h1 id="site-name-2">
    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><span><?php print $site_name; ?></span></a>
  </h1>
<?php endif; ?>
</div>

<?php } else { ?>
<div id="mobile-header">
<a href="#" class="show_hide" rel="#slidingDiv"><div class="open"></div></a>
  <header id="header" role="banner" class="clearfix">
	<?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>
    <?php if ($site_name || $site_slogan): ?>
      <hgroup id="site-name-slogan">
        <?php if ($site_name): ?>
          <h1 id="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><span><?php print $site_name; ?></span></a>
          </h1>
        <?php endif; ?>
        <?php if ($site_slogan): ?>
          <h2 id="site-slogan"><?php print $site_slogan; ?></h2>
        <?php endif; ?>
      </hgroup>
    <?php endif; ?>

<a href="http://www.openreporter.org/?q=node/add"><div class="create"></div></a>
<?php } ?>

    <?php print render($page['header']); ?>
</header> <!-- /#header -->
</div>


<div id="slidingDiv">
	<table border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td><a href="http://www.openreporter.org/art" target="_parent"><div id="art"></div></a></td>
		<td><a href="http://www.openreporter.org/style" target="_parent"><div id="style"></div></a></td>
		<td><a href="http://www.openreporter.org/music" target="_parent"><div id="music"></div></a></td>
	</tr>
	<tr>
		<td id="ic-title">Art</td>
		<td id="ic-title">Style</td>
		<td id="ic-title">Music</td>
	</tr>
	<tr>
		<td><a href="http://www.openreporter.org/food" target="_parent"><div id="food"></div></a></td>
		<td><a href="http://www.openreporter.org/politics" target="_parent"><div id="pol"></div></a></td>
		<td><a href="http://www.openreporter.org/technology" target="_parent"><div id="tech"></div></a></td>
	</tr>
	<tr>
		<td id="ic-title">Food</td>
		<td id="ic-title">Politics</td>
		<td id="ic-title">Technology</td>
	</tr>
	<tr>
		<td><a href="http://www.openreporter.org/sports" target="_parent"><div id="sports"></div></a></td>
		<td><a href="http://www.openreporter.org/academia" target="_parent"><div id="acdem"></div></a></td>
		<td><a href="http://www.openreporter.org/world" target="_parent"><div id="world"></div></a></td>
	</tr>
	<tr>
		<td id="ic-title">Sports</td>
		<td id="ic-title">Academia</td>
		<td id="ic-title">World</td>
	</tr>
	</table>
</div>	
  <section id="main" role="main" class="clearfix">
    <?php print $messages; ?>
    <a id="main-content"></a>
    <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper clearfix"><?php print render($tabs); ?></div><?php endif; ?>
    <?php print render($page['help']); ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
    <?php print render($page['content']); ?>
  </section> <!-- /#main -->
  
  <?php if ($page['sidebar_first']): ?>
    <aside id="sidebar-first" role="complementary" class="sidebar clearfix">
      <?php print render($page['sidebar_first']); ?>
    </aside>  <!-- /#sidebar-first -->
  <?php endif; ?>

  <?php if ($page['sidebar_second']): ?>
    <aside id="sidebar-second" role="complementary" class="sidebar clearfix">
      <?php print render($page['sidebar_second']); ?>
    </aside>  <!-- /#sidebar-second -->
  <?php endif; ?>

  <footer id="footer" role="contentinfo" class="clearfix">
    <?php print render($page['footer']) ?>
    <?php print $feed_icons ?>
  </footer> <!-- /#footer -->

</div> <!-- /#container -->
