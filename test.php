<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        ul {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            margin: 0;
            padding: 0;
            width: 600px;
            height: 600px;
        }

        ul li {
            list-style: none;
            position: absolute;
            width: 200px;
            height: 200px;
            background: #000;
            transform: rotate(45deg);
            transition: .5s;
            margin: -100px;
        }

        ul li.item1 {
            top: 0;
            left: 0;
        }

        ul li.item2 {
            top: 0;
            left: 50%;
        }

        ul li.item3 {
            top: 0;
            left: 100%;
        }

        ul li.item4 {
            top: 50%;
            left: 0;
        }

        ul li.item5 {
            top: 50%;
            left: 50%;
        }

        ul li.item6 {
            top: 50%;
            left: 100%;
        }

        ul li.item7 {
            top: 100%;
            left: 0;
        }

        ul li.item8 {
            top: 100%;
            left: 50%;
        }

        ul li.item9 {
            top: 100%;
            left: 100%;
        }

        /* Additional rhombuses for the gaps */
        ul li.item10 {
            top: 25%;
            left: 25%;
        }

        ul li.item11 {
            top: 25%;
            left: 75%;
        }

        ul li.item12 {
            top: 75%;
            left: 25%;
        }

        ul li.item13 {
            top: 75%;
            left: 75%;
        }
    </style>
</head>
<body>
    <ul>
        <li class="item1"><div class="bg"></div></li>
        <li class="item2"><div class="bg"></div></li>
        <li class="item3"><div class="bg"></div></li>
        <li class="item4"><div class="bg"></div></li>
        <li class="item5"><div class="bg"></div></li>
        <li class="item6"><div class="bg"></div></li>
        <li class="item7"><div class="bg"></div></li>
        <li class="item8"><div class="bg"></div></li>
        <li class="item9"><div class="bg"></div></li>
        
        <!-- Additional rhombuses for the gaps -->
        <li class="item10"><div class="bg"></div></li>
        <li class="item11"><div class="bg"></div></li>
        <li class="item12"><div class="bg"></div></li>
        <li class="item13"><div class="bg"></div></li>
    </ul>
</body>
</html>
