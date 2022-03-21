<section class="instagram" data-aos="fade-in">
    <?php if ($site->instagramName()->isNotEmpty() ) : ?>
         <a class="ig__link" target="_blank" aria-label="Link to Instagram" href="https://instagram.com/<?= $site->instagramName()->html() ?>"><h4 class="text__size__small">FOLLOW US @<span><?= $site->instagramName()->html()->upper() ?> </span></h4></a>
    <?php endif ?>
    <div id="ig">
        <?php if(count(instagramFeed())): ?>
            <?php foreach(instagramFeed()->limit(4) as $media): ?>
                <a href="<?= $media['permalink']; ?>" target="_blank" aria-label="Link to Instagram">
                    <img src="assets/instagram/media/<?= $media['id']; ?>.jpg" width="100" height="100" alt="instagram image"/>
                </a>
            <?php endforeach; ?>
        <?php endif; ?>
        
    </div>
 </section>