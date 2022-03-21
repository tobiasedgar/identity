<div class="about-section <?php if ($block->togglepagination()->bool()) : ?>hero-right<?php else : ?>hero-left<?php endif ?>" data-aos="fade-in">
    <div class="about-img">
   
   <?php snippet('media', ['field' => $block->images()]) ?>
    </div>
    <div class="about-text">
        <?php if ( $block->aboutsummary()->isNotEmpty() ) : ?>
                <h4 class="text__size__small"> <?= $block->aboutsummary()->upper() ?></h4>
        <?php endif ?>
        <?php if ( $block->abouttext()->inNotEmpty() ) : ?>
                <p class="text__size__copy"> <?= $block->abouttext() ?></p>
        <?php endif ?>
    </div>
</div>