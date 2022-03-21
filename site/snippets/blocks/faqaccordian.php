<section class="block <?= $block->position() ?>" data-id="<?= $block->id() ?>" data-type="<?= $block->type() ?>block" <?php if ($block->sectionId()->isNotEmpty()) : ?>id="<?= $block->sectionId() ?>" <?php endif ?> data-aos="fade-in">
    <?php if ($block->faqaccordion()->isNotEmpty()) : ?>
        <h2 class="info-accordian-title text__size__copy"><?= $block->accordianTitle() ?></h2>

        <ul>
            <?php foreach ($block->faqaccordion()->toStructure() as $faq) : ?>
            <li>
                <div class="accordion" id="faqAccordian">
                    <div class="faq-accordian-left">
                        <h4 class="text__size__small"> <?= $faq->faqTitle()->upper() ?> </h4>
                    </div>
                    <div class="accordian-right faq-accordian-right"> 
                    <span class="text__size__small"></span>
                    </div>
                </div>
                <div class="accordion-content">
                    <div class="content-right faq-content">
                        <p class="text__size__copy"><?= $faq->faqDetails()  ?></p>
                    </div>
                </div>
            </li>
            <?php endforeach ?>
        </ul>
    <?php endif ?>

</section>