<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * Kohana QR code module for phpqrcode
 *
 * @uses       phpqrcode 1.1.4
 * @package    QR Code Core
 * @author     Vladimir Dimitrov
 */
class QR_Core {

	/**
	 * @var  hold phpqrcode instance
	 */
	protected static $_phpqrcode;
	
	/**
	 * Generate png with qrcode from given data
	 * @param  string $data data to be inserted in the qr code
	 * @param  string $filename name of file to write qr code if null output the image directly 
	 * @return object png image
	 */
	public static function png($data, $filename = FALSE)
	{
		QRcode::png($data, $filename, QR_ECLEVEL_H);
	}
} 
