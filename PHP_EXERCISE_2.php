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
            <div class="column">
                <h2>List 1</h2>
                <p>The Initial Array List</p>
                <?php
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
                    
                    sort($cities);
                    echo "<ul>";
                    foreach ($cities as $city) {
                        echo "<li>$city</li>";
                    }
                    echo "</ul>";
                ?>
            </div>

            <div class="column">
                <h2>List 2</h2>
                <p>The Updated Array List with New Cities</p>
                <?php

                    $newCities = ["Los Angeles", "Calcutta", "Osaka", "Beijing"];
                    $cities = array_merge($cities, $newCities);
                    sort($cities);

                    echo "<ul>";
                    foreach ($cities as $city) {
                        $class = in_array($city, $newCities) ? 'new-city' : ''; // Highlight new cities
                        echo "<li class=\"$class\">$city</li>";
                    }
                    echo "</ul>";
                ?>
            </div>
        </div>
    </div>
</body>
</html>
