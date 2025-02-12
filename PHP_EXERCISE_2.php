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
    <link rel="stylesheet" href="exercise_styles2.css">
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


