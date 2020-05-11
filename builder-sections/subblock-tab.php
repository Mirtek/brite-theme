<?php 

$data['plan_styling'] = get_sub_field('plan_styling');
$data['section_class'] = get_plans_styling_classes($data['plan_styling']);
$data['btn_class'] = get_plans_btn_styling_classes($data['plan_styling']);

$data['plan_label'] = get_sub_field('plan_label');

$data['plan_discount'] = get_sub_field('plan_discount');

?>

<div class="plan-card <?php echo $data['section_class']; ?>">
  <?php if($data['plan_label']) { ?>
    <div class="plan-card__label"><span><?php echo $data['plan_label']; ?></span></div>
  <?php } ?>
  <h3 class="plan-card__heading"><?php the_sub_field('plan_name'); ?></h3>
  <ul class="plan-card__advantage-list">
    <?php if (have_rows ('plan features') ) : ?>
    <?php while ( have_rows('plan features') ) : the_row() ?>
    <li class="plan-card__advantage-item"><span><?php the_sub_field('feature'); ?></span></li>
    <?php endwhile; ?>
    <?php endif; ?>
  </ul>
  <div class="plan-card__price"><span class="plan-card__price-value"><?php echo the_sub_field('plan_pricing'); ?></span><span class="plan-card__price-text">/user</span></div>
  <?php if ( $data['plan_discount'] ) { ?>
    <div class="plan-card__save"><span><?php echo $data['plan_discount'] ?></span></div>
  <?php } ?>
  <div class="plan-card__btn"><a class="btn <?php echo $data['btn_class']; ?>" href="<?php the_sub_field('button_url') ?>"><?php the_sub_field('button_text'); ?></a></div>
</div>