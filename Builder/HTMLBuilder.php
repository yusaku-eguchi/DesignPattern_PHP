<?php

// require('Builder.php');

class HTMLBuilder extends Builder
{
    private string $filename;
    private $fileHandler;

    public function makeTitle(string $title): void
    {
        $this->filename = $title . '.html';

        try {
            $this->fileHandler = fopen('./' . $this->filename, 'w+');
        } catch ( Exception $e) {
            echo $e;
        }

        fwrite(
            $this->fileHandler,
            "<html><head><title>" . $title . "</title></head><body>"
        );

        fwrite(
            $this->fileHandler,
            "<h1>" . $title . "</h1>"
        );
    }

    public function makeString(string $str): void
    {
        fwrite($this->fileHandler, "<p>" . $str . "</p>");
    }

    public function makeItems(array $items): void
    {
        fwrite($this->fileHandler, "<ul>");
        foreach ($items as $key => $item) {
            fwrite($this->fileHandler, "<li>" . $item . "</li>");
        }

        fwrite($this->fileHandler, "</ul>");
    }

    public function close(): void
    {
        fwrite($this->fileHandler, "</body></html>");
    }

    public function getResult(): string
    {
        return $this->filename;
    }
}