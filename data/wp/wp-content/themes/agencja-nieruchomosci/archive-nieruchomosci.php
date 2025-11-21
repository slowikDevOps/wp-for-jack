<?php get_header(); ?>
<div class="container">
  <h1>Nieruchomości</h1>
  <div class="nieruchomosci-grid">
    <?php if (have_posts()) : while (have_posts()) : the_post();
      get_template_part('template-parts/nieruchomosci-card');
    endwhile; else: ?>
      <p>Brak ofert.</p>
    <?php endif; wp_reset_postdata(); ?>
  </div>
</div>
<?php get_footer(); ?>
