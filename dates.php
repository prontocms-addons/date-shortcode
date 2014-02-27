<?php

use Pronto\ShortcodeContainer;

ShortcodeContainer::add('date', function($attributes) {
	$format = array_shift($attributes);
	$defaults = array(
		'timestamp' => time(),
		'now' => null
	);
	$options = array_merge($defaults, $attributes);
	$timestamp = strtotime($options['timestamp'], $options['now']);
	return $timestamp ? date($format, $timestamp) : date($format, $options['timestamp']);
});

?>
