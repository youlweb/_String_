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
 * Returns the average number of bits needed to encode an input string.
 *
 * @author Julien <youlweb@hotmail.com>
 */
class _ShannonEntropy_ extends _AbsLink_
{
    /**
     * Returns the average number of bits needed to encode an input string.
     *
     * Estimate the average minimum number of bits needed to encode a string
     * of symbols based on the alphabet size and the frequency of the symbols.
     * {@link http://www.shannonentropy.netmark.pl Read more}
     *
     * I/O contract
     * ------------
     * <pre>
     * I    string      String to process.
     * O    number      Shannon entropy.
     * X    no
     * </pre>
     *
     * @param I_O $IO
     * @return I_O
     */
    public function EXE(I_O $IO)
    {
        $h = 0;
        $string = $IO->I_(Type::STRING);
        $size = strlen($string);
        foreach (count_chars($string, 1) as $v) {
            $p = $v / $size;
            $h -= $p * log($p) / log(2);
        }
        return $IO->_O($h);
    }
}