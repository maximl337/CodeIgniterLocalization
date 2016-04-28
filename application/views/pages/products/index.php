
<ul>
	
	

<?php 
	if(!empty($products)):
		foreach($products as $product):
?>
		
	
	<li> <?php echo $product; ?> </li>
	

<?php
		endforeach;
	endif;
?>

</ul>