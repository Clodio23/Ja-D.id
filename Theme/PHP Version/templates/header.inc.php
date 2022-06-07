<!DOCTYPE html>
<html lang="en">
<head>
  <!-- meta -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="theme-color" content="<?php meta_theme_color(); ?>">
  <meta name="title" content="<?php meta_title(); ?>">
  <meta name="description" content="<?php meta_description(); ?>">
  <meta name="keywords" content="<?php meta_keywords(); ?>">
  <meta name="language" content="en">
  <link rel="shortcut icon" href="assets/images/theme/favicon.png" type="image/x-icon">
  <!-- link -->
  <link rel="stylesheet" href="assets/css/bundle.min.css">
  <link rel="stylesheet" href="assets/css/fonts.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/templates.css">

  <!-- 404's css files -->
  <?php if (isset($__class) && $__class == '404-page'): ?>
    <link rel="stylesheet" href="assets/css/pages/404.css">
  <?php endif; ?>

  <!-- abuse's css files -->
  <?php if (isset($__class) && $__class == 'abuse-page'): ?>
    <link rel="stylesheet" href="assets/css/pages/abuse.css">
  <?php endif; ?>

  <!-- dedi-servers's css files -->
  <?php if (isset($__class) && $__class == 'dedi-page'): ?>
    <link rel="stylesheet" href="assets/css/pages/dedi-servers.css">
  <?php endif; ?>

  <!-- domains's css files -->
  <?php if (isset($__class) && $__class == 'domains-page'): ?>
    <link rel="stylesheet" href="assets/css/pages/domains.css">
  <?php endif; ?>

  <!-- index's css files -->
  <?php if (isset($__class) && $__class == 'index-page'): ?>
    <link rel="stylesheet" href="assets/css/index.css">
  <?php endif; ?>

  <!-- login's css files -->
  <?php if (isset($__class) && $__class == 'login-page'): ?>
    <link rel="stylesheet" href="assets/css/pages/login.css">
  <?php endif; ?>

  <!-- register's css files -->
  <?php if (isset($__class) && $__class == 'register-page'): ?>
    <link rel="stylesheet" href="assets/css/pages/register.css">
  <?php endif; ?>

  <!-- shared-hosting's css files -->
  <?php if (isset($__class) && $__class == 'shared-hosting-page'): ?>
    <link rel="stylesheet" href="assets/css/pages/shared-hosting.css">
  <?php endif; ?>

  <!-- terms's css files -->
  <?php if (isset($__class) && $__class == 'terms-page'): ?>
    <link rel="stylesheet" href="assets/css/pages/terms.css">
  <?php endif; ?>

  <!-- vps's css files -->
  <?php if (isset($__class) && $__class == 'vps-page'): ?>
    <link rel="stylesheet" href="assets/css/pages/vps.css">
  <?php endif; ?>
    
  <!-- title -->
  <title><?php page_title(); ?></title>
</head>
<body class="position-relative <?php page_class(); ?> <?php active_theme(); ?>" id="<?php page_id(); ?>">