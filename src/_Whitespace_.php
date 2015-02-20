<?php

/**
 * _Chain_ ©2015 Julien <youlweb@hotmail.com>
 * Refer to the LICENSE file for the full copyright and license information.
 * @package chain/string
 */

namespace _Chain_\_String_;

use _Chain_\_AbsLink_;
use _Chain_\I_O;
use _Chain_\Type;

/**
 * Remove extra whitespaces from a string.
 *
 * @author Julien Tord <youlweb@hotmail.com>
 */
class _Whitespace_ extends _AbsLink_
{
    /**
     * @var bool
     */
    private $_trim;

    /**
     * @param bool $trim Remove leading/trailing whitespace as well.
     */
    public function __construct($trim = true)
    {
        $this->_trim = $trim;
    }

    /**
     * Remove extra whitespaces from a string.
     *
     * Any sequence of more than one whitespace is reduced to a single whitespace.
     * By default, leading and trailing whitespaces are also removed.
     * Whitespaces include tab, newline, and linebreak characters.
     *
     * I/O contract
     * ------------
     * <pre>
     * I    string      String to process.
     * O    string      Processed string.
     * X    no
     * </pre>
     *
     * @param I_O $IO
     * @return I_O
     */
    public function EXE(I_O $IO)
    {
        $filtered = preg_replace("/[\\x00-\\x20]+/", ' ', $IO->I_(Type::STRING));
        if ($this->_trim) {
            $filtered = trim($filtered);
        }
        return $IO->_O($filtered);
    }
}