<?php snippet('header', array('bodyclass' => 'landing')) ?>

<!-- Banner -->
<?php if($page->bannerimage()->toFile()): ?>
    <section id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.5)),url('<?= $page->bannerimage()->toFile()->crop(1920)->url(); ?>');">
<?php else: ?>
        <section id="banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.5)),url('https://source.unsplash.com/zTPTV_L9ZVU/1280x720');">
<?php endif ?>
    <h2><?= $page->bannertitle() ?><br />
        <span><?= $page->bannersubtitle() ?></span></h2>
</section>

<?php snippet('footer') ?>