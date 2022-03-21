<?= snippet('head') ?>

<main>
<div class="book-now-content" data-aos="fade-in">
  

  <div class="book-now-content-left">
        <?php if ($page->form()->isNotEmpty()) : ?>
            <h2 class="text__size__copy"><?= $page->form()->kti() ?></h2>
        <?php endif ?>
      <!-- booking form -->
      <form action="<?= $page->formspark() ?>" method="POST" enctype="multipart/form-data">
      
      <label for="name"><h4 class="text__size__small">Full Name</h4></label>
      <input type="text" name="Name" placeholder="Full Name" required>

      <label for="phone"><h4 class="text__size__small">Phone Number</h4></label>
      <input type="text" name="Phone Number" placeholder="+64 21 123 4567">

      <label for="email"><h4 class="text__size__small">Email Address</h4></label>
      <input type="email" name="Email" placeholder="email@address.com" required>
     
      <?php if( $page->interestedIn()->toStructure()->isNotEmpty() ) :?>
        <label for="interestedIn"><h4 class="text__size__small">interested In</h4></label>
        <select type="text" name="Interested In">
        <option value="" disabled selected>What are you interested in?</option>
            <?php foreach( $page->interestedIn()->toStructure() as $int) :?>
                <option value="<?= $int->option() ?>">
                    <?= $int->option() ?>
                </option>
            <?php endforeach ?>
        </select>
      <?php endif?>

      <label for="age"><h4 class="text__size__small">How Old Are You?</h4></label>
      <input type="number" name="Age" min="18" max="100" start="28" placeholder="28">

      <?php if( $page->howMuch()->toStructure()->isNotEmpty() ) :?>
        <label for="howMuch"><h4 class="text__size__small">How Much Hair Are You After?</h4></label>
        <select type="text" name="How Much">
        <option value="" disabled selected>How Much Hair Are You After?</option>
            <?php foreach( $page->howMuch()->toStructure() as $howmuch) :?>
            <option value="<?= $howmuch->option() ?>">
                <?= $howmuch->option() ?>
            </option>
            <?php endforeach ?>
        </select>
      <?php endif?>

      <label for="date"><h4 class="text__size__small">Date</h4></label>
      <input type="date" name="Date">

      <?php if( $page->time()->toStructure()->isNotEmpty() ) :?>
        <label for="time"><h4 class="text__size__small">Time</h4></label>
        <select type="text" name="time">
        <option value="" disabled selected>Select your time</option>
            <?php foreach( $page->time()->toStructure() as $time) :?>
            <option value="<?= $time->option() ?>">
                <?= $time->option() ?>
            </option>
            <?php endforeach ?>
        </select>
      <?php endif?>

      <label for="message"><h4 class="text__size__small">Message</h4></label>
      <textarea rows="5" name="Message" placeholder="" aria-label="Message" required></textarea>
    
      <input 
                name="Upload" 
                accept="image/*" 
                class="file-input" 
                aria-label="File Input"  
                type="hidden"
                role="uploadcare-uploader"
                data-public-key="<?= $page->uploadcare() ?>"
                data-system-dialog="true">

      <button class="primary-btn" type="submit" aria-label="Form Submit">
          Submit
      </button>

      </form>


  </div>

  <div class="book-now-content-right">
      <?php if ( $page->info()->isNotEmpty() ) :?>
        <p class="text__size__copy">
            <?= $page->info() ?>
        </p>
      <?php endif ?>
        
      <?php if ( $page->firstlink()->isNotEmpty() ) : ?>
        <a href="<?= $page->firstlink() ?>" class="primary-btn" aria-label="Link to <?= $page->firstlink() ?>">
            <?php if ( $page->firsttext()->isNotEmpty() ) :?>
                <?= $page->firsttext()->upper() ?>
            <?php else : ?>
                <?= $page->firstlink()->upper() ?>
            <?php endif ?>
        </a>
      <?php endif ?>
      
      <?php if ( $page->secondlink()->isNotEmpty() ) : ?>
        <a href="<?= $page->secondlink() ?>" class="primary-btn" aria-label="Link to <?= $page->secondlink() ?>">
            <?php if ( $page->secondtext()->isNotEmpty() ) :?>
                <?= $page->secondtext()->upper() ?>
            <?php else : ?>
                <?= $page->secondlink()->upper() ?>
            <?php endif ?>
        </a>
      <?php endif ?>
  </div>


</div>
</main>


<?= snippet('footer') ?>