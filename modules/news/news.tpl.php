<?php
// $Id$
?>
<h1><?php echo $title; ?></h1>
<?php foreach($actus as $actu) :?>
<?php //print_r($actu); ?>
<div class="node-blog-fond" style="padding-bottom:10px;">
  <div class="node-blog-haut">
    <h2><?php print $actu->title; ?></h2>   
     <span class="submitted" style="font-size:10px; margin-bottom:10px; display:block;"><?php print format_date($actu->created); ?></span>
    <p><?php print $actu->body; ?></p>
  </div>
  <div class="node-blog-bas"></div>
</div>
<?php endforeach; ?>