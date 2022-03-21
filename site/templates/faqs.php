<?= snippet('head') ?>

<main>
    <?php foreach ($page->pagebuilder()->toBlocks() as $block) : ?>
        <section data-type="<?= $block->type() ?>block" id="<?= $block->id() ?>" class="block block-type-<?= $block->type() ?>">
            <?php snippet('blocks/' . $block->type(), [
                'block' => $block,
            ]) ?>
        </section>
    <?php endforeach ?>
</main>


<?= snippet('footer') ?>