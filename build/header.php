<?php
if(isset($_GET['page'])) {
  $page = htmlspecialchars($_GET["page"]);
} else {
  $page = "";
} ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php if($page == "show"){echo "Better Call Saul | ";} ?>TheTVDB.com</title>
    <script src="https://use.typekit.net/cwp7kof.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <link rel="stylesheet" href="/assets/css/styles.css">
    <script src="/assets/js/plugins.js" charset="utf-8"></script>
    <script src="/assets/js/app.js" charset="utf-8"></script>
  </head>
  <body>
    <header class="tv-header <?php if($page == "show"){echo "show";} else { echo "home";} ?>">
      <img class="tv-header--background" src="/assets/images/teaser.png" alt="Teaser">
      <div class="tv-header--intro">
        <div class="tv-wrapper">
          <a href="/">
            <svg class="icon"><use xlink:href="/assets/svgsprites/symbol/svg/sprite.symbol.svg#TheTVDB" /></svg>
            <span>An open database for television</span>
          </a>
          <?php if($page != "show") : ?>
            <p>Welcome to TheTVDB.com. This site is an open database that can be modified by anybody. Please click on login in the navigation to get an account. All content and images on the site have been contributed by our users, and are licensed under a <a href="#">Creative Commons Attribution-NonCommercial 4.0 International License</a>.</p>
            <p>This site also has a <a href="#">full XML API</a> that allows other software and websites to use this information. The API is currently being used by the <a href="#">myTV add-in for Windows Media Center</a>, <a href="#">Kodi</a>, <a href="#">the meeTVshows and TVNight plugins</a> for <a href="#">Meedio</a>, the MP-TVSeries plugin for MediaPortal, Numote (iPhone/Android app and set-top device), and many more.</p>
            <p>If you find this site useful, please consider <a href="#">donating</a>.</p>
          <?php endif; ?>
        </div>
      </div>
      <nav id="nav" class="tv-header--nav">
        <div class="tv-wrapper">
          <svg class="icon tv-header--mobilemenu"><use xlink:href="/assets/svgsprites/symbol/svg/sprite.symbol.svg#icon-menu" /></svg>
          <svg class="icon tv-header--mobilelogo"><use xlink:href="/assets/svgsprites/symbol/svg/sprite.symbol.svg#TheTVDB" /></svg>
          <ul>
            <li class="tv-header--nav---logo"><svg class="icon"><use xlink:href="/assets/svgsprites/symbol/svg/sprite.symbol.svg#TheTVDB" /></svg></li>
            <li>Home</li>
            <li>Search</li>
            <li>Reports</li>
            <li>Donate</li>
            <li>Sponsors</li>
            <li>Forums</li>
            <li>Login</li>
          </ul>

          <input class="tv-header--search" type="text" name="name" placeholder="Search TheTVDB…">
        </div>
      </nav>
    </header>
