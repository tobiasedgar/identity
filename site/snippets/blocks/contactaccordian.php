<section class="block <?= $block->position() ?>" data-id="<?= $block->id() ?>" data-type="<?= $block->type() ?>block" <?php if ($block->sectionId()->isNotEmpty()) : ?>id="<?= $block->sectionId() ?>" <?php endif ?> data-aos="fade-in">
    <?php if ($block->contactaccordion()->isNotEmpty()) : ?>
        <h2 class="info-accordian-title text__size__copy"><?= $block->accordianTitle() ?></h2>
        <ul>
            <?php foreach ($block->contactaccordion()->toStructure() as $contact) : ?>
            <li>
                <div class="accordion" id="infoAccordian">
                    <div class="accordian-left">
                        <h3 class="text__size__large"> <?= $contact->contactName()->upper() ?> </h3>
                    </div>
                    <div class="accordian-right">
                        <p class="text__size__copy"><?= $contact->contactAddressStreet() ?>,<br>
                        <?= $contact->contactAddressCity() ?>, <?= $contact->contactAddressCountry() ?>
                        </p>
                        <span class="text__size__small"></span>
                    </div>
                </div>
                <div class="accordion-content">
                    <div class="content-left"></div>
                    <div class="content-right">
                        <p class="text__size__copy"><?= $contact->contactName()  ?></p>
                        <p class="text__size__copy">Phone – <?= $contact->contactPhone()  ?><br>
                        Email – <?= $contact->contactEmail()  ?></p>
                        <?php if ( $contact->contactAbout()->isNotEmpty() ) : ?>
                        <p class="text__size__copy"><?= $contact->contactAbout()  ?></p>
                        <?php endif ?>
                    </div>
                </div>
            </li>
            <?php endforeach ?>
        </ul>
    <?php endif ?>

</section>
   