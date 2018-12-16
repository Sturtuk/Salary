<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Salary Slip Extractor</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Bulma Version 0.7.2-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css"/>

</head>

<body>


<section class="hero is-info is-medium is-bold">
    <div class="hero-body">
        <div class="container has-text-centered">
            <h1 class="title"> Tesseract not installed </h1>
        </div>
    </div>
</section>


<div class="container">
    <!-- START ARTICLE FEED -->
    <section class="articles">
        <div class="column is-8 is-offset-2">
            <!-- START ARTICLE -->
            <div class="card article">
                <div class="card-content">

                    <div class="content article-body">
                        <h3><a id="user-content--note-for-windows-users" class="anchor" aria-hidden="true"
                               href="#-note-for-windows-users">
                                <svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16"
                                     height="16" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path>
                                </svg>
                            </a><a target="_blank" rel="noopener noreferrer"
                                   href="https://camo.githubusercontent.com/be2f087b3b875b238dd291fb8406a87ffc32dd2b/68747470733a2f2f74686961676f616c657373696f2e616d73332e6469676974616c6f6365616e7370616365732e636f6d2f77696e646f77732d31382e737667"><img
                                        src="https://camo.githubusercontent.com/be2f087b3b875b238dd291fb8406a87ffc32dd2b/68747470733a2f2f74686961676f616c657373696f2e616d73332e6469676974616c6f6365616e7370616365732e636f6d2f77696e646f77732d31382e737667"
                                        alt=""
                                        data-canonical-src="https://thiagoalessio.ams3.digitaloceanspaces.com/windows-18.svg"
                                        style="max-width:100%;"></a> Note for Windows users
                        </h3>

                        <p>There are <a href="https://github.com/tesseract-ocr/tesseract/wiki#windows">many ways</a> to
                            install
                            <a href="https://github.com/tesseract-ocr/tesseract">Tesseract OCR</a> on your system, but
                            if you just want something quick to
                            get up and running, I recommend installing the <a
                                    href="https://chocolatey.org/packages/capture2text" rel="nofollow">Capture2Text</a>
                            package with
                            <a href="https://chocolatey.org" rel="nofollow">Chocolatey</a>.</p>

                        <pre><code>choco install capture2text --version 3.9
</code></pre>

                        <p>
                            <g-emoji class="g-emoji" alias="warning"
                                     fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/26a0.png">
                                ⚠️
                            </g-emoji>
                            Recent versions of <a href="https://chocolatey.org/packages/capture2text" rel="nofollow">Capture2Text</a>
                            stopped shipping the <code>tesseract</code> binary.
                        </p>

                        <br>

                        <h3><a id="user-content--note-for-macos-users" class="anchor" aria-hidden="true"
                               href="#-note-for-macos-users">
                                <svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16"
                                     height="16" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path>
                                </svg>
                            </a><a target="_blank" rel="noopener noreferrer"
                                   href="https://camo.githubusercontent.com/06bbf4775b446bc533bbb2d133e64dcfefdca26c/68747470733a2f2f74686961676f616c657373696f2e616d73332e6469676974616c6f6365616e7370616365732e636f6d2f6170706c652d31382e737667"><img
                                        src="https://camo.githubusercontent.com/06bbf4775b446bc533bbb2d133e64dcfefdca26c/68747470733a2f2f74686961676f616c657373696f2e616d73332e6469676974616c6f6365616e7370616365732e636f6d2f6170706c652d31382e737667"
                                        alt=""
                                        data-canonical-src="https://thiagoalessio.ams3.digitaloceanspaces.com/apple-18.svg"
                                        style="max-width:100%;"></a> Note for macOS users
                        </h3>

                        <p>With <a href="https://www.macports.org" rel="nofollow">MacPorts</a> you can install support
                            for individual languages, like so:</p>

                        <pre><code>$ sudo port install tesseract-&lt;langcode&gt;
</code></pre>
                        <p>But that is not possible with <a href="https://brew.sh" rel="nofollow">Homebrew</a>. It comes
                            only with <strong>English</strong> support
                            by default, so if you intend to use it for other language, the quickest solution
                            is to install them all:</p>
                        <pre><code>$ brew install tesseract --with-all-languages
</code></pre>
                    </div>
                </div>
            </div>

            <!-- END ARTICLE -->
        </div>
    </section>
    <!-- END ARTICLE FEED -->
</div>

</body>

</html>