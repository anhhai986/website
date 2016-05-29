<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords"  content="SiteCake, download, license, demo, template, install, " />
<meta name="description" content="Toolbar icons are easily configurable. Set them up in the text config file." />
<meta name="allow-search" content="yes" />
<meta name="robots" content="all, index, follow" />
<meta name="copyright" content="SiteCake" />
<title>Configure Toolbar Modules In SiteCake</title>
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
	
<div class="article sc-content-doc4"><h1 class="">Toolbar Module Configuration<br></h1><p class="">SiteCake toolbar can have as much or as little modules (icons under toolbar that represent content types SiteCake can use) as you need. There is a simple configuration file through which you can manage toolbar modules. It is located in /sitecake folder under name editor.cfg<br></p><p class="code">/sitecake/editor.cfg<br></p><p class="">and it looks something like this:<br></p><p class="code"># Toolbar configuration<br># Toolbar.components - the list of content type available on the toolbar<br># Possible components:<br># &nbsp;HEADING1 - text - H1<br># &nbsp;HEADING2 - text - H2<br># &nbsp;HEADING3 - text - H3<br># &nbsp;HEADING4 - text - H4<br># &nbsp;HEADING5 - text - H5<br># &nbsp;HEADING6 - text - H6<br># &nbsp;TEXT &nbsp; &nbsp; - text<br># &nbsp;TEXTLIST - text list<br># &nbsp;IMAGE &nbsp; &nbsp;- image<br># &nbsp;FLASH - any flash/swf content<br># &nbsp;VIDEO - youtube/vimeo/etc. flash/html5 video<br># &nbsp;SLIDESHOW - image slide show<br># &nbsp;MAP - google map widget<br># &nbsp;HTML - row HTML block<br># &nbsp;FILE - generic file upload<br># &nbsp;SEP - toolbar decoration separator<br>Toolbar.components = HEADING1,HEADING2,HEADING3,TEXTLIST,TEXT,SEP,IMAGE,SLIDESHOW,<br>VIDEO,SEP,FLASH,MAP,HTML,FILE<br><br># upload size limit in KB<br>FileUploaderItem.uploadSizeLimit = 8192<br><br># interface language (en, sl, sr, es, de, fr, dk, it, auto)<br>LocaleProxyImpl.interfaceLocale = en<br></p><p class="">In order to configure toolbar modules just edit Toolbar.components line and make you own selection and order. <br></p><p class="">SEP is abbrivation for separator. If you put one in the module list it will make empty space between modules. <br></p></div>
	</div><!--container-->
</div><!--wrapper-->






























</body>
</html>
