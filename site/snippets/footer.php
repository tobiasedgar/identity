
</div>
<footer class="footer">
    <div class="footer-content">
        <div class="footer-contact">
        <?php if ( $site->instagramName()->isNotEmpty() ) :?>
          <?php $igName = $site->instagramName()->html() ?>
          <a rel="noopener"` or `rel="noreferrer" href="https://instagram.com/<?= $igName ?>" aria-label="Link to Instagram">
            @<?= $igName ?>
          </a>
          <?php endif ?>
        </div>
        <div class="footer-nav">
        <ul>
          <?php foreach ($site->children()->listed() as $item): ?>
           
            <li><a href="<?= $item->url(); ?>" class="menu-item" aria-label="Link to <?= $item->url(); ?>">
              <h6 class="text__size__footer"><?= $item->title(); ?></h6>
            </a></li>
          
            <?php endforeach ?>
        </ul>
        </div>
    </div>
</footer>

</body>
<?php echo snippet('matomo') ?>
<?php snippet('head/js') ?>
</html>