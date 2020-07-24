<!DOCTYPE html>
<?php use Opalo\Helpers\InPage; ?>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <!-- Meta tags here! -->
  <title><?= InPage::pageTitle(); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?= InPage::noticesHandler(); ?>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?=bloginfo('url')?>">Start Bootstrap</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <?= InPage::navMenu('main-menu', 'navbar-nav ml-auto'); ?>
      </div>
    </div>
  </nav>
