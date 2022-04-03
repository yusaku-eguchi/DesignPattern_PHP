<?php

abstract class Builder
{
    public abstract function makeTitle(string $title): void;
    public abstract function makeString(string $str): void;

    /**
     * @param string[]
     */
    public abstract function makeItems(array $items): void;
    public abstract function close(): void;
}