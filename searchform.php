<button type="button" id="searchToggle" class="search-toggle ls-i ls-i-search ls-i-replace" data-toggle-button="search">show search</button>
<form action="/" method="get" class="search-form" data-toggle-content="search">
	<fieldset class="hidden-fields">
		<input type="hidden" value="post" name="post_type" id="post_type" />
	</fieldset>
    <fieldset>
    	<span class="search-icon ls-i ls-i-search ls-i-replace"></span>
        <label for="search" class="infield">search blog posts</label>
        <input type="search" class="infield" name="s" id="search" />
        <button type="submit" class="search-submit">go</button>
    </fieldset>
</form>