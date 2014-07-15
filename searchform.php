<?php

/*

 * The Search Form.

 */

?>

<form action="/" method="get" class="form-inline" role="form">

    <div class="form-group">

        <label class="sr-only" for="search">Buscar</label>

        <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="<?php echo __('Buscar', 'podemoswp') ?>" class="form-control input-sm"/>

    </div>

    <div class="form-group">

        <button type="submit" class="btn btn-default"><?php echo __('Buscar', 'podemoswp') ?></button>

    </div>

</form>