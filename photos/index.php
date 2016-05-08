<!DOCTYPE html>
<html lang="en">
    <head>
		  <meta charset="UTF-8"/>
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		  <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Galeria de Fotos</title>

      <link rel="shortcut icon" href="../favicon.ico">
      <link rel="stylesheet" type="text/css" href="../bower_components/GammaGallery/css/style.css"/>

      <link href="../bower_components/PACE/themes/black/pace-theme-center-circle.css" rel="stylesheet" />

      <script src="../bower_components/GammaGallery/js/modernizr.custom.70736.js"></script>
		  <noscript>
        <link rel="stylesheet" type="text/css" href="../bower_components/GammaGallery/css/noJS.css"/>
      </noscript>
		  <!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->

      <style type="text/css">
        h1.header-fixed {
          color: #bfbfbf;
          text-shadow: 2px 2px 2px rgba(0, 0, 0, 1);
          position: fixed;
        }

        h1.header-fixed:hover {
          color: #dbdbdb;
          text-shadow: 3px 3px 3px rgba(0, 0, 0, 1);
        }

        h1.scroll {
          position: absolute;
          top: 610px;
        }

      </style>

    </head>
    <body>
      <div class="container">
        <div style="position: fixed; top: 0px; left: 0px; width: 100%; height: 100%"
             data-vide-bg="../video/carolerafa"
             data-vide-options="position: 0% 0%, muted: false">
        </div>

		    <div class="main">
  				<header class="clearfix">

  					<h1 class="header-fixed">Carol e Rafa <span id="typed"></span></h1>
            <span class="fa fa-caret-right fa-lg"></span>

  					<div class="support-note">
  						<span class="note-ie">
                Desculpe, parece que seu navegador é compativel.
                Tente acessar esta página com <a href="https://www.google.com.br/chrome/browser/desktop/">este</a>.
              </span>
  					</div>

            <br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br>

  				</header>

  				<div class="gamma-container gamma-loading" id="gamma-container">

  					<ul class="gamma-gallery">
              <?php for ($index=1; $index < 781; $index ++) { ?>

                <?php $currentURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

                <li>
                  <div data-alt="img03" data-max-width="1800" data-max-height="1350">
                    <div data-src="<?php echo $currentURL ?>/gallery/CaroleRafa_<?php echo sprintf('%03d', $index); ?>-large.jpg" data-min-width="300"></div>
                    <div data-src="<?php echo $currentURL ?>/gallery/CaroleRafa_<?php echo sprintf('%03d', $index); ?>-medium.jpg" data-min-width="200"></div>
                    <div data-src="<?php echo $currentURL ?>/gallery/CaroleRafa_<?php echo sprintf('%03d', $index); ?>-small.jpg" data-min-width="140"></div>
                    <div data-src="<?php echo $currentURL ?>/gallery/CaroleRafa_<?php echo sprintf('%03d', $index); ?>-xsmall.jpg"></div>
                    <noscript>
                      <img src="<?php echo $currentURL ?>/gallery/CaroleRafa_<?php echo sprintf('%02d', $index); ?>-xsmall.jpg" alt="img03"/>
                    </noscript>
                  </div>
                </li>

              <?php } ?>
  					</ul>

  					<div class="gamma-overlay"></div>

  					<div id="loadmore" class="loadmore">Example for loading more items...</div>

  				</div>

  			</div><!--/main-->
  		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="../bower_components/PACE/pace.js"></script>
		<script src="../bower_components/GammaGallery/js/jquery.masonry.min.js"></script>
		<script src="../bower_components/GammaGallery/js/jquery.history.js"></script>
		<script src="../bower_components/GammaGallery/js/js-url.min.js"></script>
		<script src="../bower_components/GammaGallery/js/jquerypp.custom.js"></script>
		<script src="../bower_components/GammaGallery/js/gamma.js"></script>

    <script src="../bower_components/vide/dist/jquery.vide.min.js"></script>
    <script src="../bower_components/typed.js/dist/typed.min.js"></script>

    <script>
        $(document).bind('mobileinit',function(){
            $.mobile.changePage.defaults.changeHash = false;
            $.mobile.hashListeningEnabled = false;
            $.mobile.pushStateEnabled = false;
        });
    </script>
		<script type="text/javascript">

			$(function() {

				var GammaSettings = {
						// order is important!
						viewport : [ {
							width : 1200,
							columns : 5
						}, {
							width : 900,
							columns : 4
						}, {
							width : 500,
							columns : 3
						}, {
							width : 320,
							columns : 2
						}, {
							width : 0,
							columns : 2
						} ]
				};

				Gamma.init( GammaSettings, fncallback );


				// Example how to add more items (just a dummy):

				var page = 0,
					items = ['<li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="../bower_components/GammaGallery/images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="../bower_components/GammaGallery/images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="../bower_components/GammaGallery/images/xlarge/3.jpg" data-min-width="700"></div><div data-src="../bower_components/GammaGallery/images/large/3.jpg" data-min-width="300"></div><div data-src="../bower_components/GammaGallery/images/medium/3.jpg" data-min-width="200"></div><div data-src="../bower_components/GammaGallery/images/small/3.jpg" data-min-width="140"></div><div data-src="../bower_components/GammaGallery/images/xsmall/3.jpg"></div><noscript><img src="../bower_components/GammaGallery/images/xsmall/3.jpg" alt="img03"/></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="../bower_components/GammaGallery/images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="../bower_components/GammaGallery/images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="../bower_components/GammaGallery/images/xlarge/3.jpg" data-min-width="700"></div><div data-src="../bower_components/GammaGallery/images/large/3.jpg" data-min-width="300"></div><div data-src="../bower_components/GammaGallery/images/medium/3.jpg" data-min-width="200"></div><div data-src="../bower_components/GammaGallery/images/small/3.jpg" data-min-width="140"></div><div data-src="../bower_components/GammaGallery/images/xsmall/3.jpg"></div><noscript><img src="../bower_components/GammaGallery/images/xsmall/3.jpg" alt="img03"/></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="../bower_components/GammaGallery/images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="../bower_components/GammaGallery/images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="../bower_components/GammaGallery/images/xlarge/3.jpg" data-min-width="700"></div><div data-src="../bower_components/GammaGallery/images/large/3.jpg" data-min-width="300"></div><div data-src="../bower_components/GammaGallery/images/medium/3.jpg" data-min-width="200"></div><div data-src="../bower_components/GammaGallery/images/small/3.jpg" data-min-width="140"></div><div data-src="../bower_components/GammaGallery/images/xsmall/3.jpg"></div><noscript><img src="../bower_components/GammaGallery/images/xsmall/3.jpg" alt="img03"/></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="../bower_components/GammaGallery/images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="../bower_components/GammaGallery/images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="../bower_components/GammaGallery/images/xlarge/3.jpg" data-min-width="700"></div><div data-src="../bower_components/GammaGallery/images/large/3.jpg" data-min-width="300"></div><div data-src="../bower_components/GammaGallery/images/medium/3.jpg" data-min-width="200"></div><div data-src="../bower_components/GammaGallery/images/small/3.jpg" data-min-width="140"></div><div data-src="../bower_components/GammaGallery/images/xsmall/3.jpg"></div><noscript><img src="../bower_components/GammaGallery/images/xsmall/3.jpg" alt="img03"/></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="../bower_components/GammaGallery/images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="../bower_components/GammaGallery/images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="../bower_components/GammaGallery/images/xlarge/3.jpg" data-min-width="700"></div><div data-src="../bower_components/GammaGallery/images/large/3.jpg" data-min-width="300"></div><div data-src="../bower_components/GammaGallery/images/medium/3.jpg" data-min-width="200"></div><div data-src="../bower_components/GammaGallery/images/small/3.jpg" data-min-width="140"></div><div data-src="../bower_components/GammaGallery/images/xsmall/3.jpg"></div><noscript><img src="../bower_components/GammaGallery/images/xsmall/3.jpg" alt="img03"/></noscript></div></li>']

				function fncallback() {

					$( '#loadmore' ).show().on( 'click', function() {

						++page;
						var newitems = items[page-1]
						if( page <= 1 ) {

							Gamma.add( $( newitems ) );

						}
						if( page === 1 ) {

							$( this ).remove();

						}

					} );

				}

        $(window).scroll(function (e) {
          if (window.pageYOffset > 580) {
            $(".header-fixed").addClass('scroll');

          } else {

            $(".header-fixed").removeClass('scroll');

          }

          var newVolumn = 1 - (0.0017 * window.pageYOffset);

          if (newVolumn > 0) {
            $("video").prop("volume", newVolumn);
          } else {
            $("video").prop("volume", 0);
          }

        });

        $("#typed").typed({
          strings: ['Um dia muito especial em nossas vidas...'],
          showCursor: false,

        });

			});

		</script>
	</body>
</html>
