<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GIT Cheat Sheet</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="js/highlight/highlight.pack.js"></script>
	<script>
		$(document).ready(function() {
			$('pre code.hljs').each(function(i, block) {
				hljs.highlightBlock(block);
			});
		});
	</script>
</head>
<body>
	<div class="container">
		<header>
			<nav>
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="http://twitter.com/dsmcclintock" target="_blank">Twitter</a></li>
				</ul>
			</nav>
			<h1>Cheat Sheet for common Git commands & workflows</h1>
		</header>
		<main>
			<section>
				<p class="intro">Lorem ipsum uis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. Lorem ipsum uis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p>
				<h2>1. Fork the orignal repo</h2>
				<h2>2. Clone the forked repo</h2>

<pre><code class="hljs nohighlight acc"><in><cmd>cd</cmd> /Users/danielsmcclintock/acc/viewrc/acc-git</in>
<in><cmd>git clone</cmd> https://github.com/danielsmcclintock/<em>FORKED_REPO</em></in>
<out>Cloning into `FORKED_REPO`...
remote: Counting objects: 10, done.
remote: Compressing objects: 100% (8/8), done.
remove: Total 10 (delta 1), reused 10 (delta 1)
Unpacking objects: 100% (10/10), done.</out></code></pre>
			</section>
			<aside>
				<h3>Contents:</h3>
				<nav>
					<ul>
						<li><a href="#">Fork the original repo</a></li>
						<li><a href="#">Clone the forked repo</a></li>
					</ul>
				</nav>
			</aside>
			<div class="clearall"></span>
		</main>
		<footer>
			by <a href="http://twitter.com/dsmcclintock" target="_blank">@dsmcclintock</a>
		</footer>
	</div>
</body>
</html>
