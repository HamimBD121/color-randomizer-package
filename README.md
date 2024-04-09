# Color Randomizer

## Overview

Color Randomizer is a comprehensive toolkit for color manipulation and generation. Designed to provide a plethora of functionalities ranging from the generation of random colors to the conversion between color formats, it caters to a wide array of needs for developers and designers alike. Boasting a library of over 450 colors, Color Randomizer ensures both accuracy and variety in its outputs. Key features include:

- Generating single or multiple random colors
- Converting between hex and RGB color formats
- Accessing a library of over 450 featured colors
- Comparing two colors to determine their difference
- Calculating color brightness
- Extracting the RGB components from an RGB string
- Retrieving HTML color codes for over 450 colors
- Finding the closest matching color name for a given color code
- Discovering similar or complementary colors
- Showcasing all supported colors in an aesthetically pleasing manner

## Installation
You Can Install The Package via Composer,

```bash
composer require byteforge/color-randomizer
```
You only require laravel^6 to effortlessly install the Color Randomizer Package. No additional dependencies are necessary; just stick to the default Laravel setup.

## Usage Guidelines

### Generate a Single Random Color

The `getSingleColor` function within Color Randomizer offers a flexible and customizable approach to generating random colors, suitable for various applications such as dynamically changing website backgrounds. Below are examples of how to use this function in different scenarios.

**Example Usage:**

```php
use ByteForge\ColorRandomizer\ColorRandomizer;
 
// Example code...

// Generating a color without its name
$color = ColorRandomizer::getSingleColor(hex: true, minBrightness: 30, maxBrightness: 255, withMostMatchedName: false);

// Generating a color with its name
$color = ColorRandomizer::getSingleColor(hex: true, minBrightness: 30, maxBrightness: 255, withMostMatchedName: true, formattedName: true);
```

#### Parameters Explained:

- `hex`: Determines the format of the returned color code. true for hex format, false for RGB format.
- `minBrightness & maxBrightness`: Control the brightness of the generated color, where a higher value results in a lighter color, and a lower value results in a darker color. Note: $maxBrightness should not exceed 255.
- `withMostMatchedName`: When set to true, the function returns an array with name and color_code, providing the closest matched color name. When false, only the color code is returned as a string.
- `formattedName`: Specifies the format of the returned color name when $withMostMatchedName is true. true for a formatted name (e.g., 'Alice Blue'), false for the raw name (e.g., 'alice blue').
By leveraging these features, users can easily incorporate dynamic color functionalities into their projects, enhancing aesthetics and user experience.

### Generate Multiple Random Colors

`getMultipleColors` This function utilize everything of `getSingleColor`, It just have an extra Argument At first That is the quantity of color, you want to get. It'll return you an array containing all the colors, or an all the arrays containing name and color_code.

**Example Usage:**
```php
// Other Codes..
$colors = ColorRandomizer::getMultipleColors(colorsAmount: 4, hex: true, minBrightness: 30, maxBrightness: 255, withMostMatchedName: true, formattedName: true); // returns an array like, [['name'=> Blue, 'color_code' => '#0000FF'], ['name' => 'Alice Blue', 'color_code' => '#F0F8FF' ...]]

$colors = ColorRandomizer::getMultipleColors(colorsAmount: 4, hex: true, minBrightness: 30, maxBrightness: 255, withMostMatchedName: false) ;// returns an array like, ['#ED872D', '#483D8B', '#DE3163' ...]
```

### Access Our An Array Containing All 450+ Colors
It's so simple, You can easily get all of my 450+ Color Hard work in a second through ColorRandomizer::getColors() or ColorRandomizer::$colors.

**Example Usage:**
```php
// 1st way
$colors = ColorRandomizer::getColors(formatNames: true); // You are able to Format Names through The function, This makes it better than the 2nd way.

// 2nd way
$colors = ColorRandomizer::$colors; // Color Names wont be formatted
```

#### RGB TO HEX & HEX TO RGB
We provide the best and easiest way to convert RGB To Hex and Hex To RGB.

**Example Usage:**
```php
// RGB To Hex

// 1st Way
$hex = ColorRandomizer::rgbToHex(fullRGB: "5, 91, 230"); // Make Sure You Specify The Argument Name Like 'fullRGB: $myRGB'. You can also give the RGB like rgb(5, 91, 230),
// Returns #055be6

// 2nd Way
$hex = ColorRandomizer::rgbToHex(r: 5, g: 91, b: 230); // Make Sure You Specify The Argument Name Like 'r:, g: and b:',
// Returns #055be6

// Hex To RGB
$rgb = ColorRandomizer::hexToRgb(hex: '#055be6');
// returns rgb(5, 91, 230)
```

#### Calculate Brightness And Difference Beetwen 2 Colors
We Provide 90%+ Accurate Results On the calculations. Easy & The Best Way for color calculation.

**Example Usage:**
```php
// Get Color Difference Between 2 colors
$colorDifference = ColorRandomizer::colorDifference(color1: '#0548e6', color2: '#05a6e6', hex: true); // Hex refers that your color1 and color2 is Hex or RGB.
// returns 94. Similar Colors Threshold Could Be 130

// Get Color Brightness
$colorBrightness = ColorRandomizer::calculateBrightness(rgbOrHex: '#0548e6', type: 'hex'); // type must be hex or rgb, Its for verifying your Color code Type.
// returns 69

```
