<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords"  content="SiteCake, change, language, UI, localisation, interface, interface localization, SiteCake localization, multilanguage" />
<meta name="description" content="Language change of complete SiteCake interface" />
<meta name="allow-search" content="yes" />
<meta name="robots" content="all, index, follow" />
<meta name="copyright" content="SiteCake" />
<title>Change Language Of The SiteCake User Interface</title>
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
	
<div class="article sc-content-changelanguage"><h1 class="">Changing UI Language<br></h1><p class="">SiteCake provides a possibility to switch between supported languages used for the interface (icons and button labels, text messages, etc.).<br></p><p class="">At the moment the following languages are supported:<br></p><ul><li>English (en)</li><li>Spanish (es)</li><li>Russian (ru)</li><li>German (de)</li><li>French (fr)</li><li>Italian (it)</li><li>Danish (dk)</li><li>Czech (cs)<br></li><li>Slovenian (sl)<br></li><li>Serbian (sr)<br></li><li>Slovak (sk)</li><li>Portuguese (pt)</li><li>Portuguese Brazil (pt-br)<br></li><li>Turkish (tr)</li><li>Norwegian (nn)</li><li>Dutch (nl)</li></ul><p class="">The interface language is specified setting the <strong>LocaleProxyImpl.interfaceLocale</strong> configuration paramter (in the editor.cfg file). <br></p><p class="code"># interface language (en, sl, sr, es, de, fr, dk, it, ru, cs, sk, pt, pt-br, nl, tr, nn, auto)<br>LocaleProxyImpl.interfaceLocale = en<br></p><p class="">It can be set to either the 2-letter language code (ISO 639-2 Language Codes) of a supported language or to the ‘auto’ option.<br></p><p class="">In case the auto option is set, the interface language is selected either by the GET parameter scln, if it is presented, or by the browser (or system) language settings.<br></p><p class="">The following is an example of URL for accessing a SiteCake-enabled page selecting English as the interface language by the scln paramter, where the LocaleProxyImpl.interfaceLocale is set to ‘auto’’:<br></p><p class="code">http://example.com/about.html?scln=en<br></p><p class="">&nbsp;<br></p><p class="">&nbsp;<br></p><p class="">&nbsp;<br></p><p class="">&nbsp;<br></p><p class="">&nbsp;<br></p><p class="">&nbsp;<br></p><p class="">&nbsp;<br></p><p class="">&nbsp;<br></p><p class="">&nbsp;<br></p><p class=""><br></p></div>	</div><!--container-->
</div><!--wrapper-->






























</body>
</html>
