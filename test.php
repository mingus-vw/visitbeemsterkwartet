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
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%; /* Set height to 100% of viewport height */
            display: grid;
            grid-template-columns: repeat(8, 10vw); /* 8 columns with 10% viewport width each */
            grid-template-rows: repeat(5, 10vw); /* 5 rows with 10% viewport width each */
            gap: 1vw; /* Adjust the gap between grid cells */
            justify-content: center;
            align-content: center;
        }

        .blocks {
            width: 100%; /* Ensure each block takes up the entire grid cell width */
            height: 100%; /* Ensure each block takes up the entire grid cell height */
            position: relative;
            perspective: 100vw; /* Perspective for 3D effect */
            transition: transform 0.2s; /* Add transition effect */
        }

        .blocks img {
            width: 100%; /* Ensure the image covers the entire block */
            height: auto;
            display: block;
        }

        .blocks:hover {
            transform: rotateX(20deg); /* Rotate on hover */
        }

        @media (max-width: 600px) {
            .wrapper {
                grid-template-columns: repeat(4, 20vw); /* 4 columns with 20% viewport width each */
                grid-template-rows: repeat(10, 20vw); /* 10 rows with 20% viewport width each */
            }
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
                echo "<div class='blocks'><img src='images/vlakje_$color.svg' alt='$color'></div>";
                $count_per_color[$color]++;
            }

            // Add rhombuses in the white spaces between rows
            if (($i + 1) % 8 != 0 && $count_per_color[$color] < 8) {
                echo "<div class='blocks'><img src='images/vlakje_$color.svg' alt='$color'></div>";
                $count_per_color[$color]++;
            }
        }
    ?>
</div>

</body>
</html>
