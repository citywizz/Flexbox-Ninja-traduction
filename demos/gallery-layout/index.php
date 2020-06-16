<!DOCTYPE html>
<html lang="fr" class="no-js">
	<head>
		<title>Disposition Galerie</title>
		<meta name="description" content="One header, one content, one footer and two cols. Get rid of the hard thing with Flexbox!">

		<link rel="manifest" href="/manifest.json">

		<script src="/sw-register.js"></script>

		<link rel="apple-touch-icon" sizes="76x76" href="/assets/images/favicons/iOS-76.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/assets/images/favicons/iOS-120.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/assets/images/favicons/iOS-152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicons/iOS-180.png">
		<link rel="apple-touch-icon" sizes="1024x1024" href="/assets/images/favicons/iOS-1024.png">

		<link rel="apple-touch-icon" sizes="1024x1024" href="/assets/images/favicons/iOS-1024.png">

		<link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicons/favicon-16x16.png">
		<link rel="mask-icon" href="/assets/images/favicons/safari-pinned-tab.svg" color="#f34a4e">
		<link rel="shortcut icon" href="/assets/images/favicons/favicon.ico">
		<meta name="apple-mobile-web-app-title" content="Flexbox Ninja">
		<meta name="application-name" content="Flexbox Ninja">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-config" content="/assets/images/favicons/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">

		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@geoffreycrofte">
		<meta name="twitter:title" content="Holy Grail Layout solved with Flexbox">
		<meta name="twitter:description" content="One header, one content, one footer and two cols. Get rid of the hard thing with Flexbox!">
		<meta name="twitter:url" content="https://flexbox.ninja/demos/holy-grail-layout/">
		<meta name="twitter:image" content="https://flexbox.ninja/demos/holy-grail-layout//demos/holy-grail-layout/holy-grail-layout-big.png">

		<meta property="og:title" content="Holy Grail Layout solved with Flexbox">
		<meta property="og:url" content="https://flexbox.ninja/demos/holy-grail-layout/">
		<meta property="og:locale" content="en_US">
		<meta property="og:site_name" content="Flexbox.ninja">
		<meta property="og:description" content="One header, one content, one footer and two cols. Get rid of the hard thing with Flexbox!">
		<meta property="og:image" content="https://flexbox.ninja/demos/holy-grail-layout//demos/holy-grail-layout/holy-grail-layout-big.png">
		<meta property="og:type" content="website">

		<link rel="alternate" type="application/rss+xml" title="Flexbox.ninja RSS" href="https://flexbox.ninja/demos/holy-grail-layout//feed/" />
		
		
		<link rel="stylesheet" href="/assets/css/styles.css" media="all">	
		<link rel="stylesheet" href="/assets/css/zenburn.css" media="all">	
		<meta name="viewport" content="initial-scale=1.0, width=device-width, shrink-to-fit=no">
        <style>

            /* Galerie de présentation effet Masonry */
            
            #galerie-01 figure{   
                columns: 1;
                padding:0.2em;   
            }

            #galerie-01 figure img:hover{
                opacity:.5;
                transition: 0.8s;
            }

            #galerie-01 figure img{
                width: 100%;
                break-inside: avoid-column;/*interdit toute rupture de colonne au sein de la boîte */
                margin-top:1em;
            }

            #galerie-01 .gallery-item{
                padding: 0 1em 0 1em;
            }


            #galerie-01 figure[role="presentation"]{
                background-color:#f34a4e;
            }



            /* Galerie de présentation Flex + vignettes hauteurs similaires */

            #galerie-02 figure{
                display: flex;
                flex-wrap: wrap;
                overflow: hidden;
            }

            #galerie-02 figure>img {
                flex: 100%;
                }
            
            #galerie-02 figure img:hover{
                filter:opacity(.33);
                filter:sepia(.99);
                /*filter:blur(5px);*/
                transition: 0.8s;   
            }

            #galerie-02 figure img:nth-child(2n+1){
            }


            #galerie-02 figure[role="presentation"]{
                background-color:#f34a4e;
            }

            #galerie-02 figure img{
                width: 100%;
                margin-top:1em;
            }

            #galerie-02 .gallery-item{
                padding: 0 1em 0 1em;
            }

            #galerie-02 figure img:nth-child(1){
                order:3;
            }
            #galerie-02 figure img:nth-child(2){
                order:1;
            }
            #galerie-02 figure img:nth-child(3){
                order:2;
            }
            #galerie-02 figure img:nth-child(4){
                order:4;
            }
            #galerie-02 figure img:nth-child(5){
                order:6;
            }
            #galerie-02 figure img:nth-child(6){
                order:5;
            }

            @media all and (min-width: 600px){
                
                #galerie-01 figure{   
                    columns: 2;
                    column-gap: 0.2em;
                    padding:0.2em;   
                }
                
                #galerie-02 figure>img {
                flex: 1 0 50%;
                }

            }



        </style>
	</head>

	<body class="demos">
		<div class="app">
			<header role="banner" class="main-header">
				
				<div class="container">
					
					<p class="logo-wrapper">
						
						<a href="/">
							<img class="logo"
								src="/assets/images/logo-flexbox-ninja.png"
								srcset="/assets/images/logo-flexbox-ninja.svg 1x, /assets/images/logo-flexbox-ninja.svg 2x"
								width="239"
								height="105"
								alt="Flexbox.ninja">

						</a>
					</p>
					<nav class="main-nav">
						<ul>
							<li>
								<a href="/">Case studies</a>
							</li>
							<li>
								<a href="/how-to-learn-flexbox/">Learn Flexbox</a>
							</li>
							<li>
								<a href="/about/">About</a>
							</li>
						</ul>
					</nav>
				</div>
			</header>
		
		<section class="demo-page-content " role="main">
			<header class="demo-header">
				<h1 class="demo-title">Galerie avec Flexbox</h1>
				<img class="demo-image" src="/demos/holy-grail-layout/holy-grail-layout-big.png" srcset="/demos/holy-grail-layout/holy-grail-layout.svg 1x, /demos/holy-grail-layout/holy-grail-layout.svg 2x" alt="" width="640" height="382">
				
				<p class="demo-links">
					
					<a id="download-demo" data-demo="holy-grail-layout" class="button-ghost" href="demo.html" download="holy-grail-layout.html">Download demo</a>
					
					<a id="see-demo" data-demo="holy-grail-layout" class="button" href="demo.html">See demo</a>
					
				</p>
				
			</header>

			<div class="main-content">
			
				
				<div class="container">


                    <section id="galerie-01">
					<div id="descriptif">
					<h2> Galerie Masonry </h2>
					<p id="descriptif-court">
                        Une Galerie Flexbox de type Masonry avec columns et break-inside avoid-column qui interdit toute rupture de colonne au sein de la boîte.
                    <p>
					</div>

                    <figure role="presentation" aria-describedby="descriptif" aria-labelledby="titre-presentation">
                        <img src="/assets/images/portrait-01.jpeg" aria-describedby="descriptif-court" alt="Description de l'image" class="gallery-item" longdesc="#descriptif">
                        <img src="/assets/images/portrait-02.jpeg" aria-describedby="descriptif-court" alt="Description de l'image" class="gallery-item">
                        <img src="/assets/images/portrait-03.jpeg" aria-describedby="descriptif-court" alt="Description de l'image" class="gallery-item">
                        <img src="/assets/images/portrait-04.jpeg" aria-describedby="descriptif-court" alt="Description de l'image" class="gallery-item">
                        <img src="/assets/images/portrait-05.jpeg" aria-describedby="descriptif-court" alt="Description de l'image" class="gallery-item">
                        <img src="/assets/images/portrait-06.jpeg" aria-describedby="descriptif-court" alt="Description de l'image" class="gallery-item">
                        <figcaption id="titre-presentation">Description de la galerie de présentation</figcaption>
                    </figure>
                    

                    </section>

                    <section id="galerie-02">
                    <h2> Galerie Simple Flexbox </h2>

                    <figure role="presentation">
                        <img src="/assets/images/portrait-01.jpeg" alt="Description de l'image" class="gallery-item">
                        <img src="/assets/images/portrait-02.jpeg" alt="Description de l'image" class="gallery-item">
                        <img src="/assets/images/portrait-03.jpeg" alt="Description de l'image" class="gallery-item">
                        <img src="/assets/images/portrait-04.jpeg" alt="Description de l'image" class="gallery-item">
                        <img src="/assets/images/portrait-05.jpeg" alt="Description de l'image" class="gallery-item">
                        <img src="/assets/images/portrait-06.jpeg" alt="Description de l'image" class="gallery-item">
                    </figure>

                    </section>


				</div><!-- .container -->
			</div>
		</section>

		<aside id="share-the-love" role="complementary" class="section-primary text-center share-the-love">
	<div class="container">
		<h2 class="stl-title">You enjoyed this content?</h2>
		<p class="stl-subtitle">Spread the word by sharing it.</p>
		<ul class="social-networks stl-social">
						<li>
				<a target="_blank" href="https://twitter.com/intent/tweet?source=webclient&amp;original_referer=https://flexbox.ninja/demos/holy-grail-layout//demos/holy-grail-layout/&amp;text=Holy+Grail+Layout+solved+with+Flexbox&amp;url=https://flexbox.ninja/demos/holy-grail-layout//demos/holy-grail-layout/&amp;related=geoffreycrofte&amp;via=geoffreycrofte">
					<img src="/assets/images/twitter.svg" width="35" height="35" alt="">
					<span class="sr-only">Twitter</span>
				</a>
			</li>
			<li>
				<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&amp;ro=true&amp;trk=Flexbox.ninja&amp;title=Holy+Grail+Layout+solved+with+Flexbox&amp;url=https://flexbox.ninja/demos/holy-grail-layout//demos/holy-grail-layout/">
					<img src="/assets/images/linkedin.svg" width="30" height="30" alt="">
					<span class="sr-only">LinkedIn</span>
				</a>
			</li>
			<li>
				<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://flexbox.ninja/demos/holy-grail-layout//demos/holy-grail-layout/">
					<img src="/assets/images/facebook.svg" width="30" height="30" alt="">
					<span class="sr-only">Facebook</span>
				</a>
			</li>
		</ul>
	</div>
