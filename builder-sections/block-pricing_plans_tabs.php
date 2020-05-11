<section class="plans bg-figures-big">
  <div class="block-container">
    <h1 class="plans__heading"><?php the_sub_field('heading'); ?></h1>
    <!--Tabs bgn-->
    <div class="plans__tabs tabs">
      <!--Tabs switchers bgn-->
      <div class="tabs__switcher">
        <div class="tabs__switcher-control">
          <input class="visuallyhidden" id="tab-switch-first" type="radio" name="tab-switcher" value="monthly" checked="">
          <label for="tab-switch-first" data-switch-tab="tab-first">Monthly</label>
        </div>
        <div class="tabs__switcher-control">
          <input class="visuallyhidden" id="tab-switch-second" type="radio" name="tab-switcher" value="annually">
          <label for="tab-switch-second" data-switch-tab="tab-second">Annually</label>
        </div>
      </div>
      <!--Tabs switchers end-->
      <!--Tabs content bgn-->
      <div class="tabs__content">
        <!--First tab bgn-->
        <div class="tabs__tab tabs__tab_active" data-tab="tab-first">
          <div class="plans__cards">
            <!--Plan card (silver) bgn-->
            <?php if (have_rows ('tabs_monthly') ) : ?>
            <?php while ( have_rows('tabs_monthly') ) : the_row() ?>
            <?php get_template_part('builder-sections/subblock', 'tab'); ?>
            <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
        <!--First tab end-->
        <!--Second tab bgn-->
        <div class="tabs__tab" data-tab="tab-second">
          <div class="plans__cards">
            <?php if (have_rows ('tabs_annual') ) : ?>
            <?php while ( have_rows('tabs_annual') ) : the_row() ?>
            <?php get_template_part('builder-sections/subblock', 'tab'); ?>
            <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
        <!--Second tab end-->
      </div>
      <!--Tabs content end-->
    </div>
    <!--Tabs end-->
  </div>
</section>