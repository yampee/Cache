<?php

/*
 * Yampee Components
 * Open source web development components for PHP 5.
 *
 * @package Yampee Components
 * @author Titouan Galopin <galopintitouan@gmail.com>
 * @link http://titouangalopin.com
 */

/**
 * Cache writer.
 *
 * @author Titouan Galopin <galopintitouan@gmail.com>
 */
class Yampee_Cache_Writer
{
	/**
	 * Write datas in a given file.
	 *
	 * @param string $filename
	 * @param mixed  $data
	 * @return int
	 */
	public static function write($filename, $data)
	{
		return file_put_contents($filename, serialize($data));
	}

	/**
	 * Read datas from a given file.
	 *
	 * @param string $filename
	 * @return mixed
	 */
	public static function read($filename)
	{
		return unserialize(file_get_contents($filename));
	}
}