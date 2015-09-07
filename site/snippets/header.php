<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css(array(
    'modules/bootstrap/css/bootstrap.css',
    'assets/css/main.min.css'
  )) ?>

</head>
<body>

<nav class="navbar navbar-fixed-top navbar-dark bg-inverse">
  <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#topNavbar">
    &#9776;
  </button>
  <div class="container collapse navbar-toggleable-xs" id="topNavbar">
    <ul class="nav navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#work">Work</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#blog">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
    </ul>
  </div>
</nav>
