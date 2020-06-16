<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<title>Buttons with Icons solved with Flexbox</title>
		<meta name="description" content="Align Buttons handling overflow by wrapping the content and including aligned icon and text. Flexbox can do it for you!">

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
		<meta name="twitter:title" content="Buttons with Icons solved with Flexbox">
		<meta name="twitter:description" content="Align Buttons handling overflow by wrapping the content and including aligned icon and text. Flexbox can do it for you!">
		<meta name="twitter:url" content="https://flexbox.ninja/demos/buttons-with-icons/">
		<meta name="twitter:image" content="https://flexbox.ninja/demos/buttons-with-icons//demos/buttons-with-icons/buttons-with-icons-big.png">

		<meta property="og:title" content="Buttons with Icons solved with Flexbox">
		<meta property="og:url" content="https://flexbox.ninja/demos/buttons-with-icons/">
		<meta property="og:locale" content="en_US">
		<meta property="og:site_name" content="Flexbox.ninja">
		<meta property="og:description" content="Align Buttons handling overflow by wrapping the content and including aligned icon and text. Flexbox can do it for you!">
		<meta property="og:image" content="https://flexbox.ninja/demos/buttons-with-icons//demos/buttons-with-icons/buttons-with-icons-big.png">
		<meta property="og:type" content="website">

		<link rel="alternate" type="application/rss+xml" title="Flexbox.ninja RSS" href="https://flexbox.ninja/demos/buttons-with-icons//feed/" />
		
		
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
		
		<section class="demo-page-content alt" role="main">
			<header class="demo-header">
				<h1 class="demo-title">Buttons with Icons</h1>
				<img class="demo-image" src="/demos/buttons-with-icons/buttons-with-icons-big.png" srcset="/demos/buttons-with-icons/buttons-with-icons.svg 1x, /demos/buttons-with-icons/buttons-with-icons.svg 2x" alt="" width="640" height="382">
				
				<p class="demo-links">
					
					<a id="download-demo" data-demo="buttons-with-icons" class="button-ghost" href="demo.html" download="buttons-with-icons.html">Download demo</a>
					
					<a id="see-demo" data-demo="buttons-with-icons" class="button" href="demo.html">See demo</a>
					
				</p>
				
			</header>

			<div class="main-content">
			
									
				<div class="container">
					<p>The most common case for this kind of pattern is when you need to build buttons for social network sharing.</p>

					<h2>Defining our needs</h2>
					<p>As usual, I like to define some goals so that the CSS solution does make sense to you. What I need is:</p>

					<ul>
						<li>Vertical aligned buttons</li>
						<li>Buttons with vertical aligned icon and text</li>
						<li>If I don't have enough space, the overflowing buttons go to a new line.</li>
						<li>Buttons cover the entire space available by distributing the available space.</li>
						<li>Keep the HTML code as simple and accessible as possible, as usual :p</li>
					</ul>

					<p>The last part is optional.</p>
					
					<h2>Let's code this</h2>

					<h3>Our HTML basics</h3>

<pre class="code"><code class="html">&lt;ul class="social-buttons"&gt;
	&lt;li&gt;
		&lt;a href="https://twitter.com/"&gt;
			&lt;i class="icon-twitter" role="presentation"&gt;&lt;/i&gt;
			Twitter
		&lt;/a&gt;
	&lt;/li&gt;
	&lt;li&gt;
		&lt;a href="https://www.facebook.com/"&gt;
			&lt;i class="icon-facebook" role="presentation"&gt;&lt;/i&gt;
			Facebook
		&lt;/a&gt;
	&lt;/li&gt;
	&lt;li&gt;
		&lt;a href="https://instagram.com"&gt;
			&lt;i class="icon-instagram" role="presentation"&gt;&lt;/i&gt;
			Instagram
		&lt;/a&gt;
	&lt;/li&gt;
	&lt;li&gt;
		&lt;a href="http://weibo.com/"&gt;
			&lt;i class="icon-weibo" role="presentation"&gt;&lt;/i&gt;
			Weibo
		&lt;/a&gt;
	&lt;/li&gt;
	&lt;li&gt;
		&lt;a href="https://www.linkedin.com/"&gt;
			&lt;i class="icon-linkedin" role="presentation"&gt;&lt;/i&gt;
			Linkedin
		&lt;/a&gt;
	&lt;/li&gt;
