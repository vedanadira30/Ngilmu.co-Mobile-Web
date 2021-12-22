<?php

    // Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php
    // Butuh Framework PHPUnit
    use PHPUnit\Framework\TestCase;

    // Class yang mau di TEST.
    require_once "login.php";

    // Class untuk run Testing.
    class loginTest extends TestCase {
        public function testlogin() {
            $test = new Login();
            
            $email="rahadian.sarasnasifka@gmail.com";
            $pass="88888888";
            $result= $test->login($email, $pass);

            $this->assertEquals($result, 'Anda berhasil login');
            echo $result;
        }
    }
?>