/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document) {

  'use strict';

  // To understand behaviors, see https://drupal.org/node/756722#behaviors
  Drupal.behaviors.my_custom_behavior = {
    attach: function (context, settings) {

      $("#logo_home").insertAfter(".menu-378");

      var longGaleria = $("#page_fotos_galeria .cont_galerias_infinito .view-content").children().length;
      var posiblePages = parseInt(longGaleria/6);
      var pages = 0;
      var module = longGaleria%6;
      var html = "";
      var start = 0;
      var end = 0;
      var content = "";
      var contPages = 0;
      var margin = 0;

      if(module != 0){
      	pages = posiblePages+1;
      }else{
      	pages = posiblePages;
      }

      for(var i=0; i<pages; i++){
      	content += "<div id='pagina"+i+"' class='pagina'>";

      	if(longGaleria <= (i*6)+6){
      		start = i*6;
      		end = longGaleria;
      	}else{
      		start = i*6;
      		end = start+6;
      	}

      	for(var j=start; j<end; j++){
      		var gal = $("#contenedor_Galeria"+(j+1)).html();
      		content += "<div class='contenedor_galeria'>";
      		content += gal;
      		content += "</div>";
      	}

      	content += "</div>";
      }

      $("#page_fotos_galeria .cont_galerias_infinito .view-content").html(content);

      $("#sgte").bind("click", function(event){
        var longGaleria = $("#page_fotos_galeria .cont_galerias_infinito .view-content").children().length;

        contPages++;
        if(contPages < longGaleria){
          margin -= 1020;
          $("#page_fotos_galeria .cont_galerias_infinito").css("margin-left",margin);
        }else{
          contPages = longGaleria-1;
        }

      });

      $("#ant").bind("click", function(event){
        var longGaleria = $("#page_fotos_galeria .cont_galerias_infinito .view-content").children().length;

        contPages--;
        if(contPages >= 0){
          margin += 1020;
          $("#page_fotos_galeria .cont_galerias_infinito").css("margin-left",margin);
        }else{
          contPages = 0;
        }

      });

    }
  };

  

})(jQuery, Drupal, this, this.document);


/*jQuery(document).ready(function() {
	jQuery("#logo_home").insertAfter(".menu-322");
});*/