</aside>

			<footer class="main-footer" role="contentinfo">
				<div class="container">
					<p>Crafted by hands with love by <a href="https://twitter.com/geoffreycrofte/">Geoffrey Crofte</a><br>
						Cute Ninja illustration by <a href="https://stephaniewalter.design/">Stéphanie Walter</a></p>
				</div>
			</footer>
		<script src="/assets/js/highlight.min.js"></script>
		<script src="/assets/js/main.js"></script>
		</div>

		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-132877952-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  isGABlocked = gtag ? true : false;
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-132877952-1', { 'anonymize_ip': true });

			let dl_demo  = document.getElementById('download-demo'),
				see_demo = document.getElementById('see-demo');

			if ( dl_demo && !isGABlocked ) {
				dl_demo.addEventListener( 'click', function(e){
					var _this = this,
						_e = e;

					// If real click, trigger GA tag.
					if ( e.clientX !== 0 ) {
						e.preventDefault();
						gtag('event', 'page_view', {
							"slug" : this.dataset.demo,
							"action" : "download",
							"event_callback" : function() {
								var clickEvent = document.createEvent("MouseEvent");
								clickEvent.initMouseEvent("click", true, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null); 
	        					_this.dispatchEvent(clickEvent);
							}

						} );
					}
					// else do the download.
					else {
						return;
					}
				});

				see_demo.addEventListener( 'click', function(e){
					var _this = this;
					e.preventDefault();
					gtag('event', 'page_view', {
						"slug" : this.dataset.demo,
						"action" : "see",
						"event_callback" : function() {
							document.location.href = _this.href;
						}
					} );
				});
			}
		</script>

	</body>
</html>
		
