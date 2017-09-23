<?php

/**
 * ImageDataURI
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package Cola
 * @author  Emre Can ÖZTAŞ <emrecanoztas@outlook.com>
 * @license http://opensource.org/licenses/MIT  MIT License
 * @link    https://github.com/emrecanoztas/dataURI
 * @version 0.0.1
 */

/**
 * Convert image file to data uri.
 * It's very useful method for increasing website performance.
 * But this method is not useful for SEO and indexed picture by crawler or etc.
 * Only performance not SEO!
 */

/**
 * Conver image file to data uri
 * @param  string $tmpname ($_FILES[filename]['tmp_name'])
 * @return string $dataUri (Result of converting)
 */
function dataURI($tmpname)
{
    if (!empty($tmpname)) {
        $type    = pathinfo($tmpname, PATHINFO_EXTENSION);
        $data    = file_get_contents($tmpname);
        $dataUri = 'data:image/' . $type . ';base64,' . base64_encode($data);
       
        return($dataUri);
    } else {
        return(null);
    }

}