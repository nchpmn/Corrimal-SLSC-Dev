<?php snippet('header', array('bodyclass' => 'news')) ?>

<!-- Main -->

<section id="main" class="wrapper">
    <div class="container">
        <header class="major special">
            <h2><?= $page->title() ?></h2>
            <?= $page->text()->kirbytext() ?>
        </header>
        
        <div class="feature-grid">
        
        <?php foreach($page->children()->visible()->flip()->paginate(10) as $article): ?>
            <div class="feature">
                <?php if($article->featimage()->toFile()): ?>
                    <div class="image rounded"><?= $article->featimage()->toFile()->crop(400,400); ?></div>
                <?php else: ?>
                    <div class="image rounded"><?= $page->genericicon()->toFile()->crop(400,400); ?></div>
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

<!-- End Main -->
<?php snippet('footer') ?>