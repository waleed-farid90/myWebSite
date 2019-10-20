
<?php
// Checking if there are any errors set in the error array and then displaying them.
if (count($errors) > 0) : 

?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>