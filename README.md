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

## Usage Guidelines

### Generate a Single Random Color

The `getSingleColor` function within Color Randomizer offers a flexible and customizable approach to generating random colors, suitable for various applications such as dynamically changing website backgrounds. Below are examples of how to use this function in different scenarios.

**Example Usage:**

```php
use ByteForge\ColorRandomizer\ColorRandomizer;
 
// Example code...

// Generating a color without its name
$color = ColorRandomizer::getSingleColor($hex = true, $minBrightness = 30, $maxBrightness = 255, $withMostMatchedName = false);

// Generating a color with its name
$color = ColorRandomizer::getSingleColor($hex = true, $minBrightness = 30, $maxBrightness = 255, $withMostMatchedName = true, $formattedName = true);
```

#### Parameters Explained:

- $hex: Determines the format of the returned color code. true for hex format, false for RGB format.
- $minBrightness & $maxBrightness: Control the brightness of the generated color, where a higher value results in a lighter color, and a lower value results in a darker color. Note: $maxBrightness should not exceed 255.
- $withMostMatchedName: When set to true, the function returns an array with name and color_code, providing the closest matched color name. When false, only the color code is returned as a string.
- $formattedName: Specifies the format of the returned color name when $withMostMatchedName is true. true for a formatted name (e.g., 'Alice Blue'), false for the raw name (e.g., 'alice blue').
By leveraging these features, users can easily incorporate dynamic color functionalities into their projects, enhancing aesthetics and user experience.
