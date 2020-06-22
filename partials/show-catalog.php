<?php use Opalo\Helpers\InPage; ?>
<?php if ( have_posts() ) : the_post(); ?>

<?php
  //Le especifico que tipo de post va a buscar
  $args = array(
    'post_type' => array( 'product' ),
    'posts_per_page' 	=> 6,
  );
  //Los busca
  $query = new WP_Query( $args );
  // Los itero
  if ( $query->have_posts() ) {
    $counter = 0;
    while ( $query->have_posts() ) {
        $counter++;
        $query->the_post();
        global $product;
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $query->post->ID ), 'single-post-thumbnail' );
        if (!$image) {
          $image = InPage::imgMod('home_product','globos-1.jpg');
        }else{
          $image = $image[0];
        }
        $price = $product->get_price();
        if ($price){
          $price = '€'.$price;
        }
    ?>
        <div class="col-xl-4 col-sm-6 col-12">
          <a href="<?= get_permalink($product_id); ?>">
          <img class="featured-products__img" src="<?= $image ?>" alt="globo">
          <h6 class="featured-products__subtitle"><?= $product->name ?>   <?= $price ?></h6>
          <hr class="featured-products__hr" />
          </a>
        </div>   
    <?php 
    }
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
