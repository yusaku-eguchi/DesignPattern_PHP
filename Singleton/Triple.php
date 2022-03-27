<?php

class Triple
{
    /** @var Triple[] */
    private static array $triple;
    /** @var int */
    private int $id;

    /**
     * @param int
     * @return void
     */
    private function __construct(int $id)
    {
        $this->id = $id;
        echo 'id: ' . $this->id . ' のインスタンスを生成しました。';
        echo "\n";
    }

    /**
     * @param int
     * @return Triple
     */
    public static function getInstance(int $id): Triple
    {
        if (! isset(self::$triple)) {
            self::$triple = [
                new Triple(0),
                new Triple(1),
                new Triple(2),
            ];
        }
        return self::$triple[$id];
    }

    /**
     * @return string
     */
    public function toString(): string
    {
        return 'Tripleのid: ' . $this->id;
    }
}