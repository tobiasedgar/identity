<!DOCTYPE html>
<html lang="en">
	<!--    
	    Built by: 
    _   _________       __   ________________  ____  ______________  ______  __
   / | / / ____/ |     / /  /_  __/ ____/ __ \/ __ \/  _/_  __/ __ \/ __ \ \/ /
  /  |/ / __/  | | /| / /    / / / __/ / /_/ / /_/ // /  / / / / / / /_/ /\  / 
 / /|  / /___  | |/ |/ /    / / / /___/ _, _/ _, _// /  / / / /_/ / _, _/ / /  
/_/ |_/_____/  |__/|__/    /_/ /_____/_/ |_/_/ |_/___/ /_/  \____/_/ |_| /_/   

	© New Territory LTD 2020
    NewTerritory.Studio  

    Developed by Tobias Edgar
-->        

<head>
  <?php snippet('head/meta') ?>
  <?php snippet('head/google-site-verification') ?>
  <?php snippet('head/title') ?>
  <?php snippet('head/css') ?>
  <?php snippet('head/favicon') ?>
  <?php snippet('head/analytics') ?>
  <link rel="preload" href="fonts/PxGroteskRegular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="fonts/DrukWide-Super.woff2" as="font" type="font/woff2" crossorigin>
</head>

<body data-template="<?= $page->template(); ?>">
  <div class="page-content">

<!-- intor overlays -->
  <div class="intro__overlay__one"></div>
  <div class="intro__overlay__two"></div>
  <div class="intro__overlay__three"></div>

  <div class="intro__text">
    <p>More Hair. More Confidence</p>
  </div>

  <!-- nav overlay -->
  <div class="overlay-nav overlay__hidden">
    <div class="overlay-content">

      <header class="overlay-header">
        <div class="overlay-title"> <h2 class="text__size__header__small"><?= $site->title(); ?></h2></div>
        <button class="overlay-exit" aria-label="Menu Toggle Close"><h3 class="text__size__large">X</h3></button>
      </header>

      <nav class="menu">
        
        <ul>
          <?php foreach ($site->children()->listed() as $item): ?>
           
            <li><a href="<?= $item->url(); ?>" class="menu-item" aria-label="Menu Item for <?= $item->title()?>">
              <h3 class="text__size__medium"><?= $item->title()->upper(); ?></h3>
            </a></li>
          
            <?php endforeach ?>
        </ul>

      </nav>

      <div class="overlay-contact">
        <?php $telephone = $site->telephone()->html() ?>
        <?php $email = $site->email()->html() ?>
        <?php $address = $site->address()->html() ?>
        <?php if ($address->isNotEmpty()) : ?>
        <p class="text__size__copy"> <?= $address; ?> </p>
        <?php endif ?>
        <?php if ($telephone->isNotEmpty()) : ?>
        <a href="tel:<?= $telephone; ?>" aria-label="Link to Phone"><p class="text__size__copy"> <?= $telephone; ?> </p></a>
        <?php endif ?>
        <?php if ($email->isNotEmpty()) : ?>
        <a href="mailto:<?= $email ?>" aria-label="Link to Email"><p class="text__size__copy"> <?= $email; ?> </p></a>
        <?php endif?>
        <br>
          
      </div>

    </div>
  </div>

  <header class="header"> 
    <div class="header-title">
      <h1 class="text__size__header"> <?= $site->title() ?> </h1>
    </div>
  </header>
  <div class="header-logo" onclick="logoClick()" aria-label="Menu toggle">
    
  <?php snippet('media', ['field' => $site->logoImage()])
  ?>
  
  </div>

  <div class="main">