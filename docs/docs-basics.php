<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="Sitecake, documentation" />
    <title>Sitecake Documentation</title>
    <meta name="description" content="" />
    <meta name="city" content="New York" />
    <meta name="country" content="US" />
    <meta name="allow-search" content="yes" />
    <meta name="robots" content="all, index, follow" />
    <meta name="copyright" content="Sitecake" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!--Lato font from Google Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="../css/main.css" type="text/css">

    <!-- Favicons -->
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="57x57" href="../img/favicon/apple-touch-icon-57x57.png?v=yy0966qJGm">
    <link rel="apple-touch-icon" sizes="60x60" href="../img/favicon/apple-touch-icon-60x60.png?v=yy0966qJGm">
    <link rel="apple-touch-icon" sizes="72x72" href="../img/favicon/apple-touch-icon-72x72.png?v=yy0966qJGm">
    <link rel="apple-touch-icon" sizes="76x76" href="../img/favicon/apple-touch-icon-76x76.png?v=yy0966qJGm">
    <link rel="apple-touch-icon" sizes="114x114" href="../img/favicon/apple-touch-icon-114x114.png?v=yy0966qJGm">
    <link rel="apple-touch-icon" sizes="120x120" href="../img/favicon/apple-touch-icon-120x120.png?v=yy0966qJGm">
    <link rel="apple-touch-icon" sizes="144x144" href="../img/favicon/apple-touch-icon-144x144.png?v=yy0966qJGm">
    <link rel="apple-touch-icon" sizes="152x152" href="../img/favicon/apple-touch-icon-152x152.png?v=yy0966qJGm">
    <link rel="apple-touch-icon" sizes="180x180" href="../img/favicon/apple-touch-icon-180x180.png?v=yy0966qJGm">
    <link rel="icon" type="image/png" href="../img/favicon/favicon-32x32.png?v=yy0966qJGm" sizes="32x32">
    <link rel="icon" type="image/png" href="../img/favicon/favicon-194x194.png?v=yy0966qJGm" sizes="194x194">
    <link rel="icon" type="image/png" href="../img/favicon/favicon-96x96.png?v=yy0966qJGm" sizes="96x96">
    <link rel="icon" type="image/png" href="../img/favicon/android-chrome-192x192.png?v=yy0966qJGm" sizes="192x192">
    <link rel="icon" type="image/png" href="../img/favicon/favicon-16x16.png?v=yy0966qJGm" sizes="16x16">
    <link rel="manifest" href="../img/favicon/manifest.json?v=yy0966qJGm">
    <link rel="shortcut icon" href="../img/favicon/favicon.ico?v=yy0966qJGm">
    <meta name="msapplication-TileColor" content="#61cae9">
    <meta name="msapplication-TileImage" content="img/favicon/mstile-144x144.png?v=yy0966qJGm">
    <meta name="msapplication-config" content="img/favicon/browserconfig.xml?v=yy0966qJGm">
    <meta name="theme-color" content="#61cae9">

    <!-- Facebook Pixel Code -->
    <script>
        ! function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', '//connect.facebook.net/en_US/fbevents.js');

        fbq('init', '224938111181968');
        fbq('track', "PageView");
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=224938111181968&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->


    <script type="text/javascript">
        (function (e, t) {
            function r(e, t) {
                e[t] = function () {
                    e.push([t].concat(Array.prototype.slice.call(arguments, 0)));
                };
            }
            var n = "JacoRecorder";
            (function (e, t, i, s) {
                if (!i.__VERSION) {
                    e[n] = i;
                    var o = ["init", "identify", "startRecording", "stopRecording", "removeUserTracking", "setUserInfo"];
                    for (var u = 0; u < o.length; u++) r(i, o[u]);
                    i.__VERSION = .9, i.__INIT_TIME = 1 * new Date;
                    var a = t.createElement("script");
                    a.async = !0, a.setAttribute("crossorigin", "anonymous"), a.src = s;
                    var f = t.getElementsByTagName("head")[0];
                    f.appendChild(a);
                }
            })(e, t, e[n] || [], "//recorder-assets.getjaco.com/recorder.js");
        }).call(window, window, document), window.JacoRecorder.push(["init", "de125860-47b2-4e8e-a5b8-4af522df9268", {}]);
    </script>

</head>


