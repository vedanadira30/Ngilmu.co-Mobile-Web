<?php
// File : WordCount.php
class WordCount
{
    public function WordCount($sentence)
    {

        return count(explode("",$sentence));
    }
}
?>