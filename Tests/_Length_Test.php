<?php

/**
 * _Chain_ ©2015 Julien <youlweb@hotmail.com>
 * Refer to the LICENSE file for the full copyright and license information.
 * @package chain/string
 */

namespace _Chain_\_String_;

use _Chain_\Type;

/**
 * @author Julien Tord <youlweb@hotmail.com>
 */
class _Length_Test extends \PHPUnit_Framework_TestCase
{
    public function testEXE()
    {
        $IO = $this->getMock('_Chain_\I_O');
        $IO->expects($this->once())->method('I_')->with(Type::STRING)
            ->willReturn('foo bar');
        $IO->expects($this->once())->method('_O')->with(7);
        $lowercase = new _Length_();
        $lowercase->EXE($IO);
    }
}
