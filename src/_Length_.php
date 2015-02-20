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
 * Returns the length of a string.
 *
 * @author Julien Tord <youlweb@hotmail.com>
 */
class _Length_ extends _AbsLink_
{
    /**
     * Performs an operation on a visiting I/O object.
     *
     * I/O contract
     * ------------
     * <pre>
     * I    string      String to process.
     * O    number      Length of the string.
     * X    no
     * </pre>
     *
     * @param I_O $IO
     * @return I_O
     */
    public function EXE(I_O $IO)
    {
        return $IO->_O(
            strlen(
                $IO->I_(Type::STRING)
            ));
    }
}