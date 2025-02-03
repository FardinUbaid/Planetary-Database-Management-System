<?php
    require_once ('../../../model/PlanetModel.php');
    require_once ('../../../model/MoonModel.php');

    $planets = getAllPlanets();
    $moons = getAllMoons();

    $groupedMoons = [];
        foreach ($moons as $moon) {
        $groupedMoons[$moon['PLANET_ID']][] = $moon;
        }
?>