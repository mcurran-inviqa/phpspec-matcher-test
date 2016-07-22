<?php

require 'vendor/autoload.php';

class Foo implements Countable
{
    function isFoo()
    {
        return true;
    }

    public function count()
    {
        return 1;
    }

    public function getString()
    {
        return 'string';
    }

    public function getArray()
    {
        return [];
    }

    public function throwException()
    {
        throw new InvalidArgumentException;
    }
}

$foo = new Foo;
expect(5)->shouldBe(5);
expect(5)->shouldBeLike('5');
expect($foo)->shouldHaveType('Foo');
expect($foo)->shouldHaveCount(1);
expect($foo)->shouldBeFoo();
expect($foo)->shouldHaveCount(1);
expect($foo->getArray())->shouldBeArray();
expect($foo->getString())->shouldBeString();
expect(['foo'])->shouldContain('foo');
expect(['foo' => 'bar'])->shouldHaveKey('foo');
expect(['foo' => 'bar'])->shouldHaveKeyWithValue('foo','bar');
expect('foo bar')->shouldContain('bar');
expect('foo bar')->shouldStartWith('foo');
expect('foo bar')->shouldEndWith('bar');
expect('foo bar')->shouldMatch('/bar/');
expect($foo)->shouldThrow('InvalidArgumentException')->duringThrowException();