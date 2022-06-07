<?php

  // Func to get page title
  function page_title() {
    global $__title;
    global $page_title;
    if (isset($__title)) {
      echo $__title;
    }
    else {
      echo $page_title;
    }
  }

  // Func to get active theme
  function active_theme() {
    global $active_theme;
    if ($active_theme == 'Light' ) {
      echo 'light-theme';
    }
    else {
      echo 'dark-theme';
    }
  }

  // Func to get meta title
  function meta_title() {
    global $__meta_title;
    global $meta_title;
    if (isset($__meta_title)) {
      echo $__meta_title;
    }
    else {
      echo $meta_title;
    }
  }

  // Func to get page class
  function page_class() {
    global $__class;
    if (isset($__class)) {
      echo $__class;
    }
    else {
      echo '';
    }
  }

  // Func to get page ID
  function page_id() {
    global $__id;
    if (isset($__id)) {
      echo $__id;
    }
    else {
      echo '';
    }
  }

  // Func to get meta theme-color
  function meta_theme_color() {
    global $meta_theme_color;
    if (isset($meta_theme_color)) {
      echo $meta_theme_color;
    }
    else {
      echo '#0060fe';
    }
  }

  // Func to get meta description
  function meta_description() {
    global $__meta_description;
    global $meta_description;
    if (isset($__meta_description)) {
      echo $__meta_description;
    }
    else {
      echo $meta_description;
    }
  }

  // Func to get meta keyword
  function meta_keywords() {
    global $__meta_keywords;    
    global $meta_keywords;    
    if (isset($__meta_keywords)) {
      echo $__meta_keywords;
    }
    else {
      echo $meta_keywords;
    }
  }