<?php
namespace Skyton\Enlangtranslet\Utilities;

class RandomGenerator
{
    public function generate($length)
    {
        // Fake random generation
        return substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0, $length);
    }
}