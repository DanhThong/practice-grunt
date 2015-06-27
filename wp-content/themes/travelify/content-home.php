<?php
/**
 * This file displays page with right sidebar.
 *
 */
?>

<?php
   /**
    * travelify_before_primary
    */
   do_action( 'travelify_before_primary' );
?>

<div id="primary-home" class="no-margin-left">
   <?php
      /**
       * travelify_before_loop_content
         *
         * HOOKED_FUNCTION_NAME PRIORITY
         *
         * travelify_loop_before 10
       */
      do_action( 'travelify_before_loop_content' );

      /**
       * travelify_loop_content
         *
         * HOOKED_FUNCTION_NAME PRIORITY
         *
         * travelify_theloop 10
       */
    ?>
    <h2 class="page-title home-title">Khám phá các địa điểm du lịch</h2>
    <?php
      travel_food_home_posts(6);

      /**
       * travelify_after_loop_content
         *
         * HOOKED_FUNCTION_NAME PRIORITY
         *
         * travelify_next_previous 5
         * travelify_loop_after 10
       */
      do_action( 'travelify_after_loop_content' );
   ?>
   <div class="clearfix"></div>
    <h2 class="page-title home-title">Ngon & Lành</h2>
    <?php
      travel_food_home_posts(14);

      /**
       * travelify_after_loop_content
         *
         * HOOKED_FUNCTION_NAME PRIORITY
         *
         * travelify_next_previous 5
         * travelify_loop_after 10
       */
      do_action( 'travelify_after_loop_content' );
   ?>
</div><!-- #primary -->

<?php
   /**
    * travelify_after_primary
    */
   do_action( 'travelify_after_primary' );
   /*
?>

<div id="secondary">
    <?php get_sidebar( 'right' ); ?>
    <h2 class="page-title home-title">Cẩm nang du lịch</h2>
    <?php echo do_shortcode("[menu_category]");?>
</div><!-- #secondary -->
