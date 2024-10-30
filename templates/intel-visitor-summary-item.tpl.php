<?php

/**
 * @file
 * Default theme implementation to present a picture configured for the
 * user's account.
 *
 * Available variables:
 * - $user_picture: Image set by the user or the site's default. Will be linked
 *   depending on the viewer's permission to view the user's profile page.
 * - $account: Array of account information. Potentially unsafe. Be sure to
 *   check_plain() before use.
 *
 * @see template_preprocess_user_picture()
 *
 * @ingroup themeable
 */
?>
<div class="card summary-item <?php if (isset($class)) { print $class; } ?>">
  <div class="card-block summary-item-block">
    <div class="card-title value"><?php print $value; ?></div>
    <div class="card-subtitle text-muted title"><?php print $title; ?></div>
  </div>
</div>