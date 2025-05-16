<?php
namespace Skyton\Enlangtranslet\Utilities;

class WeatherLogger
{
    public function log($weather)
    {
        // Fake logging
        file_put_contents('weather_log.txt', $weather);
    }
}