<?php
class ReverseString {

    private $alphabet;
    //to initialize constructor to the string
    public function __construct($alphabet) {
        $this->alphabet = $alphabet;
    }
     //Method to reverse each word in the string
     public function reverseWords( ){
        //spliat the string to the words
        $words = explode(' ', $this->alphabet);
        //reverse each word
        $reversedWords = array_map('Strrev', $words);
        //Join the reversed word back into a string
        return implode(' ',$reversedWords);

     }

}





