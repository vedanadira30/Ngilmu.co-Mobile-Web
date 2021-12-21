// Path to run .vendor/bin/php.unit --boostrap vendor/autoload.php FileName.php
use PHPUnit\Framework\TestCase;

//Class yang mau di TEST.
require_once "Wordcount.php";

//Class untuk run Testing.
class SimpleTest extends  TestCase
{
    public function testCountWord()
{
    $Wc = new WordCount ();
        $TestSentece = "pokok empat kata ya"
        $WordCount = $Wc->countWords($TestSentence);

        $this->assertEquals(4, $WordCount);
    }
} 