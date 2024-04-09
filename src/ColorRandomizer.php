<?php

namespace ByteForge\ColorRandomizer;

use Exception;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class ColorRandomizer
{
    public static ?array $colors = [
        ['name' => 'alice blue', 'hex' => 'F0F8FF'], ['name' => 'antique white', 'hex' => 'FAEBD7'], ['name' => 'aqua', 'hex' => '00FFFF'], ['name' => 'aquamarine', 'hex' => '7FFFD4'], ['name' => 'azure', 'hex' => '007FFF'], ['name' => 'beige', 'hex' => 'F5F5DC'], ['name' => 'bisque', 'hex' => 'FFE4C4'], ['name' => 'black', 'hex' => '000000'], ['name' => 'blanched almond', 'hex' => 'FFEBCD'], ['name' => 'blue', 'hex' => '0000FF'], ['name' => 'blue violet', 'hex' => '8A2BE2'], ['name' => 'brown', 'hex' => 'A52A2A'], ['name' => 'burlywood', 'hex' => 'DEB887'], ['name' => 'cadet blue', 'hex' => '5F9EA0'], ['name' => 'chartreuse', 'hex' => '7FFF00'],
        ['name' => 'chocolate', 'hex' => '7B3F00'], ['name' => 'coral', 'hex' => 'FF7F50'], ['name' => 'cornflower blue', 'hex' => '6495ED'], ['name' => 'cornsilk', 'hex' => 'FFF8DC'], ['name' => 'crimson', 'hex' => 'DC143C'], ['name' => 'cyan', 'hex' => '00FFFF'], ['name' => 'dark blue', 'hex' => '00008B'], ['name' => 'dark cyan', 'hex' => '008B8B'], ['name' => 'dark goldenrod', 'hex' => 'B8860B'], ['name' => 'dark gray', 'hex' => 'A9A9A9'], ['name' => 'dark green', 'hex' => '006400'], ['name' => 'dark grey', 'hex' => 'A9A9A9'], ['name' => 'dark khaki', 'hex' => 'BDB76B'], ['name' => 'dark magenta', 'hex' => '8B008B'], ['name' => 'dark olive green', 'hex' => '556B2F'], ['name' => 'dark orange', 'hex' => 'FF8C00'],
        ['name' => 'dark orchid', 'hex' => '9932CC'], ['name' => 'dark red', 'hex' => '8B0000'], ['name' => 'dark salmon', 'hex' => 'E9967A'], ['name' => 'dark sea green', 'hex' => '8FBC8F'], ['name' => 'dark slate blue', 'hex' => '483D8B'], ['name' => 'dark slate gray', 'hex' => '2F4F4F'], ['name' => 'dark slate grey', 'hex' => '2F4F4F'], ['name' => 'dark turquoise', 'hex' => '00CED1'], ['name' => 'dark violet', 'hex' => '9400D3'], ['name' => 'deep pink', 'hex' => 'FF1493'], ['name' => 'deep sky blue', 'hex' => '00BFFF'], ['name' => 'dim gray', 'hex' => '696969'], ['name' => 'dim grey', 'hex' => '696969'], ['name' => 'dodger blue', 'hex' => '1E90FF'], ['name' => 'firebrick', 'hex' => 'B22222'],
        ['name' => 'floral white', 'hex' => 'FFFAF0'], ['name' => 'forest green', 'hex' => '228B22'], ['name' => 'fuchsia', 'hex' => 'FF00FF'], ['name' => 'gainsboro', 'hex' => 'DCDCDC'], ['name' => 'ghost white', 'hex' => 'F8F8FF'], ['name' => 'gold', 'hex' => 'FFD700'], ['name' => 'goldenrod', 'hex' => 'DAA520'], ['name' => 'gray', 'hex' => '808080'], ['name' => 'green', 'hex' => '008000'], ['name' => 'green yellow', 'hex' => 'ADFF2F'], ['name' => 'grey', 'hex' => '808080'], ['name' => 'honeydew', 'hex' => 'F0FFF0'], ['name' => 'hot pink', 'hex' => 'FF69B4'], ['name' => 'indian red', 'hex' => 'CD5C5C'], ['name' => 'indigo', 'hex' => '4B0082'],
        ['name' => 'ivory', 'hex' => 'FFFFF0'], ['name' => 'khaki', 'hex' => 'C3B091'], ['name' => 'lavender', 'hex' => 'E6E6FA'], ['name' => 'lavender blush', 'hex' => 'FFF0F5'], ['name' => 'lawn green', 'hex' => '7CFC00'], ['name' => 'lemon chiffon', 'hex' => 'FFFACD'], ['name' => 'light blue', 'hex' => 'ADD8E6'], ['name' => 'light coral', 'hex' => 'F08080'], ['name' => 'light cyan', 'hex' => 'E0FFFF'], ['name' => 'light goldenrod yellow', 'hex' => 'FAFAD2'], ['name' => 'light gray', 'hex' => 'D3D3D3'], ['name' => 'light green', 'hex' => '90EE90'], ['name' => 'light grey', 'hex' => 'D3D3D3'], ['name' => 'light pink', 'hex' => 'FFB6C1'], ['name' => 'light salmon', 'hex' => 'FFA07A'],
        ['name' => 'light sea green', 'hex' => '20B2AA'], ['name' => 'light sky blue', 'hex' => '87CEFA'], ['name' => 'light slate gray', 'hex' => '778899'], ['name' => 'light slate grey', 'hex' => '778899'], ['name' => 'light steel blue', 'hex' => 'B0C4DE'], ['name' => 'light yellow', 'hex' => 'FFFFE0'], ['name' => 'lime', 'hex' => 'BFFF00'], ['name' => 'lime green', 'hex' => '32CD32'], ['name' => 'linen', 'hex' => 'FAF0E6'], ['name' => 'magenta', 'hex' => 'FF00FF'], ['name' => 'maroon', 'hex' => '800000'], ['name' => 'medium aquamarine', 'hex' => '66CDAA'], ['name' => 'medium blue', 'hex' => '0000CD'], ['name' => 'medium orchid', 'hex' => 'BA55D3'],
        ['name' => 'medium purple', 'hex' => '9370D0'], ['name' => 'medium sea green', 'hex' => '3CB371'], ['name' => 'medium slate blue', 'hex' => '7B68EE'], ['name' => 'medium spring green', 'hex' => '00FA9A'], ['name' => 'medium turquoise', 'hex' => '48D1CC'], ['name' => 'medium violet red', 'hex' => 'C71585'], ['name' => 'midnight blue', 'hex' => '191970'], ['name' => 'mint cream', 'hex' => 'F5FFFA'], ['name' => 'misty rose', 'hex' => 'FFE4E1'], ['name' => 'moccasin', 'hex' => 'FFE4B5'], ['name' => 'navajo white', 'hex' => 'FFDEAD'], ['name' => 'navy', 'hex' => '000080'], ['name' => 'old lace', 'hex' => 'FDF5E6'], ['name' => 'olive', 'hex' => '808000'], ['name' => 'olive drab', 'hex' => '6B8E23'],
        ['name' => 'orange', 'hex' => 'FFA500'], ['name' => 'orange red', 'hex' => 'FF4500'], ['name' => 'orchid', 'hex' => 'DA70D6'], ['name' => 'pale goldenrod', 'hex' => 'EEE8AA'], ['name' => 'pale green', 'hex' => '98FB98'], ['name' => 'pale turquoise', 'hex' => 'AFEEEE'], ['name' => 'pale violet red', 'hex' => 'DB7093'], ['name' => 'papaya whip', 'hex' => 'FFEFD5'], ['name' => 'peach puff', 'hex' => 'FFDAB9'], ['name' => 'peru', 'hex' => 'CD853F'], ['name' => 'pink', 'hex' => 'FFC0CB'], ['name' => 'plum', 'hex' => '8E4585'], ['name' => 'powder blue', 'hex' => 'B0E0E6'], ['name' => 'purple', 'hex' => '800080'], ['name' => 'red', 'hex' => 'FF0000'], ['name' => 'rosy brown', 'hex' => 'BC8F8F'],
        ['name' => 'royal blue', 'hex' => '4169E1'], ['name' => 'saddle brown', 'hex' => '8B4513'], ['name' => 'salmon', 'hex' => 'FA8072'], ['name' => 'sandy brown', 'hex' => 'F4A460'], ['name' => 'sea green', 'hex' => '2E8B57'], ['name' => 'seashell', 'hex' => 'FFF5EE'], ['name' => 'sienna', 'hex' => 'A0522D'], ['name' => 'silver', 'hex' => 'C0C0C0'], ['name' => 'sky blue', 'hex' => '87CEEB'], ['name' => 'slate blue', 'hex' => '6A5ACD'], ['name' => 'slate gray', 'hex' => '708090'], ['name' => 'slate grey', 'hex' => '708090'], ['name' => 'snow', 'hex' => 'FFFAFA'], ['name' => 'spring green', 'hex' => '00FF7F'],
        ['name' => 'steelblue', 'hex' => '4682B4'], ['name' => 'tan', 'hex' => 'D2B48C'], ['name' => 'teal', 'hex' => '008080'], ['name' => 'thistle', 'hex' => 'D8BFD8'], ['name' => 'tomato', 'hex' => 'FF6347'], ['name' => 'turquoise', 'hex' => '40E0D0'], ['name' => 'violet', 'hex' => '8F00FF'], ['name' => 'wheat', 'hex' => 'F5DEB3'], ['name' => 'white', 'hex' => 'FFFFFF'], ['name' => 'whitesmoke', 'hex' => 'F5F5F5'], ['name' => 'yellow', 'hex' => 'FFFF00'], ['name' => 'yellowgreen', 'hex' => '9ACD32'], ['name' => 'almond', 'hex' => 'EFDECD'], ['name' => 'amethyst', 'hex' => '9966CC'], ['name' => 'apricot', 'hex' => 'FBCEB1'],
        ['name' => 'auburn', 'hex' => 'A52A2A'], ['name' => 'avocado', 'hex' => '568203'], ['name' => 'banana', 'hex' => 'FFE135'], ['name' => 'bistre', 'hex' => '3D2B1F'], ['name' => 'blush', 'hex' => 'DE5D83'], ['name' => 'bronze', 'hex' => 'CD7F32'], ['name' => 'bubblegum', 'hex' => 'FFC1CC'], ['name' => 'buff', 'hex' => 'F0DC82'], ['name' => 'burgundy', 'hex' => '800020'], ['name' => 'carmine', 'hex' => '960018'], ['name' => 'carnation', 'hex' => 'FFA6C9'], ['name' => 'celadon', 'hex' => 'ACE1AF'], ['name' => 'cerulean', 'hex' => '007BA7'], ['name' => 'champagne', 'hex' => 'F7E7CE'], ['name' => 'charcoal', 'hex' => '36454F'],
        ['name' => 'cherry', 'hex' => 'DE3163'], ['name' => 'chestnut', 'hex' => '954535'], ['name' => 'coal', 'hex' => '000000'], ['name' => 'cobalt', 'hex' => '0047AB'], ['name' => 'copper', 'hex' => 'B87333'], ['name' => 'corn', 'hex' => 'FBEC5D'], ['name' => 'cream', 'hex' => 'FFFDD0'], ['name' => 'denim', 'hex' => '1560BD'], ['name' => 'ebony', 'hex' => '555D50'], ['name' => 'ecru', 'hex' => 'C2B280'], ['name' => 'emerald', 'hex' => '50C878'], ['name' => 'fawn', 'hex' => 'E5AA70'], ['name' => 'fern', 'hex' => '4F7942'], ['name' => 'flax', 'hex' => 'EEDC82'], ['name' => 'frost', 'hex' => 'E4F6E7'],
        ['name' => 'ginger', 'hex' => 'B06500'], ['name' => 'grape', 'hex' => '6F2DA8'], ['name' => 'graphite', 'hex' => '383838'], ['name' => 'harlequin', 'hex' => '3FFF00'], ['name' => 'hazel', 'hex' => '907865'], ['name' => 'heliotrope', 'hex' => 'DF73FF'], ['name' => 'honey', 'hex' => 'DDB900'], ['name' => 'ice', 'hex' => '71A6D2'], ['name' => 'jade', 'hex' => '00A86B'], ['name' => 'jet', 'hex' => '343434'], ['name' => 'lapis', 'hex' => '26619C'], ['name' => 'lemon', 'hex' => 'FFF700'], ['name' => 'lilac', 'hex' => 'C8A2C8'], ['name' => 'mahogany', 'hex' => 'C04000'], ['name' => 'mauve', 'hex' => 'E0B0FF'],
        ['name' => 'mink', 'hex' => '967117'], ['name' => 'mint', 'hex' => '3EB489'], ['name' => 'mocha', 'hex' => '967117'], ['name' => 'ochre', 'hex' => 'CC7722'], ['name' => 'onyx', 'hex' => '0F0F0F'], ['name' => 'opal', 'hex' => 'B0E0E6'], ['name' => 'peach', 'hex' => 'FFE5B4'], ['name' => 'pearl', 'hex' => 'EAE0C8'], ['name' => 'peridot', 'hex' => 'E6E200'], ['name' => 'platinum', 'hex' => 'E5E4E2'], ['name' => 'prussian', 'hex' => '003153'], ['name' => 'puce', 'hex' => 'CC8899'], ['name' => 'pumpkin', 'hex' => 'FF7518'], ['name' => 'raspberry', 'hex' => 'E30B5D'], ['name' => 'rose', 'hex' => 'FF007F'],
        ['name' => 'ruby', 'hex' => 'E0115F'], ['name' => 'saffron', 'hex' => 'F4C430'], ['name' => 'sage', 'hex' => 'BCB88A'], ['name' => 'sapphire', 'hex' => '0F52BA'], ['name' => 'scarlet', 'hex' => 'FF2400'], ['name' => 'sepia', 'hex' => '704214'], ['name' => 'smoke', 'hex' => '738276'], ['name' => 'steel', 'hex' => '43464B'], ['name' => 'strawberry', 'hex' => 'FC5A8D'], ['name' => 'sunshine', 'hex' => 'FDB813'], ['name' => 'taupe', 'hex' => '483C32'], ['name' => 'topaz', 'hex' => 'FFC87C'], ['name' => 'umber', 'hex' => '635147'], ['name' => 'vanilla', 'hex' => 'F3E5AB'], ['name' => 'vermilion', 'hex' => 'E34234'],
        ['name' => 'viridian', 'hex' => '40826D'], ['name' => 'wine', 'hex' => '722F37'], ['name' => 'zaffre', 'hex' => '0014A8'], ['name' => 'amaranth', 'hex' => 'E52B50'], ['name' => 'amber', 'hex' => 'FFBF00'], ['name' => 'baby blue', 'hex' => '89CFF0'], ['name' => 'blue green', 'hex' => '0095B6'], ['name' => 'blue violet', 'hex' => '8A2BE2'], ['name' => 'byzantium', 'hex' => '702963'], ['name' => 'carnation pink', 'hex' => 'FFA6C9'], ['name' => 'cerise', 'hex' => 'DE3163'], ['name' => 'chartreuse green', 'hex' => '7FFF00'], 
        ['name' => 'cherry blossom pink', 'hex' => 'FFB7C5'], ['name' => 'cinnamon', 'hex' => 'D2691E'], ['name' => 'cobalt blue', 'hex' => '0047AB'], ['name' => 'coffee', 'hex' => '6F4E37'], ['name' => 'cool grey', 'hex' => 'B7C9E2'], ['name' => 'dandelion', 'hex' => 'F0E130'], ['name' => 'desert sand', 'hex' => 'EDC9AF'], ['name' => 'eggplant', 'hex' => '614051'], ['name' => 'falu red', 'hex' => '801818'], ['name' => 'fern green', 'hex' => '4F7942'], ['name' => 'fire engine red', 'hex' => 'CE2029'], ['name' => 'flame', 'hex' => 'E25822'], 
        ['name' => 'flamingo pink', 'hex' => 'FC8EAC'], ['name' => 'forest green', 'hex' => '228B22'], ['name' => 'gamboge', 'hex' => 'E49B0F'], ['name' => 'golden brown', 'hex' => '996515'], ['name' => 'golden yellow', 'hex' => 'FFDF00'], ['name' => 'granny smith apple', 'hex' => 'A8E4A0'], ['name' => 'green yellow', 'hex' => 'ADFF2F'], ['name' => 'hollywood cerise', 'hex' => 'F400A1'], ['name' => 'hot pink', 'hex' => 'FF69B4'], ['name' => 'iceberg', 'hex' => '71A6D2'], ['name' => 'international orange', 'hex' => 'FF4F00'], ['name' => 'iris', 'hex' => '5A4FCF'], 
        ['name' => 'isabelline', 'hex' => 'F4F0EC'], ['name' => 'jasmine', 'hex' => 'F8DE7E'], ['name' => 'jungle green', 'hex' => '29AB87'], ['name' => 'kelly green', 'hex' => '4CBB17'], ['name' => 'lawn green', 'hex' => '7CFC00'], ['name' => 'licorice', 'hex' => '1A1110'], 
        ['name' => 'lime green', 'hex' => '32CD32'], ['name' => 'magic mint', 'hex' => 'AAF0D1'], ['name' => 'xanadu', 'hex' => '738678'], ['name' => 'coquelicot', 'hex' => 'FF3800'], ['name' => 'fallow', 'hex' => 'C19A6B'], ['name' => 'mikado', 'hex' => 'FFC40C'], ['name' => 'smalt', 'hex' => '003399'], ['name' => 'zomp', 'hex' => '39A78E'], ['name' => 'bazaar', 'hex' => '98777B'], ['name' => 'feldgrau', 'hex' => '4D5D53'], ['name' => 'wenge', 'hex' => '645452'],
        ['name' => 'azure mist', 'hex' => 'F0FFFF'], ['name' => 'electric lime', 'hex' => 'CCFF00'], ['name' => 'light orchid', 'hex' => 'E6A8D7'], ['name' => 'mellow apricot', 'hex' => 'F8B878'], ['name' => 'navy purple', 'hex' => '9457EB'], ['name' => 'pale silver', 'hex' => 'C9C0BB'], ['name' => 'rich black', 'hex' => '004040'], ['name' => 'ruby red', 'hex' => '9B111E'], ['name' => 'safety orange', 'hex' => 'FF6700'], ['name' => 'sapphire blue', 'hex' => '0067A5'], ['name' => 'titanium yellow', 'hex' => 'EEE600'], ['name' => 'ultramarine blue', 'hex' => '4166F5'], ['name' => 'venetian red', 'hex' => 'C80815'], ['name' => 'verdigris', 'hex' => '43B3AE'], ['name' => 'vivid sky blue', 'hex' => '00CCFF'],
        ['name' => 'wild strawberry', 'hex' => 'FF43A4'], ['name' => 'zinnwaldite brown', 'hex' => '2C1608'], ['name' => 'acid green', 'hex' => 'B0BF1A'], ['name' => 'aero blue', 'hex' => 'C9FFE5'], ['name' => 'african violet', 'hex' => 'B284BE'], ['name' => 'air superiority blue', 'hex' => '72A0C1'], ['name' => 'alizarin crimson', 'hex' => 'E32636'], ['name' => 'antique bronze', 'hex' => '665D1E'], ['name' => 'antique ruby', 'hex' => '841B2D'], ['name' => 'ao', 'hex' => '008000'], ['name' => 'apple green', 'hex' => '8DB600'], ['name' => 'apricot crayola', 'hex' => 'FFD1DC'], ['name' => 'aqua deep', 'hex' => '014B43'], ['name' => 'aqua forest', 'hex' => '5FA777'], ['name' => 'aquamarine (crayola)', 'hex' => '78DBE2'],
        ['name' => 'artic lime', 'hex' => 'D0FF14'], ['name' => 'baby powder', 'hex' => 'FEFEFA'], ['name' => 'baker-miller pink', 'hex' => 'FF91AF'], ['name' => 'ball blue', 'hex' => '21ABCD'], ['name' => 'banana mania', 'hex' => 'FAE7B5'], ['name' => 'banana yellow', 'hex' => 'FFE135'], ['name' => 'battleship grey', 'hex' => '848482'], ['name' => 'bazaar', 'hex' => '98777B'], ['name' => 'beau blue', 'hex' => 'BCD4E6'], ['name' => 'beer', 'hex' => 'F28E1C'], ['name' => 'bittersweet', 'hex' => 'FE6F5E'], ['name' => 'bittersweet shimmer', 'hex' => 'BF4F51'], ['name' => 'black bean', 'hex' => '3D0C02'], ['name' => 'black olive', 'hex' => '3B3C36'], ['name' => 'blizzard blue', 'hex' => 'ACE5EE'],
        ['name' => 'blond', 'hex' => 'FAF0BE'], ['name' => 'blue bell', 'hex' => 'A2A2D0'], ['name' => 'blue sapphire', 'hex' => '126180'], ['name' => 'blue yonder', 'hex' => '5072A7'], ['name' => 'bluetiful', 'hex' => '3C69E7'], ['name' => 'booger buster', 'hex' => 'DDE26A'], ['name' => 'bright green', 'hex' => '66FF00'], ['name' => 'bright lilac', 'hex' => 'D891EF'], ['name' => 'bright maroon', 'hex' => 'C32148'], ['name' => 'bright navy blue', 'hex' => '1974D2'], ['name' => 'bright yellow', 'hex' => 'FFAA1D'], ['name' => 'brilliant azure', 'hex' => '3399FF'], ['name' => 'brilliant lavender', 'hex' => 'F4BBFF'], ['name' => 'brilliant rose', 'hex' => 'FF55A3'], ['name' => 'brink pink', 'hex' => 'FB607F'],
        ['name' => 'british racing green', 'hex' => '004225'], ['name' => 'bronze yellow', 'hex' => '737000'], ['name' => 'brown sugar', 'hex' => 'AF6E4D'], ['name' => 'brunswick green', 'hex' => '1B4D3E'], ['name' => 'bubble gum', 'hex' => 'FFC1CC'], ['name' => 'bud green', 'hex' => '7BB661'], ['name' => 'buff orange', 'hex' => 'FFC680'], ['name' => 'burgundy', 'hex' => '800020'], ['name' => 'burlywood', 'hex' => 'DEB887'], ['name' => 'burnished brown', 'hex' => 'A17A74'], ['name' => 'burnt orange', 'hex' => 'CC5500'], ['name' => 'burnt sienna', 'hex' => 'E97451'], ['name' => 'burnt umber', 'hex' => '8A3324'], ['name' => 'byzantine', 'hex' => 'BD33A4'], ['name' => 'cadmium green', 'hex' => '006B3C'],
        ['name' => 'cadmium orange', 'hex' => 'ED872D'], ['name' => 'cadmium red', 'hex' => 'E30022'], ['name' => 'cadmium yellow', 'hex' => 'FFF600'], ['name' => 'café au lait', 'hex' => 'A67B5B'], ['name' => 'café noir', 'hex' => '4B3621'], ['name' => 'cambridge blue', 'hex' => 'A3C1AD'], ['name' => 'camel', 'hex' => 'C19A6B'], ['name' => 'cameo pink', 'hex' => 'EFBBCC'], ['name' => 'canary', 'hex' => 'FFFF99'], ['name' => 'canary yellow', 'hex' => 'FFEF00'], ['name' => 'candy apple red', 'hex' => 'FF0800'], ['name' => 'candy pink', 'hex' => 'E4717A'], ['name' => 'capri', 'hex' => '00BFFF'], ['name' => 'caput mortuum', 'hex' => '592720'], ['name' => 'cardinal', 'hex' => 'C41E3A'],
        ['name' => 'carolina blue', 'hex' => '56A0D3'], ['name' => 'celadon green', 'hex' => '2F847C'], ['name' => 'celeste', 'hex' => 'B2FFFF'], ['name' => 'cerulean frost', 'hex' => '6D9BC3'], ['name' => 'cg blue', 'hex' => '007AA5'], ['name' => 'cg red', 'hex' => 'E03C31'], ['name' => 'chamoisee', 'hex' => 'A0785A'], ['name' => 'charleston green', 'hex' => '232B2B'], ['name' => 'charm pink', 'hex' => 'E68FAC'], ['name' => 'chartreuse traditional', 'hex' => 'DFFF00'], ['name' => 'cherry red', 'hex' => 'F7022A'], ['name' => 'china pink', 'hex' => 'DE6FA1'], ['name' => 'china rose', 'hex' => 'A8516E'], ['name' => 'chinese red', 'hex' => 'AA381E'], ['name' => 'chinese violet', 'hex' => '856088'],
        ['name' => 'chlorophyll green', 'hex' => '4AFF00'], ['name' => 'chocolate traditional', 'hex' => '7B3F00'], ['name' => 'chocolate cosmos', 'hex' => '58111A'], ['name' => 'chrome yellow', 'hex' => 'FFA700'], ['name' => 'cinereous', 'hex' => '98817B'], ['name' => 'cinnabar', 'hex' => 'E34234'], ['name' => 'citrine', 'hex' => 'E4D00A'], ['name' => 'citron', 'hex' => '9FA91F'], ['name' => 'claret', 'hex' => '7F1734'], ['name' => 'cobalt green', 'hex' => '3D9140'], ['name' => 'cocoa brown', 'hex' => 'D2691E'], ['name' => 'coconut', 'hex' => '965A3E'], ['name' => 'coffee bean', 'hex' => '3D0C02'], ['name' => 'columbia blue', 'hex' => '9BDDFF'], ['name' => 'congo pink', 'hex' => 'F88379'],
        ['name' => 'cool black', 'hex' => '002E63'], ['name' => 'cool grey', 'hex' => '8C92AC'], ['name' => 'copper', 'hex' => 'DA8A67'], ['name' => 'copper penny', 'hex' => 'AD6F69'], ['name' => 'copper red', 'hex' => 'CB6D51'], ['name' => 'copper rose', 'hex' => '996666'], ['name' => 'coquelicot', 'hex' => 'FF3800'], ['name' => 'coral pink', 'hex' => 'F88379'], ['name' => 'coral red', 'hex' => 'FF4040'], ['name' => 'cordovan', 'hex' => '893F45'], ['name' => 'corn', 'hex' => 'FBEC5D'], ['name' => 'cornell red', 'hex' => 'B31B1B'], ['name' => 'cornflower', 'hex' => '9ACEEB'], ['name' => 'cornsilk', 'hex' => 'FFF8DC'], ['name' => 'cosmic cobalt', 'hex' => '2E2D88'],
        ['name' => 'cosmic latte', 'hex' => 'FFF8E7'], ['name' => 'coyote brown', 'hex' => '81613C'], ['name' => 'cotton candy', 'hex' => 'FFBCD9'], ['name' => 'cream', 'hex' => 'FFFDD0'], ['name' => 'crimson glory', 'hex' => 'BE0032'], ['name' => 'crimson red', 'hex' => '990000'], ['name' => 'crystal', 'hex' => 'A7D8DE'], ['name' => 'cultured', 'hex' => 'F5F5F5'], ['name' => 'cyan azure', 'hex' => '4E82B4'], ['name' => 'cyan-blue azure', 'hex' => '4682BF'], ['name' => 'cyan cobalt blue', 'hex' => '28589C'], ['name' => 'cyan cornflower blue', 'hex' => '188BC2'], ['name' => 'cyber grape', 'hex' => '58427C'], ['name' => 'cyber yellow', 'hex' => 'FFD300'], ['name' => 'cyclamen', 'hex' => 'F56FA1'],
        ['name' => 'daffodil', 'hex' => 'FFFF31'], ['name' => 'dandelion', 'hex' => 'F0E130'], ['name' => 'dark blue-gray', 'hex' => '666699'], ['name' => 'dark brown', 'hex' => '654321'], ['name' => 'dark byzantium', 'hex' => '5D3954'], ['name' => 'dark candy apple red', 'hex' => 'A40000'], ['name' => 'dark cerulean', 'hex' => '08457E'], ['name' => 'dark chestnut', 'hex' => '986960'], ['name' => 'dark coral', 'hex' => 'CD5B45'], ['name' => 'dark electric blue', 'hex' => '536878'], ['name' => 'dark goldenrod', 'hex' => 'B8860B'], ['name' => 'dark green', 'hex' => '013220'], ['name' => 'dark jungle green', 'hex' => '1A2421'], ['name' => 'dark lava', 'hex' => '483C32'], ['name' => 'dark liver', 'hex' => '534B4F'],
        ['name' => 'dark liver', 'hex' => '543D37'], ['name' => 'dark magenta', 'hex' => '8B008B'], ['name' => 'dark moss green', 'hex' => '4A5D23'], ['name' => 'dark olive green', 'hex' => '556B2F'], ['name' => 'dark orange', 'hex' => 'FF8C00'], ['name' => 'dark orchid', 'hex' => '9932CC'], ['name' => 'dark pastel green', 'hex' => '03C03C'], ['name' => 'dark purple', 'hex' => '301934'], ['name' => 'dark raspberry', 'hex' => '872657'], ['name' => 'dark red', 'hex' => '8B0000'], ['name' => 'dark salmon', 'hex' => 'E9967A'], ['name' => 'dark scarlet', 'hex' => '560319'], ['name' => 'dark sea green', 'hex' => '8FBC8F'], ['name' => 'dark sienna', 'hex' => '3C1414'], ['name' => 'dark sky blue', 'hex' => '8CBED6'],
        ['name' => 'dark slate', 'hex' => '483D8B'], ['name' => 'dark spring green', 'hex' => '177245'], ['name' => 'dark tan', 'hex' => '918151'], ['name' => 'dark tangerine', 'hex' => 'FFA812'], ['name' => 'dark terra cotta', 'hex' => 'CC4E5C'], ['name' => 'dark turquoise', 'hex' => '00CED1'], ['name' => 'dark vanilla', 'hex' => 'D1BEA8'], ['name' => 'dark yellow', 'hex' => '9B870C'], ['name' => 'dartmouth green', 'hex' => '00703C'], ['name' => 'davy\'s grey', 'hex' => '555555'], ['name' => 'debian red', 'hex' => 'D70A53'], ['name' => 'deep aquamarine', 'hex' => '40826D'], ['name' => 'deep carmine', 'hex' => 'A9203E'], ['name' => 'deep carmine pink', 'hex' => 'EF3038'],

    ];

    /*
        Get All Colors After Any Kind Of Proccesing Or Could Be Used For getting 
        All the Colors Staticaly 
    */

    public static function getColors($formatNames = true)
    {
        $colors = self::$colors;
    
        if ($formatNames == true) {
            foreach ($colors as $key => $color) {
                $colors[$key]['name'] = ucwords($color['name']);
            }
        }
    
        return $colors;
    }    

    public static function colorDifference($color1, $color2, $hex = false)
    {
        if ($hex) {
            $color1 = self::hexToRgb($color1);
            $color2 = self::hexToRgb($color2);
        }

        $color1 = self::extractRGBComponents($color1);
        $color2 = self::extractRGBComponents($color2);

        $color1 = [$color1['r'], $color1['g'], $color1['b']];
        $color2 = [$color2['r'], $color2['g'], $color2['b']];

        return sqrt(
            pow($color1[0] - $color2[0], 2) +
            pow($color1[1] - $color2[1], 2) +
            pow($color1[2] - $color2[2], 2)
        );
    }

    // Calculate Color Brightness
    public static function calculateBrightness($rgbOrHex, $type = 'rgb'): int|string
    {
        if ($type == 'rgb') {
            $rgbOrHex = $rgbOrHex;

        } elseif ($type == 'hex') {
            if (!is_string($rgbOrHex)) {
                throw new \InvalidArgumentException('$rgbOrHex Argument Must be a Valid Hex And String, when $type is hex');
            }

            $rgbOrHex = self::hexToRgb($rgbOrHex);

        } else {
            throw new Exception('The $type Argument Must be rgb or hex. but '.$type.' Given');
        }

        $rgbOrHex = self::extractRGBComponents($rgbOrHex);

        $r = (int) $rgbOrHex['r'];
        $g = (int) $rgbOrHex['g'];
        $b = (int) $rgbOrHex['b'];

        if (!is_integer($r) || !is_integer($g) || !is_integer($b)) {
            throw new \InvalidArgumentException('$r, $g, $b parameter must be a integer. (From Class. ColorRandomizer, Function. getSingleColor())');
        }

        $brightness = ($r * 299 + $g * 587 + $b * 114) / 1000;
        return $brightness;
    }

    // Get Random Single Color
    public static function getSingleColor($hex = false, $minBrightness = 30, $maxBrightness = 255, $withMostMatchedName = false, $formattedName = true): string | array
    {
        // Validating arguments

        if (!is_bool($hex)) {
            throw new \InvalidArgumentException('$hex parameter must be a boolean.');
        }

        if (!is_integer($minBrightness) || !is_integer($maxBrightness)) {
            throw new \InvalidArgumentException('$minBrightness and $maxBrightness parameters must be integers.');
        }

        if ($maxBrightness > 255) {
            throw new \InvalidArgumentException('$maxBrightness Must Be Lower Than Or Equal To 255');

        }

        // Generate random RGB values within the specified brightness range
        $red = mt_rand($minBrightness, $maxBrightness);
        $green = mt_rand($minBrightness, $maxBrightness);
        $blue = mt_rand($minBrightness, $maxBrightness);

        if ($hex) {
            $colorCode =  self::rgbToHex($red, $green, $blue);
        } else {
            $colorCode =  "rgb($red, $green, $blue)";
        }

        if ($withMostMatchedName) {
            $colorName = self::getNearestNameFromCode($hex, $colorCode);
            if ($formattedName) {
                $colorName = preg_replace('/(?<!\ )[A-Z]/', ' $0', $colorName);
                $colorName = ucwords(strtolower($colorName));
            }

            return ['name' => $colorName, 'color_code' => $colorCode];
        
        } else {
            return $colorCode;

        }
    }


    // Make RGB Color Codes to Hex
    public static function rgbToHex($r = null, $g = null, $b = null, $fullRGB = null): string
    {
        if ($fullRGB) {
            $extractedRGB = self::extractRGBComponents($fullRGB);
            $r = $extractedRGB['r'];
            $g = $extractedRGB['g'];
            $b = $extractedRGB['b'];

        } elseif ($r && $g && $b) {
            
        } else {
            throw new \InvalidArgumentException("Please Provide Separate r, g, b, or fullRGB. Please Make Sure You have specified argument name, Github Repo: https://github.com/HamimBD121/color-randomizer-package/");
        } 
        
        $r = max(0, min(255, $r));
        $g = max(0, min(255, $g));
        $b = max(0, min(255, $b));
        
        $hexR = dechex($r);
        $hexG = dechex($g);
        $hexB = dechex($b);
    
        $hexR = str_pad($hexR, 2, "0", STR_PAD_LEFT);
        $hexG = str_pad($hexG, 2, "0", STR_PAD_LEFT);
        $hexB = str_pad($hexB, 2, "0", STR_PAD_LEFT);
    
        return (string)"#$hexR$hexG$hexB";
    }

    public static function getMultipleColors($colorsAmount = 4, $hex = false, $minBrightness = 30, $maxBrightness = 255, $withMostMatchedName = false, $formattedName = true)
    {
        $colors = [];

        for ($i = 1; $i <= $colorsAmount; $i++) {
            $colors[] = self::getSingleColor($hex, $minBrightness, $maxBrightness, $withMostMatchedName, $formattedName);
        }

        return $colors;
    }

    // Hex Color Code To RGB
    public static function hexToRgb($hex): string
    {
        if (!is_string($hex)) {
            throw new \InvalidArgumentException('$hex parameter must be a string. (From Class. ColorRandomizer, Function. hexToRgb())');
        }

        $hex = str_replace('#', '', $hex);
    
        // Split the hex color string into its components
        $rHex = substr($hex, 0, 2);
        $gHex = substr($hex, 2, 2);
        $bHex = substr($hex, 4, 2);
    
        // Convert hex components to decimal values
        $red = hexdec($rHex);
        $green = hexdec($gHex);
        $blue = hexdec($bHex);
    
        return (string)"rgb($red, $green, $blue)";
    }

    public static function extractRGBComponents($colorString): array
    {
        $cleanedString = preg_replace("/[^0-9,]/", "", $colorString);
    
        $components = explode(",", $cleanedString);
    
        if (count($components) !== 3) {
            throw new Exception("Invalid color format. Expected format: 'r, g, b'.,  Github Repo: https://github.com/HamimBD121/color-randomizer-package/");
        }
    
        $red = intval($components[0]);
        $green = intval($components[1]);
        $blue = intval($components[2]);
    
        if ($red < 0 || $red > 255 || $green < 0 || $green > 255 || $blue < 0 || $blue > 255) {
            throw new Exception("Invalid color component values. Expected range: 0-255. - Github Repo: https://github.com/HamimBD121/color-randomizer-package/");
        }
    
        return ['r' => $red, 'g' => $green, 'b' => $blue];
    } 

    public static function getCodesFromHtmlColors($hex = true, $name)
    {
        $name = str_replace(['-', '_'], ' ', $name);

        $name = (string)Str::lower($name);

        // more than 200 colors
        $colors = collect(self::$colors);
        
        $chosenColor = $colors->filter(function ($value, $key) use ($name) {
            return $value['name'] == $name;
        })->first();

        if (!$chosenColor) {
            $chosenColor = $colors->filter(function ($value, $key) use ($name) {
                $formattedName = str_replace([' ', '_', '-', ','], '', $name);

                return str_replace([' ', '_', '-', ','], '', $value['name']) == $formattedName;
            })->first();
        }

        if (!$chosenColor) {
            $chosenColor = $colors->filter(function ($value, $key) use ($name) {
                return stripos($value['name'], $name) !== false;
            })->first();
        }

        if ($chosenColor) {
            if (!$hex) {
                return self::hexToRgb('#'.$chosenColor['hex']);
            } else {
                return "#{$chosenColor['hex']}";
            }
        } else {
            // Giving an random color if not found on the list

            return self::getSingleColor($hex, 0, 255);
        }
    }

    public static function getNearestNameFromCode($hex = false, $rgbOrHex)
    {
        if ($hex) {
            $rgbOrHex =  self::hexToRgb($rgbOrHex);
        }

        // more than 200 colors
        $colors = collect(self::$colors);
        
        $minDistance = INF;
        $nearestColor = null;

        // Iterate through colors to find the nearest one
        foreach ($colors as $color) {
            // Convert hex to RGB
            $rgb = self::hexToRgb($color['hex']);

            // Calculate distance
            $distance = self::colorDifference($rgbOrHex, $rgb);

            // Update minimum distance and nearest color if applicable
            if ($distance < $minDistance) {
                $minDistance = $distance;
                $nearestColor = $color;
            }
        }

        return $nearestColor['name'] ?? 'Not Found';

    }

    public static function getSimilarColors($rgbOrHex, $goalAmount = 7, $hex = true, $maxDifference = 100, $minDifference = 0.5, $allowCustomColors = false)
    {
        if ($hex) {
            $rgb = self::hexToRgb($rgbOrHex);

        } else {
            $rgb = $rgbOrHex;

        }

        $colors = self::getColors();
        $outputColors = [];
        $colorName = self::getNearestNameFromCode(false, $rgb);

        foreach ($colors as $color) {
            $color['rgb'] = self::hexToRgb($color['hex']);

            $difference = self::colorDifference($rgb, $color['rgb']);

            if ($difference <= $maxDifference && $difference >= $minDifference) {
                $outputColors[] = ['name' => $color['name'], 'hex' => $color['hex'], 'rgb' => $color['rgb'], 'difference' => $difference];
            }
        }

        if ($allowCustomColors == true) {
            while (count($outputColors) < $goalAmount) {
                $extractedRGB = self::extractRGBComponents($rgb);
                $variation = 30;

                $newR = max(0, min(255, $extractedRGB['r'] + rand(-$variation, $variation)));
                $newG = max(0, min(255, $extractedRGB['g'] + rand(-$variation, $variation)));
                $newB =  max(0, min(255, $extractedRGB['b'] + rand(-$variation, $variation)));
                
                $totalRGB = "rgb($newR, $newG, $newB)";
                $newName = self::getNearestNameFromCode(false, $totalRGB);
                $newDifference = self::colorDifference($rgb, $totalRGB);

                if (collect($outputColors)->where('name', $newName)->first() == [] && collect($outputColors)->where('name', $newName)->first() == null && $newName != $colorName) {
                    $outputColors[] = ['name' => $newName, 'hex' => self::rgbToHex($newR, $newG, $newB),'rgb' => $totalRGB, 'difference' => $newDifference];
                }
            }
        }

        return collect($outputColors)->sortBy('difference')->take($goalAmount)->values()->toArray();
    }

    
}