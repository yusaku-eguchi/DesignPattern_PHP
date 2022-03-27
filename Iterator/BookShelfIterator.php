<?php

class BookShelfIterator implements Iterator
{
    /** @var BookShelf */
    private BookShelf $bookShelf;
    /** @var int */
    private int $index = 0;

    /**
     * @param BookShelf
     * @return void
     */
    public function __construct(BookShelf $bookShelf) {
        $this->index = 0;
        $this->bookShelf = $bookShelf;
    }

    public function rewind(): void
    {
        $this->index = 0;
    }

    public function current(): Book
    {
        return $this->bookShelf->getBookAt($this->index);
    }

    public function key(): int
    {
        return $this->index;
    }

    public function valid(): bool
    {
        return $this->bookShelf->getLength() > $this->index;
    }

    public function next(): void
    {   
        $this->index++;
    }

}