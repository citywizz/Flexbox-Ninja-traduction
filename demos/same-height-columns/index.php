<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<title>Same Columns Height solved with Flexbox</title>
		<meta name="description" content="Your designer made an awesome work with Lorem Ipsum, but in real life texts change. Let's keep a good harmony with Flexbox!">

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
		<meta name="twitter:title" content="Same Columns Height solved with Flexbox">
		<meta name="twitter:description" content="Your designer made an awesome work with Lorem Ipsum, but in real life texts change. Let's keep a good harmony with Flexbox!">
		<meta name="twitter:url" content="https://flexbox.ninja/demos/same-height-columns/">
		<meta name="twitter:image" content="https://flexbox.ninja/demos/same-height-columns//demos/same-height-columns/same-height-columns-big.png">

		<meta property="og:title" content="Same Columns Height solved with Flexbox">
		<meta property="og:url" content="https://flexbox.ninja/demos/same-height-columns/">
		<meta property="og:locale" content="en_US">
		<meta property="og:site_name" content="Flexbox.ninja">
		<meta property="og:description" content="Your designer made an awesome work with Lorem Ipsum, but in real life texts change. Let's keep a good harmony with Flexbox!">
		<meta property="og:image" content="https://flexbox.ninja/demos/same-height-columns//demos/same-height-columns/same-height-columns-big.png">
		<meta property="og:type" content="website">

		<link rel="alternate" type="application/rss+xml" title="Flexbox.ninja RSS" href="https://flexbox.ninja/demos/same-height-columns//feed/" />
		
		
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
				<h1 class="demo-title">Same Columns Height</h1>
				<img class="demo-image" src="/demos/same-height-columns/same-height-columns-big.png" srcset="/demos/same-height-columns/same-height-columns.svg 1x, /demos/same-height-columns/same-height-columns.svg 2x" alt="" width="640" height="382">
				
				<p class="demo-links">
					
					<a id="download-demo" data-demo="same-height-columns" class="button-ghost" href="demo.html" download="same-height-columns.html">Download demo</a>
					
					<a id="see-demo" data-demo="same-height-columns" class="button" href="demo.html">See demo</a>
					
				</p>
				
			</header>

			<div class="main-content">
			
				
				<div class="container">

					<p>Yeah I know, I can do it with <code>min-height</code>, or perhaps a <code>table</code>-layout… It's what you think, but you are not totally right if you do so. But before talking about right and wrong, let’s define our needs.</p>

					<h2>Defining the columns behavior</h2>

					<p>I worked with several designers. You know them, they want to create perfect blocks with right divisions, well measured columns, buttons to the bottom, gorgeous images or icons to illustrate a marketing wording…<br>
					Let's define our needs as following:</p>

					<ul>
						<li>Columns should have same visual height by taking the biggest one,</li>
						<li>Columns could have same width, but can also be flexible,</li>
						<li>I want an image at the top, then a title, then a little text and a button/link</li>
						<li>The link have to be at the bottom-end of the column, no matter the text size above,</li>
						<li>Use a minimal markup and CSS, only CSS, no JS</li>
					</ul>

					<h2>Let's code this</h2>

					<p>First at all, you need to build a basic HTML markup. I propose to you this one, but feel free to adapt or improve regarding your real needs.</p>

					<h3>HTML</h3>

<pre class="code"><code class="html">&lt;section&gt;
	&lt;h1&gt;Same Column Height&lt;/h1&gt;
	&lt;div class="flex"&gt;
		&lt;div class="col"&gt;
				
			&lt;a href="#"&gt;
				&lt;img src="image.jpg" width="" height="" alt="Some sample words"&gt;
			&lt;/a&gt;

			&lt;h2&gt;A little title&lt;/h2&gt;
			&lt;p&gt;Lorem ipsum dolor sit […]&lt;/p&gt;
				
			&lt;a class="btn" href="#"&gt;Read more&lt;/a&gt;

		&lt;/div&gt;

		&lt;div class="col"&gt;
				
			&lt;a href="#"&gt;
				&lt;img src="image.jpg" width="" height="" alt="Some sample words"&gt;
			&lt;/a&gt;

			&lt;h2&gt;A little title&lt;/h2&gt;
			&lt;p&gt;Lorem ipsum dolor sit amet […]&lt;/p&gt;
				
			&lt;a class="btn" href="#"&gt;Read more&lt;/a&gt;

		&lt;/div&gt;

		&lt;div class="col"&gt;
				
			&lt;a href="#"&gt;
				&lt;img src="image.jpg" width="" height="" alt="Some sample words"&gt;
			&lt;/a&gt;

			&lt;h2&gt;A little title&lt;/h2&gt;
			&lt;p&gt;Lorem ipsum dolor sit amet, consectetur […]&lt;/p&gt;
				
			&lt;a class="btn" href="#"&gt;Read more&lt;/a&gt;

		&lt;/div&gt;
	&lt;/div&gt;
