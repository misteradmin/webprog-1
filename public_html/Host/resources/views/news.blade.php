<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	header, section, footer, aside, nav, article, figure, figcaption {
				display: block;}
	header{
		background-color: white;
	}
	body {
		color: #B22222;
		background-color: #B22222;
		background-image: url("background.jpg");
		background-size: 100%;
		background-repeat: no-repeat;
		background-position: center;
		font-family: Georgia, Times, serif;
		line-height: 1.4em;
		margin: 0px;}
	.wrapper {
		width: 940px;
		margin: 20px auto 20px auto;
		border: 2px solid #000000;
		background-color: #ffffff;}
	h1 {
		text-indent: 330px;
		width: 940px;
		height: 50px;
		margin:20px 20px 0px;}
	nav, footer{
		clear: both;
		color: white;
		background-color: #B22222;
		height: 30px;}
	nav ul {
		margin: 0px;
		padding: 5px 0px 5px 30px;}
	nav li {
		display: inline;
		margin-right: 40px;}
	nav li a {
		color: #ffffff;}
	nav li a:hover, nav li a.current {
		color: #000000;}
	section.courses {
		float: left;
		width: 659px;
		border-right: 1px solid #eeeeee;}
	article {
		clear: both;
		overflow: auto;
		width: 100%;}
	hgroup {
		margin-top: 40px;}
		figure {
	float: left;
		width: 290px;
		height: 220px;
		padding: 5px;
		margin: 20px;
		border: 1px solid #eeeeee;}
	figcaption {
		font-size: 90%;
		text-align: left;}
	.gambar{
		width: 290px;
		height:220px;}
	aside {
		width: 230px;
		float: left;
		padding: 0px 0px 0px 20px;}
	aside section a {
		display: block;
		padding: 10px;
		border-bottom: 1px solid #eeeeee;}
	aside section a:hover {
		color: #B22222;
		background-color: #efefef;}
	a {
		color: #B22222;
		text-decoration: none;}
	h1, h2, h3 {
		font-weight: normal;}
	h2 {
		margin: 10px 0px 5px 0px;
		padding: 0px;}
	h3 {
		margin: 0px 0px 10px 0px;
		color: #DC143C;}
	aside h2 {
		padding: 30px 0px 10px 0px;
		color: #DC143C;}
	footer {
		font-size: 80%;
		padding: 7px 0px 0px 20px;}
	hgroup a:hover{
		color: #DC143C;
		background-color: lightyellow;}
	}
</style>
	<title>News</title>
</head>
<body>
	<div class="wrapper">
			<header>
				<h1>News Section</h1>
				<nav>
					<ul>
						<li><a href="http://projectwebprog.esy.es/">Home</a></li>
						<li><a href="http://projectwebprog.esy.es/dota2" class="current">Gaming</a></li>
						<li><a href="http://projectwebprog.esy.es/news" >News</a></li>
						<li><a href="http://projectwebprog.esy.es/sport" >Sport</a></li>
						<li><a href="http://projectwebprog.esy.es/eatery" >Eatery</a></li>
					</ul>
				</nav>
			</header>	
			<section class="courses">
				<article>
					<figure>
						<img src="http://www.bbc.co.uk/news/special/2015/newsspec_10857/bbc_news_logo.png?cb=1" class="gambar"/>
					</figure>
					<hgroup>
						<a href=""><h2>Contoh Judul</h2></a>
						<h3>Contoh Caption</h3>
					</hgroup>
					<p>Deskripsi singkat mengenai article yang dituju.</p>
				</article>    
				<article>
					<figure>
						<img src="http://www.bbc.co.uk/news/special/2015/newsspec_10857/bbc_news_logo.png?cb=1" class="gambar"/>
					</figure>
					<hgroup>
						<a href=""><h2>Contoh Judul</h2></a>
						<h3>Contoh Caption</h3>
					</hgroup>
					<p>Deskripsi singkat mengenai article yang dituju.</p>
				</article>  
			</section>
			<aside>
				<section class="other news">
					<h2>Hot News</h2>
					<a href="">Article 1</a>
					<a href="">Article 2</a>
					<a href="">Article 3</a>
					<a href="">Article 4</a>
				</section>
				<section class="contact-details">
					<h2>Our Profiles</h2>
					<p>News Edited By :<br />	
				</section>
			</aside>
			<footer>
				&copy; 2016 Viele News
			</footer>
		</div>
</body>
</html>