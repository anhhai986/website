<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords"  content="SiteCake, download, license, demo, template, install, " />
<meta name="description" content="Learn how to use custom PHP scripts in SiteCake pages" />
<meta name="allow-search" content="yes" />
<meta name="robots" content="all, index, follow" />
<meta name="copyright" content="SiteCake" />
<title>PHP Script In SiteCake Templates</title>
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
	<a  id="logo" href="../index.html" title="Go home">SiteCake, fast and simple CMS for small websites</a><!-- #BeginLibraryItem "/Library/utilites menu.lbi" -->	



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
	
<div class="article sc-content-usingphp"><h1 class="">Using PHP In Templates<br></h1><p class="">PHP code within SC templates can be used in two ways or phases:t<br></p><ul><li>render the page contents - <b>after</b> the SC page rendering process</li><li>render the page contents&nbsp;- before the SC page rendering process</li></ul><p class="">The following example is a simple page template that demonstrates usage of PHP code to render a part of page content after the SiteCake completes the page rendering. The configura &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tion constant <strong>PHP_TEMPLATE (sitecake/server/config.php)</strong> should be set to <strong>false</strong>.<br></p><p class="code">&lt;html&gt;<br>&lt;head&gt;<br>…<br>&lt;/head&gt;<br>&lt;body&gt;<br>&nbsp; &nbsp;&lt;div class=”sc-content-editableArea”&gt;<br>&nbsp; &nbsp; &nbsp; &lt;p&gt;Page content&lt;/p&gt;<br>&nbsp; &nbsp;&lt;/div&gt;<br>&nbsp; &nbsp;&lt;div class=”footer”&gt;<br>&nbsp; &nbsp; &nbsp; &lt;?php<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; include “extern_php_code.php”;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; echo render_footer();<br>&nbsp; &nbsp; &nbsp; ?&gt;<br>&nbsp; &nbsp;&lt;/div&gt;<br>&lt;/body&gt;<br>&lt;/html&gt;<br></p><p class="">SiteCake first renders the page filling in the content of the editableArea container. After that, the complete page is evaluated as a PHP script. This is the moment when the PHP script block can execute arbitrary action and, for example, render the content of the footer.<br><br>The next example is a simple page template that shows how PHP could be used to render a page template. The configuration constant <strong>PHP_TEMPLATE (sitecake/server/config.php)</strong> should be set to <strong>true</strong>.<br></p><p class="code">&lt;!-- this is a PHP template part --&gt;<br>?php<br>&nbsp; &nbsp;include “needed_scripts.php”;<br>&nbsp; &nbsp;echo “&lt;html&gt;&lt;head&gt;...&lt;/head&gt;&lt;body&gt;”;<br>&nbsp; &nbsp;if ( isset($_GET[‘test’] ) {<br> &nbsp; &nbsp;&nbsp; &nbsp;echo ‘&lt;div class=”sc-content-testContainer”&gt;’;<br> &nbsp; &nbsp;} else {<br> &nbsp; &nbsp;&nbsp; &nbsp;echo ‘&lt;div class=”sc-content-realContainer”&gt;’;<br> &nbsp; &nbsp;}<br>?&gt;<br><br>&lt;!-- this is a PHP block that is evaluated after the page rendering --&gt;<br>&lt;?php echo “&lt;?php”; ?&gt;<br>&nbsp; &nbsp;include “extern_php_code.php”;<br>&nbsp; &nbsp;echo render_footer();<br>&lt;?php &nbsp;echo “?&gt;”; ?&gt;<br><br>&lt;!-- this is again a PHP template part --&gt;<br>&lt;?php <br> &nbsp; &nbsp;echo “&lt;/div&gt;”;<br> &nbsp; &nbsp;echo “&lt;/body&gt;&lt;/html&gt;”;<br>?&gt;<br></p></div>
	</div><!--container-->
</div><!--wrapper-->






























</body>
</html>
