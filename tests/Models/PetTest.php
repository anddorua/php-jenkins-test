<?php
/**
 * Created by PhpStorm.
 * User: andriy
 * Date: 08.08.17
 * Time: 16:20
 */

namespace Models;

use PHPUnit\Framework\TestCase;


class PetTest extends TestCase
{

    public function testPet()
    {
        $pet = new \MyApp\Models\Pet();
        $this->assertInstanceOf(\MyApp\Models\Pet::class, $pet);
    }

    public function testVoice()
    {
        $pet = new \MyApp\Models\Pet();
        $this->expectOutputString('Woof');
        $pet->voice();
    }

    public function testGetVoice()
    {
        $pet = new \MyApp\Models\Pet();
        $this->assertEquals('Woof', $pet->getVoice());
    }

}