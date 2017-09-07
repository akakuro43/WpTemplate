<?php get_header(); ?>

<?php $slug_name = $post->post_name; ?>
<main class="content <?php echo $slug_name; ?>">
<?php while ( have_posts() ) : the_post(); ?>
  <?php the_content(); ?>
<?php endwhile; ?>

<!-- /.content --></main>

<?php get_footer(); ?>
