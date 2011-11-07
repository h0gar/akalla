<?php
if($teaser) {
?>
<div class="node-blog-fond" style="border-bottom:1px solid #fff; padding-bottom:10px;">
  <div class="node-blog-haut">
    <?php echo l('<h2>'.$node->title.'</h2>', 'node/'.$node->nid, array('html' => true)); ?>
     <span class="submitted" style="font-size:10px; margin-bottom:10px; display:block;"><?php print format_date($actu->created); ?></span>
    <p><?php print $node->teaser; ?></p>
  </div>
  <div class="node-blog-bas"></div>
</div>
<?php
}
else {
?>
<div class="node-blog-fond" style="border-bottom:1px solid #fff; padding-bottom:10px;">
  <div class="node-blog-haut">
     <span class="submitted" style="font-size:10px; margin-bottom:10px; display:block;"><?php print format_date($actu->created); ?></span>
    <p><?php print $node->body; ?></p>
  </div>
  <div class="node-blog-bas"></div>
</div>
<?php
}
