<?php
if (!function_exists('is_force_https')) {
/**
* Check if force to https form configure.
* @version 1.0.0
* @since 1.0
*/
function is_force_https()
{
if (config('app.force_https')) {
return true;
}

return false;
}
}
