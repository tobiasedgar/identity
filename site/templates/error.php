<?= snippet('head') ?>

<section class="bar">
    <h4 class="font_body font_mono"><?php if ($page->heading()->isNotEmpty()) : ?><?= $page->heading()->kti() ?><?php else : ?><?= $page->title()->kti() ?><?php endif ?></h4>
</section>

<section id="error">
    <?php if ($page->body()->isNotEmpty()) : ?>
        <div class="error__text">
            <p><?= $page->body()->kti() ?></p>
        </div>
    <?php endif ?>
</section>

<?= snippet('footer') ?>