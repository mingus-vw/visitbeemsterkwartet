<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden; /* Hide overflow */
            background-color: #f0f0f0; /* Background color */
        }

        .wrapper {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%; /* Set height to 50% of viewport height */
            display: grid;
            grid-template-columns: repeat(8, 1fr); /* 8 columns */
            grid-template-rows: repeat(5, 1fr); /* 5 rows */
            gap: 5px; /* Adjust the gap between grid cells */
            justify-content: center;
            align-content: center;
        }

        .second-wrapper {
            position: absolute;
            top: 10%; /* Position the second grid below the first one */
            left: 5%;
            width: 100%;
            height: 100%; /* Set height to 50% of viewport height */
            display: grid;
            grid-template-columns: repeat(7, 1fr); /* 4 columns */
            grid-template-rows: repeat(4, 1fr); /* 2 rows */
            gap: 5px; /* Adjust the gap between grid cells */
            justify-content: center;
            align-content: center;
        }

        .blocks {
            width: 100%; /* Ensure each square takes up the entire grid cell */
            height: 100%; /* Ensure each square takes up the entire grid cell */
            object-fit: cover; /* Ensure the image covers the entire block */
            position: relative;
            z-index: 1; /* Ensure the SVGs are above the background */
            transition: transform 0.2s; /* Add transition effect */
        }

        .blocks:hover {
            transform: scale(1.1); /* Scale up on hover */
        }
    </style>
</head>
<body>

<div class="wrapper">
    <?php
        // Assuming you have SVG paths for red, green, yellow, and blue blocks
        $colors = array("rood", "groen", "geel", "blauw");
        $count_per_color = array("rood" => 0, "groen" => 0, "geel" => 0, "blauw" => 0);

        for ($i = 0; $i < 40; $i++) {
            $color_index = floor($i / 8) % 4;
            $color = $colors[$color_index];

            if ($count_per_color[$color] < 8) {
                echo "<img class='blocks' src='images/vlakje_$color.svg' alt='$color'>";
                $count_per_color[$color]++;
            }

            // Add rhombuses in the white spaces between rows
            if (($i + 1) % 8 != 0 && $count_per_color[$color] < 8) {
                echo "<img class='blocks' src='images/vlakje_$color.svg' alt='$color'>";
                $count_per_color[$color]++;
            }
        }
    ?>
</div>

<div class="second-wrapper">
    <?php
        // Assuming you have SVG paths for red, green, yellow, and blue blocks
        $colors = array("rood", "groen", "geel", "blauw");
        $count_per_color = array("rood" => 0, "groen" => 0, "geel" => 0, "blauw" => 0);

        for ($i = 0; $i < 8; $i++) {
            $color_index = floor($i / 4) % 5;
            $color = $colors[$color_index];

            if ($count_per_color[$color] < 5) {
                echo "<img class='blocks' src='images/vlakje_$color.svg' alt='$color'>";
                $count_per_color[$color]++;
            }

            // Add rhombuses in the white spaces between rows
            if (($i + 1) % 5 != 0 && $count_per_color[$color] < 5) {
                echo "<img class='blocks' src='images/vlakje_$color.svg' alt='$color'>";
                $count_per_color[$color]++;
            }
        }
    ?>
</div>

</body>
</html>
