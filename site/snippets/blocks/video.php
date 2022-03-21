<?php

/** @var \Kirby\Cms\Block $block */ ?>
<?php if ($block->url()->isNotEmpty()) : ?>
    <figure class="videoWrapper <?php if ( $block->videolayouttoggle()->bool() ) :?>video-top-screen<?php endif ?>" data-aos="fade-in">
        <?php if ($block->videotoggle() == "iframe") : ?>
        <?= video($block->url()) ?>
        <?php else : ?>
        <video lazy controls>
            <source src="<?= $block->embed() ?>">
        </video>
        <?php endif ?>
        <?php if ($block->caption()->isNotEmpty()) : ?>
            <figcaption><?= $block->caption() ?></figcaption>
        <?php endif ?>
    </figure>
<?php endif ?>