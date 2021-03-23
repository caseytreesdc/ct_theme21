<form
  role="search"
  method="get"
  id="searchform"
  class="searchform Searchform"
  action="<?php echo esc_url( home_url( '/' ) ); ?>"
>
    <div class="Searchform__display">
        <label class="screen-reader-text" for="s">Search for:</label>
        <div class="Searchform__icon-and-input">
          <?php get_template_part('svgs/inline', 'magnifying') ?>
          <input class="Searchform__input" type="text" value="" name="s" id="s" placeholder="Enter Keyword"/>
        </div>
        <input class="Searchform__submit" type="submit" id="searchsubmit" value="Search" />
    </div>
</form>
