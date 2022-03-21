<div class="home-hero <?php if ($block->togglepagination()->bool()) : ?>hero-right<?php else : ?>hero-left<?php endif ?>" data-aos="fade-in">


    <div class="home-hero-img">
    <?php snippet('media', ['field' => $block->images()]) ?>
    </div>
    <div class="home-hero-text">
        <?php if ( $block->herosummary()->isNotEmpty() ) : ?>
            <div class="home-hero-text-header">
                <h2 class="text__size__small"> <?= $block->herosummary()->upper() ?></h2>
            </div>
        <?php endif ?>
       <?php if ( $block->herotext()->inNotEmpty() ) : ?>
            <div class="home-hero-text-copy">
                <p class="text__size__copy"> <?= $block->herotext() ?></p>
            </div>
        <?php endif ?>
    </div>

</div>