<body class="documentation">

    <div class="container">

        <nav>
            <!-- Header Nav -->
            <ul class="nav">
                <li class="pull-xs-none pull-sm-left">
                    <a class="navbar-brand" href="http://sitecake.com"><img src="../img/sitecake-logo-small.png" alt="Sitecake logo" title="Sitecake homepage" /></a>
                </li>
                <li class="pull-xs-right pull-sm-right">
                    <a class="nav-link download" href="../download.html" title="Download Sitecake">Download</a>
                </li>

                <li class="pull-xs-right pull-sm-right">
                    <a class="nav-link" href="http://forum.sitecake.com" title="Sitecake community" target="_blank">Forum</a>
                </li>


                <li class="pull-xs-right pull-sm-right">
                    <a class="nav-link" href="http://sitecake.com/docs/install.html" title="Sitecake documentation">Docs</a>
                </li>

                <li class="pull-xs-right pull-sm-right">
                    <a class="nav-link" href="../templates.html" title="Sitecake templates">Templates</a>
                </li>
            </ul>
        </nav>



        <!-- DOCUMENTATION CONTENT -->

        <div class="row">
            <div class="col-xs-12 col-md-9 offset-md-3 sc-content">
                <h1>Sitecake Basics</h1>
            </div>
            <div class="col-xs-12 col-md-9 push-md-3 sc-content">
                <h2>General</h2>
                <p>Sitecake is a CMS for small business and personal web sites, landing pages, profile pages and for web sites that have few, simply organised pages.</p>
                <p>Sitecake consists of two parts:</p>
                <ul>
                    <li><a target="_blank" href="http://github.com/sitecake/sitecake-editor">Sitecake Editor</a>, that manages your page in the browser</li>
                    <li><a target="_blank" href="https://github.com/sitecake/sitecake">Sitecake</a>, a CMS that runs on the server side and that saves content, manages files, etc.</li>
                </ul>
                <p>Sitecake is implemented in PHP (it requires PHP 5.4+) using libraries <a target="_blank" href="http://silex.sensiolabs.org/">Silex</a>, <a target="_blank" href="http://code.google.com/p/phpquery/">phpQuery</a>, <a target="_blank" href="http://wideimage.sourceforge.net/">WideImage</a>, <a target="_blank" href="http://www.phpconcept.net/pclzip/">PclZip</a>, <a target="_blank" href="https://github.com/thephpleague/flysystem">FlySystem</a> and <a target="_blank" href="http://github.com/sebastianbergmann/phpunit">PHPUnit</a>.</p>
                <p>It is developed as a flat file CMS, meaning no database is required for its functioning. This approach simplifies the CMS setup and maintenance but, still, provides a performant solution considering its target application. Thanks to the relatively moderate requirements, it is expected to work on most web hosting environments.</p>
                <p>Sitecke does not use any specific template language/script for website page templates. It uses plain HTML markup for that purpose. More details about templates could be found <a target="_blank" href="http://sitecake.com/docs/install.html/Sitecake-Templates">here</a>.</p>
                <p>Sitecake could be seen as a 'static' HTML site editor. It enables users to edit the content of HTML files directly on the web server, using a WYSIWYG, all drag&amp;drop editor (rather than a text editor). The CMS is developed in a way that allows users to remove the CMS completely (simply by deleting a folder), to restore/install it at any time (by uploading a folder) or to manually edit HTML pages while the CMS is in place. The web site edited by Sitecake could be moved from one web hosting to another, either with or without the CMS installed.</p>

                <h2>Installation</h2>
                <p>Sitecake CMS is distributed as a single zip archive - <em>sitecake-&lt;version&gt;.zip.</em> When extracted, it looks like this: </p>

                <p class="code">sitecake/ sitecake.php
                </p>

                <p>The <em>sitecake</em> folder contains all the CMS code and configurations and <em>sitecake.php</em> is used as the entry point to CMS.
                    <br>
                    <br> The content of the archive should be uploaded to the website root folder. For a simple website (or Sitecake template), the website root folder might look like this:</p>
                <p class="code">
                    &lt;website root&gt;/
                    <br> ├── css/
                    <br> ├── img/
                    <br> ├── js/
                    <br> ├── sitecake/
                    <br> ├── index.html
                    <br> ├── about.html
                    <br> ├── contact.html
                    <br> └── sitecake.php</p>

                <h2>Configuration</h2>
                <p>All configuration options are located under the <em>sitecake</em> folder.</p>

                <p class="code">
                    &lt;sitecake&gt;/
                    <br> ├── &lt;version&gt;/
                    <br> │ ├── client/
                    <br> │ └── server/
                    <br> │ ├── ...
                    <br> │ └── config.php
                    <br> ├── credentials.php.default
                    <br> ├── credentials.php
                    <br> └── editor.cfg</p>

                <p>There are three configuration files:</p>

                <ul>
                    <li><em>sitecake/credentials.php</em> - contains the CMS admin password.</li>
                    <li><em>sitecake/editor.cfg</em> - the Sitecake Editor configuration options.</li>
                    <li><em>sitecake/&lt;version&gt;/server/config.php</em> - the CMS configuration options.</li>
                </ul>

                <h2>Admin password</h2>
                <p>The <em>credentials.php</em> file contains only the CMS admin password. The password is kept on the server only as a SHA1 hash. This is how it looks like:</p>

                <p class="code">&lt;?php $credentials = "d033e22ae348aeb5660fc2140aec35850c4da997"; ?&gt;</p>

                <p>The password is usually changed using the <em>change password</em> dialog in the Sitecake Editor (the login dialog).</p>
                <p>A new password could be set manually by editing the <em>credentials.php</em> file. The SHA1 hash (characters between double quotes) should be replaced by a new SHA1 hash value. A new hash could be obtained, for example, using any online SHA1 encoder tool (e.g. <a target="_blank" href="http://www.sha1-online.com/">SHA1 Online</a>).</p>
                <p>The admin password could be reset by replacing <em>credentials.php</em> with <em>credentials.php.default.</em></p>

                <h2>Sitecake Editor configuration</h2>
                <p>The <em>editor.cfg</em> file contains configuration options for the Sitecake Editor. More about possible configurations could be found <a target="_blank" href="https://github.com/sitecake/sitecake-editor/wiki/Editor-configuration-file">here</a>.</p>

                <h2>CMS configuration</h2>
                <p>The <em>config.php</em> file contains Sitecake CMS configuration options.</p>

            </div>
            <div class="sidebar col-xs-12 col-md-3 pull-md-9 sc-content-sidebar">
                <ul class="list-unstyled">
                    <li>Developer's Guide:</li>
                    <li><a href="install.php">Getting started</a></li>
                    <li><a class="active" href="docs-basics.php">Sitecake Basics</a></li>
                    <li><a href="docs-templates.php">Sitecake Templates</a></li>
                    <li><a href="docs-user-styles.php">User styles</a></li>
                    <li><a href="how-to-upgrade-sitecake.php">Upgrade to a new version</a></li>
                    <li><a href="repeating-regions.php">Creating repeating regions</a></li>
                    <li><a href="include-javascript-with-sitecake-template.php">Using Javascript in templates</a></li>
                    <li><a href="toolbar-module-configuration.php">Toolbar module configuration</a></li>
                    <li><a href="how-to-change-sitecake-ui-language.php">Changing Sitecake UI language</a></li>
                </ul>
            </div>


        </div>



    </div>
    <!--container-->


    <!-- Start Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-3">
                    <dl>
                        <dt>Help &amp; Support</dt>
                        <dd>
                            <a href="http://sitecake.com/docs/install.html" title="Sitecake v2 docs">Sitecake v2 docs</a>
                        </dd>
                        <dd>
                            <a href="install.html" title="Sitecake v1 docs">Sitecake v1 docs</a>
                        </dd>
                        <dd>
                            <a href="http://support.sitecake.com">Send a ticket</a>
                        </dd>
                    </dl>
                </div>
                <div class="col-xs-3">
                    <dl>
                        <dt>News &amp; Info</dt>
                        <dd>
                            <a href="https://twitter.com/sitecake">Twitter</a>
                        </dd>
                    </dl>
                </div>
                <div class="col-xs-3">
                    <dl>
                        <dt>Resources</dt>
                        <dd>
                            <a href="../featured.html" title="Featured websites">Featured websites</a>
                        </dd>
                        <dd>
                            <a href="../hosting.html" title="Recommended hosting for Sitecake">Sitecake hosting</a>
                        </dd>
                    </dl>

                </div>
                <div class="col-xs-3">
                    <dt>Follow us</dt>
                    <ul class="footer-social">
                        <li>
                            <a href="https://twitter.com/sitecake">
                                <img src="../img/footer-social-twitter.png" alt="footer-social-twitter" />
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/sitecake" title="Sitecake repo">
                                <img src="../img/footer-social-github.png" alt="footer-social-github" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--Footer-->

    <!-- Google Code for Remarketing Tag -->
    <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = 948703456;
        var google_custom_params = window.google_tag_params;
        var google_remarketing_only = true;
        /* ]]> */
    </script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
    </script>
    <noscript>
        <div style="display:inline;">
            <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/948703456/?value=0&amp;guid=ON&amp;script=0" />
        </div>
    </noscript>


</body>

</html>