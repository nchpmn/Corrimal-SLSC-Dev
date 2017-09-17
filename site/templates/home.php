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
        
<!-- One -->
<section id="one" class="wrapper style1">
    <div class="container 75%">
        <div class="row 200%">
            <div class="6u 12u$(medium)">
                <header class="major">
                    <h2><?= $page->introtitle() ?></h2>
                    <p><?= $page->introsubtitle() ?></p>
                </header>
            </div>
            <div class="6u$ 12u$(medium)">
                <?= $page->introblurb()->kirbytext() ?>
            </div>
        </div>
    </div>
</section>
        
<!-- Two -->
<section id="two" class="wrapper style2 special">
    <div class="container">
        <div class="row 150%">
            <?php foreach($page->quicklinks()->toStructure() as $link): ?>
            <div class="3u 6u(small) 12u$(xsmall)">
                <div class="image fit captioned">
                   <a href="<?= $site->page($link->pagename())->url() ?>">
                   <?= $link->thumbnail()->toFile()->crop(600,400) ?>
                   <h3><?= $site->page($link->pagename())->title() ?></h3>
                    </a>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<?php snippet('footer') ?>