<?php get_header();?>
<center>
<h1>Singular</h1>



<?php if ( have_posts()) : ?>

<div class="posts">
 
    <?php  while(have_posts()) : ?>

    <?php the_post(); ?>

    <div class="posts_post">

    <h2> <?=the_title();?> - <?=get_the_date();?></h2>
    <h2>Author: <a href="<?=get_the_author();?>"><?=the_author_posts_link();?> </a></h2> 
   
    </div>
    <div class="post_content">
    <?=the_content();?>
  

    
    </div>
    
    
<a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
<hr>
 
  
    <?php endwhile; ?>

</div>

  <?php else: ?>
    <h1> kom tillbaka senare!</h1>
  <?php endif; ?>






 </center>  

 <?php get_footer();?>

