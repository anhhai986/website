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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
    <!-- Font's -->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/fonts.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="../css/main.css" type="text/css">

    <!-- Favicons -->
    <link rel="shortcut icon" href="..img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="..img/favicon.ico" type="image/x-icon">
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
    <meta name="msapplication-TileImage" content="/img/favicon/mstile-144x144.png?v=yy0966qJGm">
    <meta name="msapplication-config" content="/img/favicon/browserconfig.xml?v=yy0966qJGm">
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
    <!-- Start Header -->
    <div class="container">

        <nav>
            <ul class="nav">
                <li class="pull-xs-none pull-sm-left">
                    <a class="navbar-brand" href="../index.html"><img src="../img/sitecake-logo-small.png" alt="Sitecake logo" title="Sitecake homepage" /></a>
                </li>
                <li class="pull-xs-right pull-sm-right">
                    <a class="nav-link download" href="../download.html" title="Download Sitecake">Download</a>
                </li>

                <li class="pull-xs-right pull-sm-right">
                    <a class="nav-link" href="http://forum.sitecake.com" title="Sitecake community" target="_blank">Forum</a>
                </li>


                <li class="pull-xs-right pull-sm-right">
                    <a class="nav-link" href="https://github.com/sitecake/sitecake/wiki/Getting-Started" title="Go to Github wiki">Docs</a>
                </li>

                <li class="pull-xs-right pull-sm-right">
                    <a class="nav-link" href="../featured.html" title="Featured websites">Featured</a>
                </li>
            </ul>
        </nav>



        <!-- DOCUMENTATION CONTENT -->

        <div class="row">
            <div class="col-xs-12 col-md-9 offset-md-3 sc-content">
                <h1>Sitecake Templates</h1>
            </div>
            <div class="col-xs-12 col-md-9 push-md-3 sc-content">
                <h2>Introduction</h2>
                <p>Sitecake template is, actually, a simple static HTML site. It just has to satisfy few extra rules to be used as Sitecake template.</p>
                <p>Sitecake is not using any kind of special template language/script. HTML markup is quite enough for it. That's an advantage for designers who don't need to learn a new template script and can leverage their existing knowledge.</p>
                <p>Let's explore the details.</p>

                <h2>Template and Template pages</h2>
                <p>A template is a collection of HTML pages and accompanying resources such as CSS files, fonts, images and anything a static HTML site could contain.</p>
                <p>A template page is a HTML file managed by Sitecake.</p>

                <h2>Template</h2>

                <h3>Template Structure</h3> All template pages have to be in the template root folder and to have <em>.html</em> extension. At least one HTML file has to be present in the template root folder. A template can contain additional HTML files in subfolders but they are ignored by the CMS. Also, some of the HTML files in the template root folder could be excluded from being managed by the CMS (see below).
                <p>The following is an example of a simple template.</p>
                <p class="code">&lt;template root&gt;/
                    <br> ├── css/
                    <br> │ ├── normalize.css
                    <br> │ └── style.css
                    <br> ├── images/
                    <br> │ ├── logo.png
                    <br> │ ├── banner.jpg
                    <br> │ └── sprites.png
                    <br> ├── js/
                    <br> │ ├── modernizr.js
                    <br> │ └── jquery.js
                    <br> ├── index.html
                    <br> ├── about.html
                    <br> └── contact.html</p>
                <p>It has three template pages and folders with CSS, image and JavaScript files. Pretty usual, isn't it?</p>

                <h3>Excluding Template Pages</h3>
                <p>Some of template pages could be excluded from being managed by the CMS. This could be done enlisting those page file names in a special file - <em>.scignore</em>. This file has to be placed in the template root folder.</p>

                <p>For example, in the following template (five template pages):</p>
                <p class="code">&lt;template root&gt;/
                    <br> ├── css/
                    <br> ├── images/
                    <br> ├── js/
                    <br> ├── index.html
                    <br> ├── about.html
                    <br> ├── contact.html
                    <br> ├── special.html
                    <br> ├── special2.html
                    <br> └── .scignore</p>

                <p>if the content of <em>.scignore</em> was as follows:</p>

                <p class="code">special2.html
                    <br> special.html
                </p>

                <h3>Template Page</h3>
                <p>A template page is a plain HTML page. It has to be a valid HTML document..</p>
                <p>Currently Sitecake does not support PHP code to be included in template pages, but that is a planned feature.</p>

                <h3>Content Containers</h3>
                <p>A content container is a part of page template that contains user defined content. Basically content containers are editable parts of a page template.</p>
                <p>Every container contains an array of content items. A container cannot contain anything else, like layout elements (additional HTML structures or tags for organising the items layout)..</p>
                <p>In a template, the existing HTML code within content containers is used as the default (initial) content..</p>
                <p>There are two types of content containers:</p>

                <ul>
                    <li>anonymous content containers (or just content containers) and</li>
                    <li>named content containers</li>
                </ul>

                <p><strong>Anonymous</strong> containers are, simply, editable parts of a page template.</p>
                <p>In other hand, <strong>named</strong> containers have attached a name and act as content repeaters. If several template pages defined a named container with the same name, Sitecake would copy (synchronised) their content.</p>

                <h3>Defining Content Containers</h3>
                <p>Content containers are defined using a reserved CSS class name <em>sc-content</em> for <em>&lt;div&gt;</em> tags that should contain user-defined content.</p>
                <p>For named containers, the CSS class name has to be extended with their names (<em>sc-content-a_name</em>).</p>
                <p>Sitecake does not support nested content containers currently.</p>
                <p>The following code block is a simple example of a template page that defines a named container (<em>sc-content-footer</em>) and two anonymous containers (marked with <em>sc-content</em>).</p>

                <p class="code">
                    &lt;html&gt;
                    <br> &nbsp;&nbsp;&lt;body&gt;
                    <br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="row"&gt;
                    <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="col sc-content"&gt;
                    <br> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&lt;h1&gt;Left column&lt;/h1&gt;
                    <br> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;Left column text&lt;/p&gt;
                    <br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;
                    <br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="col sc-content"&gt;
                    <br> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&lt;h1&gt;Right column&lt;/h1&gt;
                    <br> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;Right column text&lt;/p&gt;
                    <br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;
                    <br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;
                    <br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="footer sc-content-footer"&gt;
                    <br> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;This is the site footer present on all pages&lt;/p&gt;
                    <br> &nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;
                    <br> &nbsp;&nbsp;&lt;/body&gt;
                    <br> &lt;/html&gt;
                </p>


            </div>
            <div class="sidebar col-xs-12 col-md-3 pull-md-9 m-t-3 sc-content-sidebar">
                <ul class="list-unstyled">
                    <li>Developer's Guide:</li>
                    <li><a href="install.php">Getting started</a></li>
                    <li><a href="docs-basics.php">Sitecake Basics</a></li>
                    <li><a class="active" href="docs-templates.php">Sitecake Templates</a></li>
                    <li><a href="docs-user-styles.php">User styles</a></li>
                    <li><a href="how-to-upgrade-sitecake.php">Upgrade to a new version</a></li>
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
                            <a href="https://github.com/sitecake/sitecake/wiki/Getting-Started" title="Sitecake v2 docs">Sitecake v2 docs</a>
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