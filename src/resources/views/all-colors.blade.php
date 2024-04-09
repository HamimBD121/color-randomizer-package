<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $appName }} - Color Randomizer All Colors</title>
    <style>
        /* Your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            font-size: 24px;
        }
        .color-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .color-box {
            width: calc(20% - 40px);
            height: 150px;
            border-radius: 10px;
            border: 2px solid #333;
            margin: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 18px;
            color: #fff;
            text-transform: uppercase;
            transition: transform 0.3s ease-in-out;
            overflow: hidden;
            cursor: pointer;
        }
        .color-box:hover {
            transform: scale(1.05);
        }
        .color-box p {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            max-width: 90%;
            text-align: center;
        }
        @media screen and (max-width: 768px) {
            .color-box {
                width: calc(33.33% - 20px);
            }
        }
        @media screen and (max-width: 480px) {
            .color-box {
                width: 60%;
            }
        }

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: 15% auto; /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
            border-radius: 10px;
            box-shadow: 2px 2px 4px 6px rgba(0, 0, 0, 0.35);
        }

        /* The Close Button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
        }

        .input-group {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .input-group input {
            width: calc(100% - 70px); /* Adjust the width as needed */
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 5px;
        }

        .input-group button.copy-button {
            padding: 8px 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .input-group button.copy-button:hover {
            background-color: #45a049;
        }

        .similar-color-boxes {
            display: flex;
            flex-wrap: wrap;
        }

        .similar-color-box {
            width: 50px; /* Adjust the width as needed */
            height: 50px; /* Adjust the height as needed */
            border-radius: 5px;
            margin-right: 10px; /* Adjust the margin between boxes as needed */
            margin-bottom: 10px; /* Adjust the margin between rows as needed */
            cursor: pointer;
        }

    </style>
</head>
<body>
    <header>
        All Featured Colors In Color Randomizer
    </header>
    
    <div class="color-container">
        @php $count = 0; @endphp
        @foreach ($colors as $color)
            @php
            $color['rgb'] = ByteForge\ColorRandomizer\ColorRandomizer::hexToRgb($color['hex']);
            @endphp
            <div class="color-box" style="background-color: #{{ $color['hex'] }};" data-color-name="{{ $color['name'] }}" data-color-hex="{{ $color['hex'] }}" data-color-rgb="{{ $color['rgb'] }}">
                <p>{{ $color['name'] }}</p>
            </div>
            @php $count++; @endphp
            @if ($count % 5 == 0)
                <div style="flex-basis: 100%; height: 0;"></div>
            @endif
        @endforeach
    </div>

    <!-- Modal -->
    <div id="colorModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <div style="display: flex;">
                <div style="width: 33.33%;">
                    <h2 id="modalColorName"></h2>
                    <div id="modalColor" style="width: 90%; height: 300px; border-radius: 10px; margin-bottom: 15px;"></div>
                </div>
                <div style="width: 66.66%; padding-top: 50px;">
                    <h3>Hex Color Code</h3>
                    <div class="input-group">
                        <input type="text" id="hexCode" readonly>
                        <button class="copy-button" onclick="copyToClipboard('hexCode')">Copy</button>
                    </div>
                    <h3>RGB Color Code</h3>
                    <div class="input-group">
                        <input type="text" id="rgbCode" readonly>
                        <button class="copy-button" onclick="copyToClipboard('rgbCode')">Copy</button>
                    </div>
                    <h3>Similar Colors</h3>
                    <div class="similar-color-boxes">
                        <div class="similar-color-box" style="background-color: #ffffff;"></div>
                        <div class="similar-color-box" style="background-color: #ffffff;"></div>
                        <div class="similar-color-box" style="background-color: #ffffff;"></div>
                        <div class="similar-color-box" style="background-color: #ffffff;"></div>
                        <div class="similar-color-box" style="background-color: #ffffff;"></div>
                        <div class="similar-color-box" style="background-color: #ffffff;"></div>
                        <div class="similar-color-box" style="background-color: #ffffff;"></div>
                        <div class="similar-color-box" style="background-color: #ffffff;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        // Get the modal
        var modal = document.getElementById("colorModal");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        async function getSimilarColors(rgbOrHex, goalAmount) {
            try {
                const response = await fetch(`/cr/get-similar-colors/${rgbOrHex}/${goalAmount}`, {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                });

                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }

                const data = await response.json();
                return data;
            } catch (error) {
                console.error('Fetch Error:', error);
                return null;
            }
        }

        function modalChangeData(colorName, colorRGB, colorHex) {
            document.getElementById("modalColorName").innerHTML = colorName.toUpperCase();
            document.getElementById("modalColor").style.backgroundColor = colorHex;
            document.getElementById("hexCode").value = colorHex;
            document.getElementById("rgbCode").value = colorRGB;
        }


        // When the user clicks on a color box, open the modal
        var colorBoxes = document.querySelectorAll(".color-box");
        colorBoxes.forEach(function(box) {
            box.addEventListener("click", function() {
                var colorName = box.getAttribute("data-color-name");
                var ColorRGB = box.getAttribute("data-color-rgb");
                var colorHex = '#' + box.getAttribute("data-color-hex");    

                getSimilarColors(ColorRGB, 8)
                    .then(function(relatedColors) {
                        var similar_color_boxes = document.querySelectorAll(".similar-color-box");

                        similar_color_boxes.forEach(function(similar, index) {
                            var similarColorName = relatedColors[index].name;
                            var similarColorRGB = relatedColors[index].rgb;
                            var similarColorHex = '#' + relatedColors[index].hex;  

                            similar.style.backgroundColor = '#' + relatedColors[index].hex;

                            // Adding a click event listener to each similar color box
                            similar.addEventListener("click", function() {
                                // Assuming modalChangeData expects three parameters: name, rgb, and hex
                                modalChangeData(similarColorName, similarColorRGB, similarColorHex);
                            });
                        });
                    })
                    .catch(function(error) {
                        console.error('Error fetching similar colors:', error);
                    });
                
                modalChangeData(colorName, ColorRGB, colorHex);

                modal.style.display = "block";
            });
        });

        function copyToClipboard(inputId) {
            var input = document.getElementById(inputId);
            input.select();
            document.execCommand("copy");

            var copyButton = input.nextElementSibling;
            var originalText = copyButton.textContent;
            copyButton.textContent = "Copied";

            setTimeout(function() {
                copyButton.textContent = originalText;
            }, 3000);
        }



        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        };

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        };
    </script>
</body>
</html>
