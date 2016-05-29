<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords"  content="SiteCake, download, license, demo, template, install, " />
<meta name="description" content="Adding javascript to SiteCake is easy. Though, sometimes you have to shut it off in edit mode." />
<meta name="allow-search" content="yes" />
<meta name="robots" content="all, index, follow" />
<meta name="copyright" content="SiteCake" />
<title>How To Include Custom Javascript In SiteCake </title>
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
	
<div class="article sc-content-doc999"><h1 class="">Using Javascript In Templates<br></h1><h2 class="">Summary<br></h2><ul class="inshort"><li>&nbsp;Detect edit mode with sitecakeGlobals.editMode boolean and turn your script off<br></li></ul><h2 class="">Example<br></h2><p class="">It happens that some specific javascript you want to use can make problems in SiteCake editing mode. In that case solution is to exclude that script in edit mode. There is a boolean&nbsp;sitecakeGlobals.editMode&nbsp;that you can use for edit mode detection. <br></p><p class="">So if you want to turn off some js,&nbsp; put similar script in the header of your page:&nbsp;&nbsp;<br></p><p class="code">&lt;script type="text/javascript"&gt;<br>&nbsp;&nbsp;&nbsp; $(function() {<br>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; if (window.sitecakeGlobals &amp;&amp; sitecakeGlobals.editMode !== true ) {<br>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $.getScript('js/yourscript.js');<br>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; }<br>&nbsp;&nbsp;&nbsp; });<br>&lt;/script&gt;<br>&nbsp;&nbsp;<br></p><p class="">&nbsp;<br></p><p class="">&nbsp;<br></p><p class="">&nbsp;<br></p><p class="">&nbsp;<br></p><p class="">&nbsp;<br></p><p class="">&nbsp;<br></p><p class="">&nbsp;<br></p><p class="">&nbsp;<br></p><p class="">&nbsp;<br></p><p class="">&nbsp;<br></p><p class="">&nbsp;<br></p><p class="">&nbsp;<br></p><p class="">&nbsp;<br></p><p class="">&nbsp;<br></p><p class="">&nbsp;<br></p><p class="">&nbsp;<br></p></div>	</div><!--container-->
</div><!--wrapper-->






























</body>
</html>
