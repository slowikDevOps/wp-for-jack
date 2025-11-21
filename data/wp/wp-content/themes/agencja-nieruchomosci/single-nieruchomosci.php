<?php get_header(); ?>
<div class="container single">
  <?php while (have_posts()) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <div class="meta">
      <p><strong>Cena:</strong> <?php echo number_format((int)get_post_meta(get_the_ID(),'cena',true),0,',',' '); ?> PLN</p>
      <p><strong>Powierzchnia:</strong> <?php echo esc_html(get_post_meta(get_the_ID(),'powierzchnia',true)); ?> m²</p>
      <p><strong>Lokalizacja:</strong> <?php echo esc_html(get_post_meta(get_the_ID(),'lokalizacja',true)); ?></p>
      <p><strong>Pokoje:</strong> <?php echo esc_html(get_post_meta(get_the_ID(),'pokoje',true)); ?></p>
    </div>

    <div class="featured">
      <?php if (has_post_thumbnail()) the_post_thumbnail('large'); ?>
    </div>

    <div class="content">
      <?php the_content(); ?>
    </div>
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>
