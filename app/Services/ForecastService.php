<?php

namespace App\Services;

class ForecastService
{
    const API_KEY = '95a5ba7afc1c26ddebc1f971e666a51f';
    public string $uri = 'https://api.openweathermap.org/data/2.5/weather?';

    public function getForecast($lat, $lon): array
    {
        $url = $this->uri . 'lat=' . $lat . '&lon=' . $lon . '&appid=' . self::API_KEY;
        $response = file_get_contents($url);
        return json_decode($response, true);

    }
}
