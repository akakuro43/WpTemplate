<?php get_template_part("parts_Head"); ?>
<body>
  <div class="l-page">
    <?php get_header(); ?>
    <main class="l-contents">
      <?php $slug_name = $post->post_name; ?>
      <h2>single</h2>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
    </main>
    <?php get_footer(); ?>
    <?php get_template_part("parts_Background"); ?>
  </div>
  <?php get_template_part("parts_Scripts"); ?>
</body>
</html>
