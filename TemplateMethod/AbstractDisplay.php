<?php

abstract class AbstractDisplay
{
    /**
     * @return void
     */
    public abstract function open(): void;

    /** 
     * @return void
     */
    public abstract function print(): void;

    /**
     * @return void
     */
    public abstract function close(): void;

    /**
     * @return void
     */
    public final function display()
    {
        $this->open();
        for ($i=0; $i < 5; $i++) { 
            $this->print();
        }
        $this->close();
    }
}