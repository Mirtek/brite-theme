<section class="clients">
  <div class="block-container">
    <h2 class="clients__heading"><?php echo get_sub_field('heading'); ?></h2>
<?php if (have_rows('clients_logos') ) { ?>
    <ul class="clients__list">
<?php while (have_rows('clients_logos') ) { ?>
<?php the_row();
      $image1 = "";
      $image2 = "";
      $image1 = get_sub_field('image');
      $image2 = get_sub_field('image_2x');
?>
    <li class="clients__item">
      <?php 
       if ($image1 && $image2) { 
         echo img_srcset_2x($image1, $image2); 
       }  
       elseif ($image1 && !$image2) {
         echo img_srcset($image1);
       }
       
      ?>
    </li>

<?php } //endwhile ?>

<?php } ?>
    </ul>
  </div>
</section>