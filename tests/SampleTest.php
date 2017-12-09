<?php 
// use PHPUnit\Framework\TestCase;
class SampleTest extends PHPUnit_Extensions_Selenium2TestCase
{
    
    protected function setUp()
    {
        $this->setBrowser('firefox');
        $this->setBrowserUrl('http://localhost/web/kafi-house-rent-/');
    }

    public function testTitle()
    {
        $this->url('index1.php');
        $this->assertEquals('Login Panel', $this->title());
    }
}
