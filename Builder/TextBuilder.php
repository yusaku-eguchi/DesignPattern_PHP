<?php

require('Builder.php');

class TextBuilder extends Builder
{
    private string $text = '';

    public function makeTitle(string $title): void
    {
        $this->text .= "==========================\n";
        $this->text .= "「" . $title . "」" . "\n";
        $this->text .= "\n";
    }

    public function makeString(string $str): void
    {
        $this->text .= '■' . $str . "\n";
        $this->text .= "\n";
    }

    public function makeItems(array $items): void
    {
        foreach ($items as $key => $item) {
            $this->text .= " ・" . $item . "\n";
        }
        $this->text .= "\n";
    }

    public function close(): void
    {
        $this->text .= "==========================\n";
    }

    public function getResult(): string
    {
        return $this->text;
    }
}