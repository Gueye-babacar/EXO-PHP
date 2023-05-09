<?php

class Word {
    private string $word;
    public function __construct(string $word)
    {
        $this->word = $word ;
    }

    public function getWord()
    {
        return $this->word;
    }
    public function setWord(string $word)
    {
        $this->word = $word;
    }
}

$wordObj = new Word('Hello Word');
echo $wordObj->getWord(); // Output: Hello Word


?>