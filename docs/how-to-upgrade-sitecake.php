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
                <h1>How To Upgrade Sitecake</h1>
            </div>
            <div class="col-xs-12 col-md-9 push-md-3 sc-content">
                <h2>Summary</h2>
                <ul>
                   <li>delete old /sitecake folder</li>
                    <li>upload new /sitecake folder</li>
                </ul>
                <h2>Server Side Folder Structure</h2>
                <p>Once you managed to <a href="http://sitecake.com/install.html">install Sitecake</a> on your hosting, you will have this folder on the server</p>
                <p class="code">/sitecake</p>
                <p>folder on the hosting. The first time you log in and start editing your template Sitecake will add another folder where it will keep all the changes you make while editing. It will look like this:</p>
                <p class="code">/sitecake<br>
    /sitecake-content</p>
               <p>If you messed something so badly that you want to start editing your site from the beggining, just delete /sitecake-content folder. SC will create new one and pull default content, from your template pages </p>
                <h2>Upgrading</h2>
                <p>It may happen that you want to update your Sitecake version (at least now, at the beginning, we are fixing bugs and improving SC all the time). All you need to do is to delete your /sitecake folder and replace it with the new one, from the new release. All the editing you made is safe in /sitecake-content folder.</p>
                <p>In the future we will make this update process automatic, probably you wouldn't know about it at all.</p>

            </div>
            <div class="sidebar col-xs-12 col-md-3 pull-md-9 sc-content-sidebar">
                <ul class="list-unstyled">
                    <li>Developer's Guide:</li>
                    <li><a href="install.php">Getting started</a></li>
                    <li><a href="docs-basics.php">Sitecake Basics</a></li>
                    <li><a href="docs-templates.php">Sitecake Templates</a></li>
                    <li><a href="docs-user-styles.php">User styles</a></li>
                    <li><a class="active" href="how-to-upgrade-sitecake.php">Upgrade to a new version</a></li>
                    <li><a href="repeating-regions.php">Creating repeating regions</a></li>
                    <li><a href="include-javascript-with-sitecake-template.php">Using Javascript in templates</a></li>                    
                    <li><a href="toolbar-module-configuration.php">Toolbar module configuration</a></li>
                    <li><a href="how-to-change-sitecake-ui-language.php">Changing Sitecake UI language</a></li>
                </ul>
            </div>


        </div>


        <!-- //DOCUMENTATION CONTENT -->


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