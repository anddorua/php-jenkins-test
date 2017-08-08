<?php
/**
 * Created by PhpStorm.
 * User: andriy
 * Date: 08.08.17
 * Time: 16:17
 */

namespace MyApp\Models;


class Pet
{
    private $voice = 'Woof';

    public function voice()
    {
        echo $this->voice;
    }

    public function getVoice()
    {
        return $this->voice;
    }
}