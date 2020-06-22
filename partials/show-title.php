<?php use Opalo\Helpers\InPage; ?>
<?php if ( have_posts() ) : the_post(); ?>

  <?php the_title(); ?> <!-- Page Content -->

<?php else: ?>

  <span class="mb-5 text-normal-up text-center text-color-body">
    <?=InPage::__('others_others_error_in_post_load',"Error in load post")?>
  </span>

<?php endif; rewind_posts(); ?>
