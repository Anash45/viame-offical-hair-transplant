<?php
$pageTitle = $pageTitle ?? 'Official Hair Clinic';
$metaDescription = $metaDescription ?? '';
$bodyClass = $bodyClass ?? '';
$customCssVersion = $customCssVersion ?? '1.7';
$bodyClassAttr = $bodyClass !== '' ? ' class="' . htmlspecialchars($bodyClass, ENT_QUOTES, 'UTF-8') . '"' : '';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta charset="utf-8" />
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?= htmlspecialchars($metaDescription, ENT_QUOTES, 'UTF-8') ?>" />
    <meta name="author" content />

    <style>
      #preloader {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #fff;
        z-index: 999999;
      }

      #status {
        width: 200px;
        height: 200px;
        position: absolute;
        left: 50%;
        top: 50%;
        background-image: url(images/icon.png);
        background-repeat: no-repeat;
        background-position: center;
        margin: -100px 0 0 -100px;
      }

      #status p {
        text-align: center;
      }
    </style>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/383424c9ed.js" crossorigin="anonymous"></script>
    <link href="css/prettyPhoto.css" rel="stylesheet" />
    <link href="css/supersized.css" rel="stylesheet" />
    <link href="css/supersized.shutter.css" rel="stylesheet" />
    <link href="css/style-video.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/custom.css?ver=<?= htmlspecialchars($customCssVersion, ENT_QUOTES, 'UTF-8') ?>" />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,700"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=PT+Sans&amp;subset=latin,cyrillic"
      rel="stylesheet"
      type="text/css"
    />
    <!--[if lt IE 9]>
      <script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link
      rel="apple-touch-icon-precomposed"
      sizes="144x144"
      href="images/icon.png"
    />
    <link
      rel="apple-touch-icon-precomposed"
      sizes="114x114"
      href="images/icon.png"
    />
    <link
      rel="apple-touch-icon-precomposed"
      sizes="72x72"
      href="images/icon.png"
    />
    <link rel="apple-touch-icon-precomposed" href="images/icon.png" />
    <link rel="shortcut icon" href="images/icon.png" />
  </head>

  <body<?= $bodyClassAttr ?>>
    <div id="preloader">
      <div id="status"></div>
    </div>

    <section id="home" class="clearfix">
