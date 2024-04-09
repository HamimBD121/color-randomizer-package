<?php

use ByteForge\ColorRandomizer\ColorRandomizer;
use Illuminate\Support\Facades\Route;

$RouteSlug = env('COLOR_RANDOMIZER_COLOR_PAGE_ROUTE', '/byteforge/custom-randomizer/all-featured-colors');

Route::get($RouteSlug, function () {
    // $colors = ColorRandomizer::getMultipleColors(20, true, 30, 255, true);
    $colors = collect(ColorRandomizer::getColors())->reverse()->toArray();

    $debug = env('APP_DEBUG', true);
    $shouldRegister = env('COLOR_RANDOMIZER_COLOR_PAGE', 'none');
    $AppName = env('APP_NAME', 'Larvel');

    if ($shouldRegister == true) {
        return view('color-randomizer::all-colors', ['colors' => $colors, 'appName' => $AppName]);

    } else {
        abort(404, 'Page Not Found');
    }
});

Route::get('/cr/get-similar-colors/{rgbOrHex}/{goalAmount}/{hex?}/{minDiff?}/{maxDiff?}', function ($rgbOrHex, $goalAmount, $hex = null, $minDiff = 0.0, $maxDiff = 100) {
    $similarColors = ColorRandomizer::getSimilarColors($rgbOrHex, $goalAmount, $hex, $maxDiff, $minDiff);

    return response()->json($similarColors);
});
