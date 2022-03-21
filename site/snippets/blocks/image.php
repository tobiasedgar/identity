<?php
use Kirby\Toolkit\Str;

$alt      = $block->alt();
$caption  = $block->caption();
$contain  = $block->crop()->isFalse();
$link     = $block->link();
$ratio    = $block->ratio()->or('auto');
$class    = $ratio != 'auto' ? 'img' : 'auto';
$src      = null;
$image    = $block->image()->toFile();

if ($block->location() == 'web') {
    $src = $block->src();
} elseif ($image = $block->image()->toFile()) {
    $alt = $alt ?? $image->alt();
    $src = $image->url();
}

if ($ratio !== 'auto') {
    $ratio = Str::split($ratio, '/');
    $w = $ratio[0] ?? 1;
    $h = $ratio[1] ?? 1;
}

$attrs = attr([
    'class'         => $class,
    'data-contain'  => $contain,
    'style'         => '--w:' . $w . '; --h:' . $h,
]);

?>
<?php if ($src) : ?>
    <figure class="aspectholder <?php if (isset($device)) : ?><?= $device ?><?php endif ?>" data-type="<?= $image->type() ?>">
        <?php if ($link->isNotEmpty()) : ?>
            <a href="<?= $link->toUrl() ?>" <?= $attrs ?>>
                <img src="<?= $image->thumb('standard')->url() ?>" srcset="<?= $image->thumb('standard')->url() ?>" data-src="<?= $image->url() ?>" data-srcset="<?= $image->srcset([720, 1280, 1920, 2400]) ?>" <?= $image->orientation() ?> lazy alt="<?= $alt ?>" />
            </a>
        <?php else : ?>
            <div <?= $attrs ?>>
                <img src="<?= $image->thumb('standard')->url() ?>" srcset="<?= $image->thumb('standard')->url() ?>" data-src="<?= $image->url() ?>" data-srcset="<?= $image->srcset([720, 1280, 1920, 2400]) ?>" <?= $image->orientation() ?> lazy alt="<?= $alt ?>" />
            </div>
        <?php endif ?>
        <?php if ($caption->isNotEmpty()) : ?>
            <figcaption class="img-caption">
                <?= $caption ?>
            </figcaption>
        <?php endif ?>
    </figure>
<?php endif ?>