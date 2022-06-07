/*
- ------------------------------------------------------------------------ -
* Template Name    : Bueno | Responsive Bootstrap 4 Multipurpose Template  * 
* Author           : Nifty Theme - Osama Bakri                             *
* Version          : 1.3.0                                            		 *
* Created          : March 2019                                       		 *
* File Description : JavaScript file of the template                    	 *
- ------------------------------------------------------------------------ -

--------------------------------------------------------------------------*/

/*global WOW, window, jQuery */

(function ($) {

  'use strict';

  // ==== Navbar ==== //
  // Toggle Nav On Medium and Small devices
  $("#toggle-nav").on('click', function () {
    if ($(window).width() < 992) {
      $(this).toggleClass('clicked');
      $('nav').toggleClass('open');
      $('body').toggleClass('nav-open');
    } else {
      $(this).removeClass('clicked');
      $('nav').removeClass('open');
      $('body').removeClass('nav-open');
    }
  });
  
  $(window).on('resize', function () {
    if ($(document).width() > 991) {
      // Remove Nav Class
      $('#toggle-nav').removeClass('clicked');
      $('nav').removeClass('open');
      $('body').removeClass('nav-open');
    }
  });

  // Show Dropdown Menu in Medium & Small Devices
  $('.nav-contain ul li.dropdown').on('click', function () {
    if ($(window).width() < 992) {
      $(this).addClass('active').siblings().removeClass('active');
      $(this).find('ol').slideDown().parents('.dropdown').siblings().find('ol').slideUp();
    }
  });

  // Collapse Dropdown Menu
  $(document).mouseup(function (e) {
    if ($(window).width() < 992) {
      var dropdownLi = $(".nav-contain ul li.dropdown");
      // if the target of the click isn't the container nor a descendant of the container
      if (!dropdownLi.is(e.target) && dropdownLi.has(e.target).length === 0) {
        dropdownLi.removeClass('active');
        dropdownLi.find('ol').slideUp();
      } else {
        return false;
      }
    }
  });

  $(window).on('resize', function () {
    // Collapse Dropdown Menu
    if ($(window).width() > 991.98) {
      if ($('.nav-contain ul li.dropdown ol').slideDown()) {
        $(this).slideUp()
      }
    }
  });    

}(jQuery));
