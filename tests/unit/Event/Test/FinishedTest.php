<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Event\Test;

use PHPUnit\Event\AbstractEventTestCase;
use PHPUnit\Event\Code;
use PHPUnit\Metadata\MetadataCollection;

/**
 * @covers \PHPUnit\Event\Test\Finished
 */
final class FinishedTest extends AbstractEventTestCase
{
    public function testConstructorSetsValues(): void
    {
        $telemetryInfo = self::createTelemetryInfo();
        $test          = new Code\Test(
            self::class,
            'foo',
            'foo with data set #123',
            MetadataCollection::fromArray([])
        );

        $event = new Finished(
            $telemetryInfo,
            $test
        );

        $this->assertSame($telemetryInfo, $event->telemetryInfo());
        $this->assertSame($test, $event->test());
    }
}
