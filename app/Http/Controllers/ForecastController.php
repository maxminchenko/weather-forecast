<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForecastRequest;
use App\Services\ForecastService;
use Illuminate\Http\Request;

class ForecastController extends Controller
{
    public function searchForecast(ForecastRequest $request): array
    {
        $city = $request->validated();
        $forecast = new ForecastService();
        return $forecast->getForecast($city['lat'], $city['lon']);
    }
}
