<?php

    // Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php
    // Butuh Framework PHPUnit
    use PHPUnit\Framework\TestCase;

    // Class yang mau di TEST.
    require_once "register.php";

    // Class untuk run Testing.
    class RegisterTest extends TestCase {
        public function testRegister() {
            $test = new Register();
            
            $email="rahadian.sarasnasifka@gmail.com";
            $pass="88888888";
            $userName="rahadian";
            $result= $test->login($email, $pass, $userName);

            $this->assertEquals($result, 'Anda berhasil login');
            echo $result;
        }
    }
?>