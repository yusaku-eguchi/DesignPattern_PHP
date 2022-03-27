<?php

require('BookShelfIterator.php');
require('Book.php');

class BookShelf implements IteratorAggregate
{
    /** @var Book[] */
    private array $books = [];
    /** @var int */
    private int $last = 0;

    public function getBookAt(int $index): Book
    {
        return $this->books[$index];
    }

    public function appendBook(Book $book)
    {
        array_push($this->books, $book);
        $this->last++;
    }

    /**
     * @return int
     */
    public function getLength(): int
    {
        return $this->last;
    }

    public function getIterator(): BookShelfIterator
    { 
        return new BookShelfIterator($this);
    }
}