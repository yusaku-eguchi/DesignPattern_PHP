<?php

class TicketMaker
{
    /** @var TicketMaker */
    private static TicketMaker $ticketMaker;
    /** @var int */
    private static int $ticket = 1000;

    private function __construct() {
        echo 'TicketMakerインスタンスを生成しました。';
        echo "\n";
    }

    public static function getInstance()
    {
        if (! isset(self::$ticketMaker)) {
            self::$ticketMaker = new TicketMaker;
        }
        return self::$ticketMaker;
    }

    /**
     * @return int
     */
    public function getNextTicketNumber(): int
    {
        echo 'チケットを発行します チケット番号: ' . self::$ticket;
        echo "\n";
        self::$ticket++;
        return self::$ticket;
    }
}