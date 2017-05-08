<?php

/**
 * @file
 * Default template implementation to display the value of a field.
 */
?>
<?php $title = 'About the author'; ?>
<?php if (count($items) > 1):
  $title = 'About the authors';
endif; ?>
<h2 class="book_title"><?php print $title; ?></h2>
<?php foreach ($items as $delta => $item): ?>
  <?php print render($item); ?>
<?php endforeach; ?>
