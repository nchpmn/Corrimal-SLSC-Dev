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
        
<!-- Three -->
<section id="three" class="wrapper style1">
    <div class="container">
        <header class="major special">
            <h2>Latest News</h2>
        </header>
        <div class="feature-grid">
            <?php $articles = page($page->newscategory())->children()->visible()->flip()->limit($page->newslimit()->int()) ?>
            
            <?php foreach($articles as $article): ?>
                <div class="feature">
                    <?php if($article->featimage()->toFile()): ?>
                        <div class="image rounded"><?= $article->featimage()->toFile()->crop(300,300); ?></div>
                    <?php else: ?>
                        <div class="image rounded"><?= page($page->newscategory())->genericicon()->toFile()->crop(300,300); ?></div>
                    <?php endif ?>
                    <div class="content">
                        <header>
                            <h4><a href="<?= $article->url() ?>"><?= $article->title() ?></a></h4>
                            <p><?= $article->tags() ?> &mdash; <?= $article->date('j M Y') ?></p>
                        </header>
                        <p><?= $article->text()->excerpt(20, 'words') ?> <a href="<?= $article->url() ?>">More &rarr;</a></p>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<!-- Four -->
<?php if($page->bannerimage()->toFile()): ?>
    <section id="four" class="wrapper style3 special" style="background-image:linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.5)),url('<?= $page->contactimage()->toFile()->crop(1920)->url(); ?>');">
<?php else: ?>
    <section id="four" class="wrapper style3 special" style="background-image:linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.5)),url('https://source.unsplash.com/iftBhUFfecE/1200x720');">
<?php endif ?>
    <div class="container">
        <header class="major">
            <h2><?= $page->contacttitle() ?></h2>
            <p><?= $page->contactsubtitle() ?></p>
        </header>
        <ul class="actions">
        <?php foreach($page->contactbuttons()->toStructure() as $button): ?>
            <li><a href="<?= $site->page($button->buttonlink())->url() ?>" class="button big
                <?php if($button->buttonfeatured() == "featured"): ?>
                   special
                <?php endif ?>"><?= $button->buttonname() ?></a></li>
        <?php endforeach ?>
        </ul>
    </div>
</section>
        
        
        
        
        
        
        
        
        
        
<?php snippet('footer') ?>