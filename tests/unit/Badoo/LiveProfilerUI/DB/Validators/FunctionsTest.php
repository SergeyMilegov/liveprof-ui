<?php declare(strict_types=1);

/**
 * @maintainer Timur Shagiakhmetov <timur.shagiakhmetov@corp.badoo.com>
 */

namespace unit\Badoo\LiveProfilerUI\DB\Adapters;

use Badoo\LiveProfilerUI\DB\Validators\Functions;

class FunctionsTest extends \unit\Badoo\BaseTestCase
{
    public function testValidate()
    {
        $function = 'sum';
        $result = Functions::validate($function);

        self::assertTrue($result);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Invalid function name: div
     */
    public function testValidateError()
    {
        $function = 'div';
        Functions::validate($function);
    }
}
