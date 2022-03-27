<?php

class Singleton
{
    /** @var Singleton */
    private static Singleton $singleton;

    /**
     * @return void
     */
    private function __construct(){
        echo 'インスタンスを生成しました。';
        echo "\n";
    }

    /**
     * @return Singleton
     */
    public static function getInstance(): Singleton
    {
        if (! isset(self::$singleton)) {
            self::$singleton = new Singleton;
        }

        return self::$singleton;
    }
}