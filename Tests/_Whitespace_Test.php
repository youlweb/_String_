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
class _Whitespace_Test extends \PHPUnit_Framework_TestCase
{
    const IO = '_Chain_\I_O';

    public function testEXE()
    {
        $IO = $this->mockIO();
        $IO->expects($this->once())->method('I_')->with(Type::STRING)
            ->willReturn("  \t\t   \n \n  \r \r foo  \n  bar \t\t  \n");
        $IO->expects($this->once())->method('_O')->with('foo bar');
        $whitespace = new _Whitespace_();
        $whitespace->EXE($IO);
    }

    public function testEXENoTrim()
    {
        $IO = $this->mockIO();
        $IO->expects($this->once())->method('I_')->with(Type::STRING)
            ->willReturn(" \n\n  foo    bar  \t \n");
        $IO->expects($this->once())->method('_O')->with(' foo bar ');
        $whitespace = new _Whitespace_(false);
        $whitespace->EXE($IO);
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    private function mockIO()
    {
        return $this->getMock(self::IO);
    }
}
