<?php /* Template Name: Pagina de 404 */ ?>
<?php use Opalo\Helpers\InPage; ?>
<?php get_header(); ?>

  <div>
    <article>

      <div class="justify-center my-5 pt-5">
        <h2 class="align-center">404</h2>
      </div>
      <center>
        <p class="align-center">
          <?=InPage::__('texto_404_not_found','La pagina que usted intenta buscar no existe!')?>
        </p>
      </center>

    </article>
  </div>

<?php get_footer();?>
