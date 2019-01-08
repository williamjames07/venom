<?php
/**
 * @package venom 
 */

/**
 * Venom require files
 */
array_map(function ($file) {
	$file = "../file/{$file}.php";
	locate_template($file, true, true);
}, ['setup', 'admin']);