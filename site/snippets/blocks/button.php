<section class="buttons-content" data-aos="fade-in">

  <?php if ($block->buttonTextToggle()->bool() === true ) : ?>
    <div class="buttons-text">
      <?php if ( $block->buttonText()->isNotEmpty() ) :?>
        <p class="text__size__copy"> <?= $block->buttonText() ?></p>
      <?php endif ?>
    </div>
  <?php endif ?> 

  <ul>
      <?php foreach ( $block->button()->toStructure() as $button ) : ?>
        <li>
          <a href="<?= $button->link()?>" aria-label="Link to <?= $button->link()?>" class="primary-btn">
            <?= $button->text() ?>
          </a>
        </li>
      <?php endforeach ?>
  </ul>

  <?php if ($block->buttonTextToggle()->bool() === false ) : ?>
    <div class="buttons-text">
      <?php if ( $block->buttonText()->isNotEmpty() ) :?>
        <p class="text__size__copy"> <?= $block->buttonText() ?></p>
      <?php endif ?>
    </div>
  <?php endif ?> 

</section>














<?php if ($block->text()->isNotEmpty()) : ?>

<a href="<?= $block->link() ?>" class="primary-btn">
  <?= $block->text() ?>
</a>

<?php endif ?>