<?php
drupal_add_js(drupal_get_path('theme', 'design1') .'/common/jquery-lightbox.js');
drupal_add_css(drupal_get_path('theme', 'design1') .'/common/gallery.css');

$images = $node->field_images;
if (count($images) > 0):
	?>
	<!--<div id="motioncontainer" style="position:relative;overflow:hidden; width:380px; margin:0 auto;"> 
	 <div id="motiongallery" style="position:absolute;left:0;top:0;white-space: nowrap;"> 
	   <div id="trueContainer"> -->
	   <div id="gallery">
	<?php
	/*foreach ($images as $image) {
		echo '<a href="#"  title="'.$image['data']['title'].' | " onclick="document.getElementById(\'maincmotionpic\').setAttribute(\'src\', \''.base_path().imagecache_create_path('photofull', $image['filepath']).'\');return false;">'.theme('imagecache', 'photothumbnail', $image['filepath'], $image['data']['title'], $image['data']['title']).'</a> ';
	}*/
	foreach ($images as $image) {
		echo '<a class="zoom" href="'.base_path().imagecache_create_path('photofull', $image['filepath']).'">'.theme('imagecache', 'photothumbnail', $image['filepath'], $image['data']['title'], $image['data']['title']).'</a>';
	}
	?>
	</div>
	<!--   </div> 
	 </div> 
	</div> -->
	
	<!--<div class="largeview"> 
	<a class="zoom" href="/design1/sites/default/files/imagecache/photofull/7[1].JPG"><?php
	$firstImage = $images[0];
	echo theme('imagecache', 'photofull', $firstImage['filepath'], $firstImage['data']['title'], $firstImage['data']['title'], array('id' => 'maincmotionpic'));
	?></a>
	</div> -->
<?php else: ?>
	<p><?php echo t('No images in album'); ?></p>
<?php endif; ?>