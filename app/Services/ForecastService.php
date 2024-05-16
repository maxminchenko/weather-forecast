<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ForecastService
{
    const API_KEY = '95a5ba7afc1c26ddebc1f971e666a51f';
    const URI = 'https://api.openweathermap.org/data/2.5/weather?';

    public function getForecast($lat, $lon): array
    {
        $url = self::URI . 'lat=' . $lat . '&lon=' . $lon . '&appid=' . self::API_KEY;
        $response = Http::get($url)->body();
        return json_decode($response, true);
    }
}
