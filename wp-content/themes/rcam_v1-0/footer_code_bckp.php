		<!-- analytics -->
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-80097311-1', 'auto');
		ga('send', 'pageview');

		</script>
		
		 <!-- Google Tag Manager -->
		<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WNFM3C"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-WNFM3C');</script>
		<!-- End Google Tag Manager -->



		<?php include_once("analyticstracking.php") ?>
		<script async defer>
                jQuery(document).ready(function(){
                jQuery('#banner-scania a').click(function() {
                    
                    ga('send', 'event', 'Banner','click', 'banner-Scania');
                });
                jQuery('#banner-texaco a').click(function() {
                    ga('send', 'event', 'Banner','click', 'banner-Texaco');
                });
                jQuery('#banner-iveco a').click(function() {
                    ga('send', 'event', 'Banner','click', 'banner-IVECO');
                });
                jQuery('#banner-alliance a').click(function() {
                    ga('send', 'event', 'Banner','click', 'banner-Alliance');
                });
                    console.log('teste');
                });
        </script>	