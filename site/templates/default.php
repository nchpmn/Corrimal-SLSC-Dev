<?php snippet('header') ?>

<!-- Main -->

<section id="main" class="wrapper">
    <div class="container">
        <header class="major special">
            <h2><?= $page->title() ?></h2>
            <?php if($page->subtitle()!=""): ?>
            <p><?= $page->subtitle() ?></p>
            <?php endif ?>
        </header>
        
        <?php if($page->featimage()->toFile()): ?>
        <div class="image fit">
            <?= $page->featimage()->toFile()->crop(788,281); ?>
        </div>
        <?php endif ?>
        
        <?php echo $page->text()->kirbytext() ?>
        
    </div>
</section>

<!-- End Main -->

<?php snippet('footer') ?>