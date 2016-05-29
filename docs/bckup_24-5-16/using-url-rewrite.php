<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords"  content="SiteCake, template, HTML, page, URL rewrite " />
<meta name="description" content="Tutorial on how to use SiteCake with regular HTML pages and with the help or URL rewrite rules" />
<meta name="allow-search" content="yes" />
<meta name="robots" content="all, index, follow" />
<meta name="copyright" content="SiteCake" />
<title>Regular HTML can work with SiteCake with the help of URL rewrite</title>
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:regular,bold&subset=latin' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold&subset=latin' rel='stylesheet' type='text/css' />
<link href="../css/reset.css" rel="stylesheet" type="text/css" />
<link href="../css/screen.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 9]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<![endif]-->
<link href="../css/pages.css" rel="stylesheet" type="text/css" />

<link rel="Shortcut Icon" href="../favicon.ico" />
<link rel="icon" href="../favicon.ico" type="image/x-icon" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

</head>

<body>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-11292875-1']);
  _gaq.push(['_setDomainName', '.sitecake.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

<div id="wrapper">
	<div id="header"> 
	<a  id="logo" href="../index.html" title="Go home">SiteCake, fast and simple CMS for small websites</a>
	<!-- #BeginLibraryItem "/Library/utilites menu.lbi" -->	



	<!-- #EndLibraryItem --><div style="clear:both;"></div> 
</div>
	
	
	
	<div id="container">
	
	<div class="sidecolumn"><!-- #BeginLibraryItem "/Library/sidecolumn.lbi" -->		


<h2>Developer's Guide</h2>
<ul>
	<li><a href="install.html" title="Getting started with SiteCake">Getting started</a></li>
	<li><a href="how-to-upgrade-sitecake.php" title="How to upgrade SiteCake to new version">Upgrade to a new version</a></li>

	<li><a href="repeating-regions.php" title="How to add repeating regions to SiteCake">Creating repeating regions</a></li>
	<li><a href="how-to-use-slideshows.php" title="How to add slideshows in SiteCake">Adding a slideshow</a></li>
	
	<li><a href="include-javascript-with-sitecake-template.php" title="How to use javascript in SiteCake templates">Using Javascript in templates</a></li>
	<li><a href="using-php-in-templates.php" title="How to use PHP in SiteCake templates">Using PHP in templates</a></li>
	<li><a href="using-url-rewrite.php" title="SiteCake htaccess setup">Using URL rewrite</a></li>
	<li><a href="toolbar-module-configuration.php" title="Configuring SiteCake toolbar">Toolbar module configuration</a></li>
	<li><a href="how-to-change-sitecake-ui-language.php" title="How to change SiteCake language">Changing SiteCake UI language</a></li> 
</ul>


 
<br>
<br>
<br>

<!-- #EndLibraryItem --></div>
	
<div class="article sc-content-urlrewrite"><h1 class="">Using URL Rewrite<br></h1><p class="">Installing SiteCake using this approach is based on the usage of the URL rewrite mechanism of the web server and does not requires any changes to the page templates. However it requires setting a set of rewrite rules in order to get the wanted behaviour. <br></p><p class="">The url rewrite engine is used in a such a way that every HTTP page request <br>(e.g. http://example.com/contact.html) is redirected to the SiteCake entry script (sitecake_entry.php) with the original URI (in this example ‘/contact.html’) passed as the url GET parameter (sitecake_entry.php?url=/contact.html’).<br></p><p class="">SiteCake engine uses the url GET paramter’s value as a relative path (from the site’s document root) to locate and load the respective page template.<br></p><p class="">The following is an example of the url rewrite configuration (e.g. in .htaccess for Apache).<br></p><p class="code"># switch on the URL rewrite engine<br>RewriteEngine on<br><br># set the correct rewrite base<br>RewriteBase /<br><br># redirect every request that targets an HTML page (a request ending with '.html' or '.htm')<br># to sitecake_entry.php, providing the original URI as the 'url' parameter value (e.g. url=/about.html)<br># avoiding HTML files from the '/sitecake' folder<br>RewriteCond %{REQUEST_URI} ^.*\.html?$<br>RewriteCond %{REQUEST_URI} !^/sitecake/.*$<br>RewriteRule ^(.*)$ sitecake/server/sitecake_entry.php?url=$1 [QSA,L]<br><br># this rewrite rule handles an empty URI (e.g. http://example.com/)<br># a case when the index page has to be referenced<br>RewriteCond %{REQUEST_URI} ^/?$<br>RewriteRule ^(.*)$ sitecake/server/sitecake_entry.php?url=index.html [QSA,L]<br></p><p class="">&nbsp;<br></p><p class="">&nbsp;<br></p><p class="">&nbsp;<br></p><p class="">&nbsp;<br></p><p class="">&nbsp;<br></p><p class="">&nbsp;<br></p><p class="">&nbsp;<br></p></div>
	</div><!--container-->
</div><!--wrapper-->






























</body>
</html>