&lt;/ul&gt;</code></pre>
				
					<p>I used <code>role="presentation"</code> to avoid assistive technology reading the decorative icon. Read more about that thanks to the excellent article by Scott O'Hara "<a href="https://www.scottohara.me/blog/2018/05/05/hidden-vs-none.html">Know your ARIA: 'hidden' VS 'none'</a>".</p>

					<h3>CSS to flex the things</h3>

					<p>Ok now we are using Flexbox to make the magic happen.</p>

<pre class="code"><code class="css">/**
 * The container and the item are both
 * into flex layout. To align items
 * to each other.
 */
.social-buttons,
.social-buttons li {
	display: flex;
	padding: 0;
	margin: 0;
}

/**
 * Force to occupy the space available
 * and allow item being on several lines
 */
.social-buttons {
	width: 100%;
	list-style: none;
	flex-wrap: wrap;
}

/**
 * Items tend to occupy 25% of
 * the available width but are
 * allow to grow.
 */
.social-buttons li {
	flex-basis: 25%;
	flex-shrink: 0;
	flex-grow: 1;
}

/**
 * The anchor is also in Flex
 * to align icon and text and
 * center their content.
 */
.social-buttons a {
	display: flex;
	justify-content: center;
	align-items: center;
	width: 100%;
	padding: .5em 1em;
	font-weight: 500;
	text-decoration: none;
	color: #FFF;
}

/**
 * Some decorations for the 
 * next lines.
 */
.social-buttons i {
	margin-right: .5em;
}

.social-buttons [href*="twitter.com"] {
	background: #1da1f2;
}

.social-buttons [href*="facebook.com"] {
	background: #3b5998;
}

.social-buttons [href*="instagram.com"] {
	background: #c13584;
}

.social-buttons [href*="weibo.com"] {
	background: #e6162d;
}

.social-buttons [href*="linkedin.com"] {
	background: #0077b5;
}</code></pre>

				<p>The magic parts are here the <code>wrap</code> option and the fact that <code>.social-buttons li</code> are allow to <code>grow</code> even if their width is set thanks to <code>flex-basis: 25%</code> which is not a strong constraint</p>

				<p>Here is an alternative code with margin:</p>

<pre class="code"><code class="css">.social-buttons li {
	margin: 2px;
}</code></pre>

					<p>Have fun!</p>

				</div><!-- .container -->
				
			</div>
		</section>

		<aside id="share-the-love" role="complementary" class="section-primary text-center share-the-love">
	<div class="container">
		<h2 class="stl-title">You enjoyed this content?</h2>
		<p class="stl-subtitle">Spread the word by sharing it.</p>
		<ul class="social-networks stl-social">
						<li>
				<a target="_blank" href="https://twitter.com/intent/tweet?source=webclient&amp;original_referer=https://flexbox.ninja/demos/buttons-with-icons//demos/buttons-with-icons/&amp;text=Buttons+with+Icons+solved+with+Flexbox&amp;url=https://flexbox.ninja/demos/buttons-with-icons//demos/buttons-with-icons/&amp;related=geoffreycrofte&amp;via=geoffreycrofte">
					<img src="/assets/images/twitter.svg" width="35" height="35" alt="">
					<span class="sr-only">Twitter</span>
				</a>
			</li>
			<li>
				<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&amp;ro=true&amp;trk=Flexbox.ninja&amp;title=Buttons+with+Icons+solved+with+Flexbox&amp;url=https://flexbox.ninja/demos/buttons-with-icons//demos/buttons-with-icons/">
					<img src="/assets/images/linkedin.svg" width="30" height="30" alt="">
					<span class="sr-only">LinkedIn</span>
				</a>
			</li>
			<li>
				<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://flexbox.ninja/demos/buttons-with-icons//demos/buttons-with-icons/">
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
		
