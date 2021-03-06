<?php declare(strict_types=1);

namespace Rector\NetteToSymfony\Tests\Rector\ClassMethod\RenameEventNamesInEventSubscriberRector;

use Rector\NetteToSymfony\Rector\ClassMethod\RenameEventNamesInEventSubscriberRector;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;

final class RenameEventNamesInEventSubscriberRectorTest extends AbstractRectorTestCase
{
    public function test(): void
    {
        $this->doTestFiles([
            __DIR__ . '/Fixture/fixture.php.inc',
            __DIR__ . '/Fixture/presenter_startup.php.inc',
            __DIR__ . '/Fixture/event_class.php.inc',
        ]);
    }

    protected function getRectorClass(): string
    {
        return RenameEventNamesInEventSubscriberRector::class;
    }
}
