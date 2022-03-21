<section class="block <?= $block->position() ?>" data-id="<?= $block->id() ?>" data-type="<?= $block->type() ?>block" <?php if ($block->sectionId()->isNotEmpty()) : ?>id="<?= $block->sectionId() ?>" <?php endif ?> data-aos="fade-in">
    <?php if ($block->accordion()->isNotEmpty()) : ?>
        <?php if ( $block->accordianTitle()->isNotEmpty() ) : ?>
                <h2 class="info-accordian-title text__size__copy"><?= $block->accordianTitle() ?></h2>
            <?php endif ?>
        
        <ul>

            <?php foreach ($block->accordion()->toStructure() as $acc) : ?>
            <li class="accordian-wrapper">
                <div class="accordion" id="infoAccordian">
                    <div class="accordian-left">
                        <h3 class="text__size__large"> <?= $acc->accordionSummary()->upper() ?> </h3>
                    </div>
                    <div class="accordian-right">
                        <p class="text__size__copy"><?= $acc->accordionDetails() ?> </p>
                        <span class="text__size__small"></span>
                    </div>
                </div>
                <div class="accordion-content">
                    <div class="content-left"></div>
                    <div class="content-right">
                        <p class="text__size__copy"><?= $acc->accordionText()  ?></p>
                    </div>
                </div>
            </li>
            <?php endforeach ?>
            
        </ul>
    <?php endif ?>

</section>

