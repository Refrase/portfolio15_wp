<?php
	$post_type = get_post_type();
	$post_type_obj = get_post_type_object( $post_type );
	$post_type_plur_name = $post_type_obj->labels->name;
	$post_type_archive = get_post_type_archive_link( $post_type ); // Kræver 'Settings' -> 'Has Archive' -> 'True' under CPT UI
	$home_title = 'Show';
?>

<!-- Semihardcoded, da breadcrumb kun bruges på single-x.php sider. Til dybere lag vil man bruge if/else for at tjekke hvilken side man er på -->
<p class="breadc">
	<a href="<?php echo get_home_url(); ?>"><?php echo $home_title; ?></a> /
	<a href="<?php echo $post_type_archive; ?>"><?php echo $post_type_plur_name; ?></a> /
	<?php the_title(); ?>
</p>