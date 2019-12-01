<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>


<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ) ?>" >
    <div class="input-field">
        <input id="search" type="search" required value="<?php get_search_query()  ?>" name="s" id="s" class="validate" >
        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
        <i class="material-icons">close</i>
    </div>
</form>