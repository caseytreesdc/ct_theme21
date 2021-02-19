<form
  role="search"
  method="get"
  id="searchform"
  class="searchform Searchform"
  action="https://ctdev01272021.local/"
>
    <div class="Searchform__display">
        <?php get_template_part('svgs/inline', 'magnifying') ?>
        <label class="screen-reader-text" for="s">Search for:</label>
        <input class="Searchform__input" type="text" value="" name="s" id="s" placeholder="Enter Keyword"/>
        <input class="Searchform__submit "type="submit" id="searchsubmit" value="Search" />
    </div>
</form>
