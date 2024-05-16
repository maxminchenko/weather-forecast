<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForecastRequest;
use App\Services\ForecastService;
use Illuminate\Http\Request;

class ForecastController extends Controller
{
    public function searchForecast(ForecastRequest $request): array
    {
        $validated = $request->validated();
        $forecast_service = new ForecastService();
        return $forecast_service->getForecast($validated['lat'], $validated['lon']);
    }
}
