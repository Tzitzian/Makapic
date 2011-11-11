<?php

/**
 * @file
 * flippy.tpl.php
 *
 * Theme implementation to display a simple pager.
 *
 * Default variables:
 * - $first_link: A formatted <A> link to the first item.
 * - $previous_link: A formatted <A> link to the previous item.
 * - $next_link: A formatted <A> link to the next item.
 * - $last_link: A formatted <A> link to the last item.
 *
 * Other variables:
 * - $current: The Node ID of the current node.
 * - $first: The Node ID of the first node.
 * - $prev: The Node ID of the previous node.
 * - $next: The Node ID of the next node.
 * - $last: The Node ID of the last node.
 *
 * @see flippy_preprocess_custom_pager()
 */
?>
<div class="flippy">

<div class="previous"><?php print $previous_link; ?></div>
<div class="next"><?php print $next_link; ?></div>

</div>
