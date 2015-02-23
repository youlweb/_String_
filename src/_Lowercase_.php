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
 * Make a string lowercase.
 *
 * @author Julien <youlweb@hotmail.com>
 */
class _Lowercase_ extends _AbsLink_
{
    /**
     * Make a string lowercase.
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
        return $IO->_O(
            strtolower(
                $IO->I_(Type::STRING)
            ));
    }
}