
<?php get_header();?>

<h1>Category.php</h1>













<center>
<h1>Kategorier:




<?= single_cat_title();?></h1>



<h2>
    Inlägg:
<?php 
if(have_posts()){
    while(have_posts()){
   
    the_post();
    the_title();
    echo "</br>";

 }
}
?>

<ul><?php wp_list_categories( array(
    'orderby' => 'name',
    'show_count' => true,
    'exclude' =>array(10)
));?>
</h2>

</center>

<?php get_footer();?>