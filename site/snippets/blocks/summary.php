<?php if ($block->text()->isnNotEmpty()) : ?>

<div class="summary-container" data-aos="fade-in">
    <div class="summary-content">
        <h4 class="text__size__small"> <?= $block->text()->upper() ?></h4>
    </div>
</div>


<?php endif ?>