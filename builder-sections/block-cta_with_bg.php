<section class="cta bg-figures">
  <div class="block-container">
    <h2><?php echo get_sub_field('heading'); ?></h2>
    <?php       
        $btn_url = get_sub_field('primary_button_url');
        $btn_text = get_sub_field('primary_button_text');
    ?>
    <a class="btn btn_white" href="<?php echo $btn_url; ?>"><?php echo $btn_text ?></a>
  </div>
</section>