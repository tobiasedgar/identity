<div class="swiper-container">
  <div class="swiper-wrapper">
    <?php foreach ($block->images()->toFiles() as $file) : ?>
      <div class="swiper-slide">
        <figure class="aspectholder <?php if (isset($device)) : ?><?= $device ?><?php endif ?>" data-type="<?= $file->type() ?>">
          <?php if ($file->type() == 'image') : ?>
            <?php if ($file->extension() == 'svg') : ?>
              <?= svg($file) ?>
            <?php else : ?>
              <img src="<?= $file->thumb('standard')->url() ?>" srcset="<?= $file->thumb('standard')->url() ?>" data-src="<?= $file->url() ?>" data-srcset="<?= $file->srcset([720, 1280, 1920, 2400]) ?>" <?= $file->orientation() ?> lazy alt="<?= $file->alt() ?>" />
            <?php endif ?>
          <?php elseif ($file->type() == 'code') : ?>
            <div class="lottie" data-animation-path="<?= $file->url() ?>" data-anim-loop="true" data-anim-type="svg"></div>
          <?php elseif ($file->type() == 'video') : ?>
            <video lazy autoplay muted playsinline loop>
              <source src="<?= $file->url() ?>">
            </video>
          <?php endif ?>
        </figure>
      </div>
    <?php endforeach ?>
    <?php if ($block->togglearrows()->bool()) : ?>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
          <?php else : ?>
            <div class="swiper-button-prev hidden"></div>
          <div class="swiper-button-next hidden"></div>
        <?php endif ?>
        <?php if ($block->togglepagination()->bool()) : ?>
          <div class="swiper-pagination"></div>
          <?php else : ?>
            <div class="swiper-pagination hidden"></div>
        <?php endif ?>
  </div>
</div>