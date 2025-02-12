<!-- 
-------------------------------------------
INTEGRATIVE PROGRAMMING : PHP Exercise 2
TITLE: LARGEST CITIES
-------------------------------------------
JOHN PAUL P. MAHILOM
BSIT II-B 
12/02/2025 
-------------------------------------------
INSTRUCTIONS:

For this exercise, you will use a list of ten of the largest cities in the world.
(Please note, these are not the ten largest, just a selection of ten from the
largest cities.) Create an array with the following values: 
( Tokyo, Mexico, City, New York City, Mumbai, Seoul, Shanghai, Lagos, Buenos Aires, Cairo, London. )

Print these values to the browser separated by commas, using a loop to iterate over
the array. Sort the array, then print the values to the browser in an unordered list, again using a loop.

Add the following cities to the array: 
( Los Angeles, Calcutta, Osaka, Beijing. )

Sort the array again, and print it once more to the browser in an unordered list.
-------------------------------------------
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercise 2: Largest Cities</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: linear-gradient(to bottom,rgb(253, 255, 190),rgb(235, 135, 135)); 
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
        }

        h1 {
            font-size: 2em;
            margin-bottom: 20px;
            text-align: center; 
        }

        .container {
            width: 90%;
            max-width: 1000px;
            margin: 20px 0;
            padding: 20px;
            background-color:rgb(247, 247, 247);
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
        }

        .content {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;
        }

        .column {
            flex: 1;
            min-width: 45%;
            padding: 20px;
            margin-top: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
        }

        ul {
            list-style-type: disc;
            padding-left: 2;
        }

        li {
            padding: 8px 0;
            font-size: 1.1em;
            color: #333;
        }

        .added {
            color: green; /* Text color for added cities */
        }

        h2 {
            margin-top: 20px;
            font-size: 1.5em;
            text-align: center; 
        }

        p {
            font-size: 1.1em;
            text-align: center; 
        }

        .list-header {
            text-align: center; 
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>PHP Exercise 2: Largest Cities</h1>
        <div class="list-header">
            <h2>List Of Cities:</h2>
            <p>Tokyo, Mexico City, New York City, Mumbai, Seoul, Shanghai, Lagos, Buenos Aires, Cairo, London</p>
        </div>

        <div class="content">
            <!-- List 1 -->
            <div class="column">
                <h2>List 1</h2>
                <p>The Initial Array List</p>
                <?php
                    // Define the array of cities
                    $cities = [
                        "Tokyo", 
                        "Mexico City", 
                        "New York City", 
                        "Mumbai", 
                        "Seoul", 
                        "Shanghai", 
                        "Lagos", 
                        "Buenos Aires", 
                        "Cairo", 
                        "London"
                    ];

                    // Sort the array and print in an unordered list
                    sort($cities);
                    echo "<ul>";
                    foreach ($cities as $city) {
                        echo "<li>$city</li>";
                    }
                    echo "</ul>";
                ?>
            </div>

            <!-- List 2 -->
            <div class="column">
                <h2>List 2</h2>
                <p>The Added Array List</p>
                <?php
                    // Add more cities to the array ( Los Angeles, Calcutta, Osaka, Beijing. )
                    $addedCities = [
                        "Los Angeles", 
                        "Calcutta", 
                        "Osaka", 
                        "Beijing"
                    ];
                    
                    array_push($cities, ...$addedCities);

                    // Sort the array again and print in an unordered list
                    sort($cities);
                    echo "<ul>";

                    // Check if the city is in the added cities array, then apply the 'added' class para green text.
                    foreach ($cities as $city) {
                        $class = in_array($city, $addedCities) ? 'added' : '';
                        echo "<li class=\"$class\">$city</li>";
                    }
                    echo "</ul>";
                ?>
            </div>
        </div>
    </div>

</body>
</html>


