<?php
function extend_tiny_mce_before_init($mce_init)
{
	$mce_init['cache_suffix'] = 'v=' . time();
	return $mce_init;
};
add_filter('tiny_mce_before_init', 'extend_tiny_mce_before_init');

