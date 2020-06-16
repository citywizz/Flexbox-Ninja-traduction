<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<title>Website Header solved with Flexbox</title>
		<meta name="description" content="A logo to the left, a navigation to the right, everything centered in small screen, no matters the number of nav items. Easy with Flexbox!">

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
		<meta name="twitter:title" content="Website Header solved with Flexbox">
		<meta name="twitter:description" content="A logo to the left, a navigation to the right, everything centered in small screen, no matters the number of nav items. Easy with Flexbox!">
		<meta name="twitter:url" content="https://flexbox.ninja/demos/website-header/">
		<meta name="twitter:image" content="https://flexbox.ninja/demos/website-header//demos/website-header/website-header-big.png">

		<meta property="og:title" content="Website Header solved with Flexbox">
		<meta property="og:url" content="https://flexbox.ninja/demos/website-header/">
		<meta property="og:locale" content="en_US">
		<meta property="og:site_name" content="Flexbox.ninja">
		<meta property="og:description" content="A logo to the left, a navigation to the right, everything centered in small screen, no matters the number of nav items. Easy with Flexbox!">
		<meta property="og:image" content="https://flexbox.ninja/demos/website-header//demos/website-header/website-header-big.png">
		<meta property="og:type" content="website">

		<link rel="alternate" type="application/rss+xml" title="Flexbox.ninja RSS" href="https://flexbox.ninja/demos/website-header//feed/" />
		
		
		<link rel="stylesheet" href="/assets/css/styles.css" media="all">	
		<link rel="stylesheet" href="/assets/css/zenburn.css" media="all">	
		<meta name="viewport" content="initial-scale=1.0, width=device-width, shrink-to-fit=no">

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
				<h1 class="demo-title">Website Header</h1>
				<img class="demo-image" src="/demos/website-header/website-header-big.png" srcset="/demos/website-header/website-header.svg 1x, /demos/website-header/website-header.svg 2x" alt="" width="640" height="382">
				
				<p class="demo-links">
					
					<a id="download-demo" data-demo="website-header" class="button-ghost" href="demo.html" download="website-header.html">Download demo</a>
					
					<a id="see-demo" data-demo="website-header" class="button" href="demo.html">See demo</a>
					
				</p>
				
			</header>

			<div class="main-content">
			
									
				<div class="container">
					<p>This is awesome! A logo to the left, a navigation to the right.<br>
					It's not a big deal, but this tip could save your time during a lot of projects.</p>

					<h2>Defining our needs</h2>
					<p>I think there are two ways to handle this kind of situation, but only CSS will change the game. My list of needs:</p>

					<ul>
						<li>A logo to the left, a navigation to the right,</li>
						<li>Logo and navigation have to be vertically centered,</li>
						<li>Horizontal alignement have to be shared between logo and nav</li>
						<li>When screen width becomes not enough for both in the same row, logo and nav have to be in two different centered-content lines.</li>
						<li>(Optional) When both are in the same line logo is stuck to the very left, nav to the very right</li>
					</ul>

					<p>I put this last item as optionnal, because… it depends on the project you are doing, but the need can happens.</p>
					
					<h2>Let's code this</h2>

					<h3>Our HTML basics</h3>

<pre class="code"><code class="html">&lt;header class="main-header"&gt;
	&lt;div class="container"&gt;
		&lt;h1 class="mh-logo"&gt;
			&lt;img src="http://flexbox.ninja/assets/images/logo.svg" width="170" height="95" alt="Flexbox.ninja"&gt;
		&lt;/h1&gt;
		&lt;nav class="main-nav"&gt;
			&lt;ul class="main-nav-list"&gt;
				&lt;li&gt;
					&lt;a href="#"&gt;Home&lt;/a&gt;
				&lt;/li&gt;
				&lt;li&gt;
					&lt;a href="#"&gt;About us&lt;/a&gt;
				&lt;/li&gt;
				&lt;li&gt;
					&lt;a href="#"&gt;Our clients&lt;/a&gt;
				&lt;/li&gt;
				&lt;li&gt;
					&lt;a href="#"&gt;Contact&lt;/a&gt;
				&lt;/li&gt;
			&lt;/ul&gt;
		&lt;/nav&gt;
	&lt;/div&gt;
&lt;/header&gt;</code></pre>
				
					<p>I use a lot of classes so you can easily chose your own markup.
					<br>In this case, the <code>.container</code> element is here to limit header content width in big screens.</p>

					<h3>CSS to flex the things</h3>

					<p>It's time to define the main rules that make this magic appears. Feel free to see the complete demo file to grab some other tips.</p>

<pre class="code"><code class="css">/**
 * Images a now responsive
 */
img {
	max-width: 100%;
	height: auto;
}

/**
 * Limit the container in
 * width for big screens
 */
.container {
	width: 960px;
	max-width: 100%;
	padding: 20px;
	margin: 0 auto;
}

/**
 * By using display: flex
 * Logo and nav are in 2 cols
 * align-items make them
 * vertically centered
 * justify-content distribute
 * horizontal spaces around
 * and flex-wrap break the
 * things in two lines in
 * small screens
 */
.main-header .container {
	display: flex;
	align-items: center;
	justify-content: space-around;
	flex-wrap: wrap;
}

/**
 * The followings are to
 * make things more
 * clean and airy
 * and contents centered
 */
.main-nav ul {
	margin: 1em 0 .5em;
	text-align: center;
}
.main-nav li {
	display: inline;
}
.main-nav a {
	display: inline-block;
	padding: .5em 1.5em;
}</code></pre>

				<p>Magic part is at <code>.main-header .container</code> selector with all the flex-things. With that, we don't have the last (optionnal) point of our list.</p>

				<p>I propose to you an alternative by pointing only the differences in this following CSS code:</p>

<pre class="code"><code class="css">/**
 * Space-around become
 * Space-between to
 * distribute space
 * between the flex-items
 */
@media (min-width: 960px) {
	.main-header .container {
		justify-content: space-between;
	}
}</code></pre>

					<p>Here, the breakpoint is defined by the maximum width of my <code>.container</code>. I think it's an at-least value, but feel free to adjust it according to your project.</p>

				</div><!-- .container -->
				
			</div>
		</section>

		<aside id="share-the-love" role="complementary" class="section-primary text-center share-the-love">
	<div class="container">
		<h2 class="stl-title">You enjoyed this content?</h2>
		<p class="stl-subtitle">Spread the word by sharing it.</p>
		<ul class="social-networks stl-social">
						<li>
				<a target="_blank" href="https://twitter.com/intent/tweet?source=webclient&amp;original_referer=https://flexbox.ninja/demos/website-header//demos/website-header/&amp;text=Website+Header+solved+with+Flexbox&amp;url=https://flexbox.ninja/demos/website-header//demos/website-header/&amp;related=geoffreycrofte&amp;via=geoffreycrofte">
					<img src="/assets/images/twitter.svg" width="35" height="35" alt="">
					<span class="sr-only">Twitter</span>
				</a>
			</li>
			<li>
				<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&amp;ro=true&amp;trk=Flexbox.ninja&amp;title=Website+Header+solved+with+Flexbox&amp;url=https://flexbox.ninja/demos/website-header//demos/website-header/">
					<img src="/assets/images/linkedin.svg" width="30" height="30" alt="">
					<span class="sr-only">LinkedIn</span>
				</a>
			</li>
			<li>
				<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://flexbox.ninja/demos/website-header//demos/website-header/">
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