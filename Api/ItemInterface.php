<?php
namespace Foo\Bar\Api;

interface ItemInterface
{
    public function getName() : string;

    public function setName(string $name);
}
