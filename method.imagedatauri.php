<?php
/**
 * @author      Emre Can ÖZTAŞ (ecoz) <oztasemrecan@gmail.com>
 * @copyright   Copyright (c) 2018, Emre Can ÖZTAŞ. (https://emrecanoztas.com/)
 * @license     http://opensource.org/licenses/MIT  MIT License
 * @link        https://github.com/oztasemrecan/php-imagedatauri
 * @since       Version 1.0.0
 */

if (!function_exists('convertImageDataURI')) {
    /**
     * Convert image to data URI
     * @param  string $path 
     * @return string $source
     *
     * @example $source = convertImageDataURI('./the-good-the-bad-and-the-ugly.jpg');
     */
    function convertImageDataURI($path)
    {
        if (file_exists($path)) {
            $image   = file_get_contents($path);
            $dataURI = base64_encode($image);
            $mime    = finfo_file(finfo_open(FILEINFO_MIME_TYPE), $path);

            $source = 'data: ' . $mime . ';base64, ' . $dataURI;

            return($source);
        } else {
            exit('File does not found! System closed..!');
        }
    }
}
