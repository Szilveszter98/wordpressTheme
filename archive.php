<?php get_header();?>
<center>
<h1>Archive.php</h1>


<?php the_archive_title('<h1 class="page-title">', '</h1>');
        the_archive_description('<div class="taxonpmy-description">', '</div>');


?>

<?php if ( have_posts()) : ?>

<div class="posts">
 
    <?php  while(have_posts()) : ?>

    <?php the_post(); ?>

    <div class="posts_post">

     <?=get_the_date();?>
 
    </div>
    
    
    
<h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>


  
    <?php endwhile; ?>

</div>

  <?php else: ?>
    <h1> kom tillbaka senare!</h1>
  <?php endif; ?>

  </center>


<?php get_footer();?>