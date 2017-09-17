<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <?= css('assets/css/main.css') ?>

</head>
    
<?php if($bodyclass): ?>
    <body class="<?= $bodyclass ?>">
<?php else: ?>
    <body class="single">
<?php endif ?>
    
<!-- Header -->
        <?php if($bodyclass == "landing"): ?>
            <header id="header" class="alt">
        <?php else: ?>
            <header id="header">
            <h1><a href="<?= $site->url() ?>"><strong>Corrimal</strong> SLSC</a></h1>
        <?php endif ?>
        <nav id="nav">
            <ul>
                <?php foreach($site->pages()->visible() as $item): ?>
                    <li><a<?php e($item->isOpen(), ' class="active"') ?> href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a></li>
                <?php endforeach ?>
            </ul>
        </nav>
    </header>
    
    <a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>