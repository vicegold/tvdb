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
  </head>
  <body>
    <header class="tv-header <?php if($page == "show"){echo "show";} ?>">
      <img class="tv-header--background" src="/assets/images/teaser.png" alt="Teaser">
      <div class="tv-header--intro">
        <div class="tv-wrapper">
          <svg class="icon"><use xlink:href="/assets/svgsprites/symbol/svg/sprite.symbol.svg#TheTVDB" /></svg>
          <span>An open database for television</span>
          <?php if($page == "home") : ?>
            <p>Welcome to TheTVDB.com. This site is an open database that can be modified by anybody. Please click on login in the navigation to get an account. All content and images on the site have been contributed by our users, and are licensed under a <a href="#">Creative Commons Attribution-NonCommercial 4.0 International License</a>.</p>
            <p>This site also has a <a href="#">full XML API</a> that allows other software and websites to use this information. The API is currently being used by the <a href="#">myTV add-in for Windows Media Center</a>, <a href="#">Kodi</a>, <a href="#">the meeTVshows and TVNight plugins</a> for <a href="#">Meedio</a>, the MP-TVSeries plugin for MediaPortal, Numote (iPhone/Android app and set-top device), and many more.</p>
            <p>If you find this site useful, please consider <a href="#">donating</a>.</p>
          <?php endif; ?>
        </div>
      </div>
      <nav class="tv-header--nav">
        <div class="tv-wrapper">
          <ul>
            <li class="active">Home</li>
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
