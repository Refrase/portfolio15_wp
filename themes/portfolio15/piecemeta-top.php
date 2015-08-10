<section>

  <?php include( 'breadcrumb.php' ); ?>

  <article class="piece">

 		<h1 class="header"><?php the_title(); ?></h1>
 		<p class="piece__date"><?php the_field( 'date_of_publication' ); ?></p>
    <p class="text piece__text"><?php the_field( 'description' ); ?></p>