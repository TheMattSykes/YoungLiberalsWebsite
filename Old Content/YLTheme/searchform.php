<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>" >
  <div class="input-group">
    <input type="text" placeholder="search..." class="input-sm form-control" name="s" id="search" value="<?php the_search_query(); ?>">
    <span class="input-group-btn"><button type="submit" class="search-button" value="Submit">Search</button></span>
  </div>
  
</form>