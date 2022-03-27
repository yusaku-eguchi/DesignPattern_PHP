<?php

require('BookShelf.php');

$bookShelf = new BookShelf();

$bookShelf->appendBook(new Book('Around the World in 80 days'));
$bookShelf->appendBook(new Book('Bible'));
$bookShelf->appendBook(new Book('Cinderella'));
$bookShelf->appendBook(new Book('Daddy-Long-Legs'));

$iterator = $bookShelf->getIterator();

while ($iterator->valid()) {
    $book = $iterator->current();
    echo $book->getName();
    echo "\n";
    $iterator->next();
}