&lt;/section&gt;</code></pre>

					<p>Now some styles to make the magic works.</p>

					<h3>CSS</h3>

					<p>To be clear: today, your website has to be responsive. That's why the CSS code I'll propose you is <em>mobile first responsive</em>.</p>

<pre class="code"><code class="css">/**
 * Make images responsive
 */
.flex .col img {
	width: 100%;
	height: auto;
}

/**
 * Make .flex children same
 * height using display flex.
 * Justify property prepares
 * cols for being centered.
 */
.flex {
	display: flex;
	justify-content: center;
	width: 960px;
	max-width: 100%;
	margin: auto;
}

/**
 * Make cols flexible to
 * auto push button at the
 * col bottom.
 */
.flex .col {
	display: flex;
	flex-direction: column;
	flex: 1 1 300px;
	/* 
	In the order, equal to
	flex-grow: 1;
	flex-shrink: 1;
	flex-basis: 300px;
	*/
	margin: 1em;
}

/**
 * Margin-top auto pushes
 * button to bottom.
 * Align self makes button
 * stuck to the left.
 */
.flex .col .btn {
	align-self: flex-start;
	margin-top: auto;
}

/**
 * Under 900px wrap cols
 */
@media (max-width: 900px) {
	.flex {
		flex-wrap: wrap;
	}
}</code></pre>
					<p>In that precise case, I allowed images to be very big, larger than their physical width in intermediate screen sizes. (iPad mini in portrait, or something…)<br>
					If you need to keep a real good feeling about images, grab a solution among <code>size</code> and <code>srcset</code> attributes, or simply decide to replace <code>flex: 1 1 300px;</code> by <code>flex: 0 1 300px;</code> that allows cols being smaller but not bigger than 300 pixels wide.</p>

					<p>I hope these comments will help you understand this very short code.Yeah, as you can see, it's pretty easy to do it work.</p>

					<p>Sure, there are many other ways to make the same thing differently. Feel free to adapt it and make your own code.</p>

				</div><!-- .container -->
			</div>
		</section>

		<aside id="share-the-love" role="complementary" class="section-primary text-center share-the-love">
	<div class="container">
		<h2 class="stl-title">You enjoyed this content?</h2>
		<p class="stl-subtitle">Spread the word by sharing it.</p>
		<ul class="social-networks stl-social">
						<li>
				<a target="_blank" href="https://twitter.com/intent/tweet?source=webclient&amp;original_referer=https://flexbox.ninja/demos/same-height-columns//demos/same-height-columns/&amp;text=Same+Columns+Height+solved+with+Flexbox&amp;url=https://flexbox.ninja/demos/same-height-columns//demos/same-height-columns/&amp;related=geoffreycrofte&amp;via=geoffreycrofte">
					<img src="/assets/images/twitter.svg" width="35" height="35" alt="">
					<span class="sr-only">Twitter</span>
				</a>
			</li>
			<li>
				<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&amp;ro=true&amp;trk=Flexbox.ninja&amp;title=Same+Columns+Height+solved+with+Flexbox&amp;url=https://flexbox.ninja/demos/same-height-columns//demos/same-height-columns/">
					<img src="/assets/images/linkedin.svg" width="30" height="30" alt="">
					<span class="sr-only">LinkedIn</span>
				</a>
			</li>
			<li>
				<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://flexbox.ninja/demos/same-height-columns//demos/same-height-columns/">
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
		
