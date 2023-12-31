<?php

namespace PhpOption\Tests;

use PhpOption\LazyOption;
use PhpOption\None;
use PhpOption\Option;
use PhpOption\Some;
use PHPUnit\Framework\TestCase;

class LazyOptionTest extends TestCase
{
    private static function createSubject($default = null): object
    {
        return new class ($default) {
            private $default;

            public function __construct($default)
            {
                $this->default = $default;
            }

            public function execute($v = null): Option
            {
                return Option::fromValue($v ?? $this->default);
            }
        };
    }

    private static function createInvalidSubject(): object
    {
        return new class {
            public function execute($v = null)
            {
                return null;
            }
        };
    }

    public function testGetWithArgumentsAndConstructor(): void
    {
        $some = LazyOption::create([self::createSubject(), 'execute'], ['foo']);

        self::assertSame('foo', $some->get());
        self::assertSame('foo', $some->getOrElse(null));
        self::assertSame('foo', $some->getOrCall('does_not_exist'));
        self::assertSame('foo', $some->getOrThrow(new \RuntimeException('does_not_exist')));
        self::assertFalse($some->isEmpty());
    }

    public function testGetWithArgumentsAndCreate(): void
    {
        $some = new LazyOption([self::createSubject(), 'execute'], ['foo']);

        self::assertSame('foo', $some->get());
        self::assertSame('foo', $some->getOrElse(null));
        self::assertSame('foo', $some->getOrCall('does_not_exist'));
        self::assertSame('foo', $some->getOrThrow(new \RuntimeException('does_not_exist')));
        self::assertFalse($some->isEmpty());
    }

    public function testGetWithoutArgumentsAndConstructor(): void
    {
        $some = new LazyOption([self::createSubject('foo'), 'execute']);

        self::assertSame('foo', $some->get());
        self::assertSame('foo', $some->getOrElse(null));
        self::assertSame('foo', $some->getOrCall('does_not_exist'));
        self::assertSame('foo', $some->getOrThrow(new \RuntimeException('does_not_exist')));
        self::assertFalse($some->isEmpty());
    }

    public function testGetWithoutArgumentsAndCreate(): void
    {
        $option = LazyOption::create([self::createSubject('foo'), 'execute']);

        self::assertTrue($option->isDefined());
        self::assertFalse($option->isEmpty());
        self::assertSame('foo', $option->get());
        self::assertSame('foo', $option->getOrElse(null));
        self::assertSame('foo', $option->getOrCall('does_not_exist'));
        self::assertSame('foo', $option->getOrThrow(new \RuntimeException('does_not_exist')));
    }

    public function testCallbackReturnsNull(): void
    {
        if (method_exists($this, 'expectException')) {
            $this->expectException('RuntimeException');
            $this->expectExceptionMessage('None has no value');
        } else {
            $this->setExpectedException('RuntimeException', 'None has no value');
        }

        $option = LazyOption::create([self::createSubject(), 'execute']);

        self::assertFalse($option->isDefined());
        self::assertTrue($option->isEmpty());
        self::assertSame('alt', $option->getOrElse('alt'));
        self::assertSame('alt', $option->getOrCall(function () {
            return 'alt';
        }));

        $option->get();
    }

    public function testExceptionIsThrownIfCallbackReturnsNonOption(): void
    {
        $option = LazyOption::create([self::createInvalidSubject(), 'execute']);

        if (method_exists($this, 'expectException')) {
            $this->expectException('RuntimeException');
            $this->expectExceptionMessage('Expected instance of PhpOption\Option');
        } else {
            $this->setExpectedException('RuntimeException', 'Expected instance of PhpOption\Option');
        }

        $option->isDefined();
    }

    public function testInvalidCallbackAndConstructor(): void
    {
        if (method_exists($this, 'expectException')) {
            $this->expectException('InvalidArgumentException');
            $this->expectExceptionMessage('Invalid callback given');
        } else {
            $this->setExpectedException('InvalidArgumentException', 'Invalid callback given');
        }

        new LazyOption('invalidCallback');
    }

    public function testInvalidCallbackAndCreate(): void
    {
        if (method_exists($this, 'expectException')) {
            $this->expectException('InvalidArgumentException');
            $this->expectExceptionMessage('Invalid callback given');
        } else {
            $this->setExpectedException('InvalidArgumentException', 'Invalid callback given');
        }

        LazyOption::create('invalidCallback');
    }

    public function testifDefined(): void
    {
        $called = false;
        $self = $this;
        LazyOption::fromValue('foo')->ifDefined(function ($v) use (&$called, $self) {
            $called = true;
            $self->assertSame('foo', $v);
        });
        self::assertTrue($called);
    }

    public function testForAll(): void
    {
        $called = false;
        $self = $this;
        self::assertInstanceOf(Some::class, LazyOption::fromValue('foo')->forAll(function ($v) use (&$called, $self) {
            $called = true;
            $self->assertSame('foo', $v);
        }));
        self::assertTrue($called);
    }

    public function testOrElse(): void
    {
        $some = Some::create('foo');
        $lazy = LazyOption::create(function () use ($some) {
            return $some;
        });
        self::assertSame($some, $lazy->orElse(None::create()));
        self::assertSame($some, $lazy->orElse(Some::create('bar')));
    }

    public function testFoldLeftRight(): void
    {
        $callback = function () {
        };

        $option = self::getMockForAbstractClass(Option::class);
        $option->expects(self::once())
            ->method('foldLeft')
            ->with(5, $callback)
            ->will(self::returnValue(6));
        $lazyOption = new LazyOption(function () use ($option) {
            return $option;
        });
        self::assertSame(6, $lazyOption->foldLeft(5, $callback));

        $option->expects(self::once())
            ->method('foldRight')
            ->with(5, $callback)
            ->will(self::returnValue(6));
        $lazyOption = new LazyOption(function () use ($option) {
            return $option;
        });
        self::assertSame(6, $lazyOption->foldRight(5, $callback));
    }
}
