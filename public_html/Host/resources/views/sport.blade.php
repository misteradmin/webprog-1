<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	header, section, footer, aside, nav, article, figure, figcaption {
				display: block;}
	html,body {
		color: #666666;
		background-color: #f9f8f6;
		background-image: url("background.jpg");
		background-position: center;
		background-size: 100%;
		background-repeat: no-repeat;
		font-family: Georgia, Times, serif;
		line-height: 1.4em;
		margin: 0;}
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
		color: grey;
		background-color: #aeaca8;
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
			height:220px
		}
		aside {
				width: 230px;
				float: left;
				padding: 0px 0px 0px 20px;}
			aside section a {
				display: block;
				padding: 10px;
				border-bottom: 1px solid #eeeeee;}
			aside section a:hover {
				color: #985d6a;
				background-color: #efefef;}
			a {
				color: grey;
				text-decoration: none;}
			h1, h2, h3 {
				font-weight: normal;}
			h2 {
				margin: 10px 0px 5px 0px;
				padding: 0px;}
			h3 {
				margin: 0px 0px 10px 0px;
				color: grey;}
			aside h2 {
				padding: 30px 0px 10px 0px;
				color: grey;}
			footer {
				font-size: 80%;
				padding: 7px 0px 0px 20px;}
			hgroup a:hover{
				color: #985d6a;
				background-color: #efefef;}
			}
</style>
	<title>Sport</title>
</head>
<body>
	<div class="wrapper">
			<header>
				<h1>Sport Section</h1>
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
						<img src="http://a.espncdn.com/photo/2016/0602/nba_0602nbaplayoffs_1296x518.jpeg" class="gambar"/>
					</figure>
					<hgroup>
						<a href=""><h2>Contoh Judul</h2></a>
						<h3>Contoh Caption</h3>
					</hgroup>
					<p>Deskripsi singkat mengenai article yang dituju.</p>
				</article>    
				<article>
					<figure>
						<img src="http://a.espncdn.com/photo/2016/0602/nba_0602nbaplayoffs_1296x518.jpeg" class="gambar"/>
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
					<h2>Sport News Terkini</h2>
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