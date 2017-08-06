<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
    <?= css('assets/css/screen.css') ?>

    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
    <header role="banner">
      <section>
      <a id="logo" href="/"><?= (new Asset("assets/images/tls-logo.png")) ?></a>
      <nav>
        <a><span>ABOUT US</span></a>
        <a><span>LOAN PROCESS</span></a>
        <a><span>LOAN PROGRAMS</span></a>
        <a><span>TOOLS</span></a>
        <a><span>FAQs</span></a>
        <a><span>CONTACT US</span></a>
      </nav>
      </section>
    </header>
