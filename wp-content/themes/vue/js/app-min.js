"use strict";var App={};$(function(){App.init()}),App={init:function(){this.imageToBackground(),this.heroCarousel(),this.testimonialsCarousel()},menuTrigger:function(){$(".menu-trigger").on("click",function(i){i.preventDefault(),$("body").toggleClass("menu-active")})},imageToBackground:function(){$(".imgToBg_element").each(function(i,e){var o=$(e).find(".imgToBg_source").attr("src");$(e).css("background-image","url("+o+")")})},imageToBackgroundExpand:function(){var i=this;$(".imgToBgExpand").each(function(e,o){var t=$(o).find(".imgToBgExpand_element"),n=String($(o).find(".imgToBgExpand_source").attr("src"));t.css({"background-image":"url("+n+")"}),i.setElementWidth(o),i.onResize(function(){i.setElementWidth(o)})})},setElementWidth:function(i){var e=$(i).find(".imgToBgExpand_element"),o=$(".container").outerWidth(),t=$(window).outerWidth(),n=t-o,s=n/2,r=$(i).outerWidth(),a=n+r,l=s+r;e.css({width:l,"margin-right":0,"margin-left":0}),$(window).outerWidth()<992&&(e.hasClass("imgToBgExpand_element--left")&&e.css({"margin-right":0,width:a}),e.hasClass("imgToBgExpand_element--right")&&e.css({"margin-left":0,width:a}))},onResize:function(i){$(window).on("resize",function(){i()})},isDesktop:function(){return $(window).outerWidth()>=768},heroCarousel:function(){var i=this;$("#hero").slick({dots:!0,infinite:!0,slidesToShow:1,slidesToScroll:1,autoplay:!0,autoplaySpeed:5e3,speed:800})},officeCarousel:function(){$("#offices").slick({arrows:!1,dots:!0,infinite:!0,speed:600,fade:!0,cssEase:"linear",slidesToShow:1,adaptiveHeight:!0})},testimonialsCarousel:function(){$(".testimonials").slick({dots:!0,infinite:!0,speed:300,arrows:!1,slidesToShow:3,slidesToScroll:1,autoplay:!0,speed:600,responsive:[{breakpoint:1024,settings:{slidesToShow:3,slidesToScroll:3,infinite:!0,dots:!0}},{breakpoint:600,settings:{slidesToShow:2,slidesToScroll:2}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1}}]})}};