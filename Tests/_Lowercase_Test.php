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
class _Lowercase_Test extends \PHPUnit_Framework_TestCase
{
    const IO = '_Chain_\I_O';

    public function testEXE()
    {
        $IO = $this->mockIO();
        $IO->expects($this->once())->method('I_')->with(Type::STRING)
            ->willReturn('FOo BaR');
        $IO->expects($this->once())->method('_O')->with('foo bar');
        $lowercase = new _Lowercase_();
        $lowercase->EXE($IO);
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    private function mockIO()
    {
        return $this->getMock(self::IO);
    }
}
