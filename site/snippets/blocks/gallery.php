<?php if ($block->images()->isNotEmpty()) : ?>
    <figure>
        <?php $files = $block->images()->toFiles();
        foreach ($files as $file) : ?>
            <div class="aspectholder" <?= $file->orientation() ?> data-type="<?= $file->type() ?>" data-aos="fade-in">
                <?php if ($file->type() == 'image') : ?>
                    <?php if ($file->extension() == 'svg') : ?>
                        <?= svg($file) ?>
                    <?php else : ?>
                        <img src="<?= $file->thumb('standard')->url() ?>" srcset="<?= $file->thumb('standard')->url() ?>" data-src="<?= $file->url() ?>" data-srcset="<?= $file->srcset([560, 720, 1280, 1920]) ?>" class="lazy" />
                    <?php endif ?>
                <?php elseif ($file->type() == 'code') : ?>
                    <div class="lottie" data-animation-path="<?= $file->url() ?>" data-anim-loop="true" data-anim-type="svg"></div>
                <?php elseif ($file->type() == 'video') : ?>
                    <video class="lazy" autoplay muted playsinline loop>
                        <source src="<?= $file->url() ?>">
                    </video>
                <?php endif ?>
            </div>
        <?php endforeach ?>
        <?php if ($block->caption()->isNotEmpty()) : ?>
            <figcaption class="img-caption">
                <?= $block->caption() ?>
            </figcaption>
        <?php endif ?>
    </figure>
<?php else : ?>
    no file
<?php endif ?>