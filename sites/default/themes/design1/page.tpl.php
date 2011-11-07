<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
 <html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"> 
<head>
<?php print $head ?>
<title><?php print $head_title ?></title>
<?php print $styles ?>
<?php print $scripts ?>
<script type="text/javascript">
	$(function(){
		$('#container').corner();
		$('#photo').jqFancyTransitions({ width: 667, height: 250 });
	});
	$(document).ready(function(){
		$('.zoom').each(function(){$(this).lightBox();});
	});
</script> 
</head>
<body>
	<div id="header">
		<?php if ($logo) { ?><a href="<?php print $front_page ?>" id="logo" title="<?php print t('Home') ?>">
			<?php 
			echo '<img src="'.$logo.'" alt="Logo"/>';
			?>
		</a><?php } ?>
		
		<?php if ($site_slogan) { ?>
			<span id="slogan"><?php echo $site_slogan; ?></span>
		<?php } ?>
	</div>
<div id="container">
		
		<div class="primary-menu">
		<?php
		$menu_name = variable_get('menu_primary_links_source', 'primary-links');
		echo menu_tree($menu_name);
		?>
		</div>
		
	<div id="content">
		<?php print $header ?>
		
		<?php if ($left) { ?><div id="boxes">
		<?php print $left ?>
		</div><?php } ?>
		
		<div id="text">
			  <?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
			  <?php if ($title): print '<h1'. ($tabs ? ' class="with-tabs"' : '') .'>'. $title .'</h1>'; endif; ?>
			  <?php if ($tabs): print ''. $tabs .'</div>'; endif; ?>
			  <?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
			<?php echo $rotator; ?>
			<?php print $content; ?>
		</div>
	</div>
	<br class="clear"/>
</div>
	<div id="footer">
		<div class="left">
			<?php if (isset($secondary_links)) { ?><?php print theme('links', $secondary_links) ?><?php } ?>
		</div>
		<div class="right">
			<?php print $footer_message ?>
		</div>
	</div>
<?php print $closure ?>
</body>
</html>