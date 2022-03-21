<section data-type="<?= $block->type() ?>block" data-id="<?= $block->id() ?>" <?php if ($block->sectionId()->isNotEmpty()) : ?>id="<?= $block->sectionId() ?>" <?php endif ?> class="<?= $block->layout() ?> <?php if ($block->fixed()->toBool()) : ?>fixed<?php endif ?>" data-aos="fade-in">
    <?php if ($block->format() == "single") : ?>
        <?php $image = $block->img(); ?>
        <?php snippet('media', ['field' => $image]) ?>
    <?php elseif ($block->format() == "video") : ?>
        <?php if ($block->video()->isNotEmpty()) : ?>
            <div class="aspectholder">
                <video class="lazy" controls muted playsinline loop>
                    <source src="<?= $block->video()->html() ?>">
                </video>
            </div>
        <?php endif ?>
    <?php endif ?>
</section>