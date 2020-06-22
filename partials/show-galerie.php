<?php use Opalo\Helpers\InPage; ?>
<?php if ( have_posts() ) : the_post(); ?>

  <div class="container mt-3">
    <div class="row d-flex flex-center galeria__box-row">
      <?php
        //Le especifico que tipo de post va a buscar
        $args = array(
          'post_type' => array( 'galery_album' ),
          'posts_per_page' 	=> 8,
        );
        //Los busca
        $query = new WP_Query( $args );
        // Los itero
        if ( $query->have_posts() ) {
          $counter = 0;
          while ( $query->have_posts() ) {
              $counter++;
              $query->the_post();
              $gallery = get_post_gallery(get_the_ID(),false);
              $content = strip_shortcode_gallery( get_the_content() );
              $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
              if (!$featured_img_url) {
                $featured_img_url = InPage::imgMod('cosa','globos-coloridos.jpg');
              }
          ?>
                <a href="<?=InPage::mod('url_galeria','');?>/#section<?=$counter;?>" class="col-lg-4 col-sm-6 col-12 d-flex flex-center galeria__box">
                  <img class="galeria__img" src="<?= $featured_img_url ?>" alt="globo">
                </a>
          <?php } ?>
        </div>
      </div>
      <div class="w-100 d-flex justify-content-center my-3">
        <a class="featured-products__btn" href="<?= InPage::mod('url_galeria','galeria'); ?>">
          <img class="featured-products__icon" src="<?= InPage::imgMod('productos_destacados_ver_mas','Icono-Boton.svg'); ?>" alt="icon">
          VER MÁS
        </a>
      </div>
    <?php
  }else{
    // no posts found
  }
  // Restore original Post Data
  wp_reset_postdata();
  ?>

<?php else: ?>

  <span class="mb-5 text-normal-up text-center text-color-body">
    <?=InPage::__('others_others_error_in_post_load',"Error in load post")?>
  </span>

<?php endif; rewind_posts(); ?>
