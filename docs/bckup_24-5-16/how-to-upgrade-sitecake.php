<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords"  content="SiteCake, upgrading, upgrade, license, demo, template, free, licensed " />
<meta name="description" content="How to upgrade SiteCake with new version. Upgrading from free to licensed version" />
<meta name="allow-search" content="yes" />
<meta name="robots" content="all, index, follow" />
<meta name="copyright" content="SiteCake" />
<title>How To Upgrade SiteCake</title>
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
	
<div class="article sc-content-doc1"><h1 class="">How To Upgrade Sitecake<br></h1><h2 class="">Summary<br></h2><ul class="inshort"><li>delete old /sitecake folder</li><li>upload new /sitecake folder&nbsp;</li></ul><h2 class="">Server Side Folder Structure<br></h2><p class="">Once you managed to <a href="http://sitecake.com/install.html">install SiteCake </a>on your hosting, you will have this folder on the server<br></p><p class="code">/sitecake<br></p><p class="">folder on the hosting. The first time you log in and start editing your template SiteCake will add another folder where it will keep all the changes you make while editing. It will look like this:<br></p><p class="code">/sitecake<br>/sitecake-content<br></p><p class="">If you messed something so badly that you want to start editing your site from the beggining, just delete /sitecake-content folder. SC will create new one and pull default content, from your template pages&nbsp;<br></p><h2 class="">Upgrading<br></h2><p class="">It may happen that you want to update your SiteCake version (at least now, at the beginning, we are fixing bugs and improving SC all the time). All you need to do is to delete your /sitecake folder and replace it with the new one, from the new release. All the editing you made is safe in /sitecake-content folder.<br></p><p class="">In the future we will make this update process automatic, probably you wouldn't know about it at all.&nbsp;<br></p><p class=""> <br></p><p class=""> <br></p></div>	</div><!--container-->
</div><!--wrapper-->






























</body>
</html>
