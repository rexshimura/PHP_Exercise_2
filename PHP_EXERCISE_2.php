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

            <!-- List 2 -->
            <div class="column">
                <h2>List 2</h2>
                <p>The Added Array List</p>
                <?php
                    $addedCities = [
                        "Los Angeles", 
                        "Calcutta", 
                        "Osaka", 
                        "Beijing"
                    ];
                    
                    array_push($cities, ...$addedCities);
                    sort($cities);
                    echo "<ul>";
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


