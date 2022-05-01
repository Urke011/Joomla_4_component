<?php
defined('_JEXEC') or die;
?>
<!--Hello Foos -->
<?php foreach ($this->items as $i => $item) : ?>
    <?php echo $item->name; ?>
    </br>
<?php endforeach; ?>
<!--
The file default.php is the template for rendering the view. In it is the text that we display. At the moment we are putting all the effort into the output of the text "Hello Foos".

-->