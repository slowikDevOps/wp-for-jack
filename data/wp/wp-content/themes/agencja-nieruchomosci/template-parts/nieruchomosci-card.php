<?php
$price = get_post_meta(get_the_ID(),'cena',true);
$loc = get_post_meta(get_the_ID(),'lokalizacja',true);
?>
<article class="card">
  <a href="<?php the_permalink(); ?>">
    <?php if (has_post_thumbnail()) { the_post_thumbnail('medium'); } else { echo '<img src="https://via.placeholder.com/800x400?text=Brak+zdjecia">'; } ?>
    <div class="body">
      <h2><?php the_title(); ?></h2>
      <div class="meta"><?php echo esc_html($loc); ?></div>
      <div class="offer-price"><?php echo $price ? number_format((int)$price,0,',',' ') . ' PLN' : ''; ?></div>
    </div>
  </a>
</article>
