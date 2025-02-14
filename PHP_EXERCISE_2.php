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
            <?php
                function renderCityList($cities, $newCities = []) {
                    sort($cities);
                    echo "<ul>";
                    foreach ($cities as $city) {
                        $class = in_array($city, $newCities) ? 'new-city' : '';
                        echo "<li class=\"$class\">$city</li>";
                    }
                    echo "</ul>";
                }

                $initialCities = [
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
                
                $newCities = ["Los Angeles", "Calcutta", "Osaka", "Beijing"];
                $updatedCities = array_merge($initialCities, $newCities);
            ?>

            <div class="column">
                <h2>List 1</h2>
                <p>The Initial Array List</p>
                <?php renderCityList($initialCities); ?>
            </div>

            <div class="column">
                <h2>List 2</h2>
                <p>The Updated Array List with New Cities</p>
                <?php renderCityList($updatedCities, $newCities); ?>
            </div>
        </div>
    </div>
</body>
</html>