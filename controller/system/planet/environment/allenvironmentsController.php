<?php 
require_once ('../../../../model/PlanetModel.php');
require_once ('../../../../model/EnvironmentModel.php');
require_once ('../../../../model/AtmosphereModel.php');
require_once ('../../../../model/WaterPresenceModel.php');

$planets = getAllPlanets();
$environment = getAllEnvironmentConditions();
$atmosphere = getAllAtmospheres();
$waterPresence = getAllWaterPresence();

$combinedData = [];

foreach ($planets as $planet) {
    foreach ($environment as $env) {
        if ($env['PLANET_ID'] == $planet['PLANET_ID']) {
            foreach ($atmosphere as $atm) {
                if ($atm['PLANET_ID'] == $planet['PLANET_ID']) {
                    foreach ($waterPresence as $water) {
                        if ($water['PLANET_ID'] == $planet['PLANET_ID']) {
                            $combinedData[] = array_merge($planet, $env, $atm, $water);
                        }
                    }
                }
            }
        }
    }
}
//var_dump($combinedData);

?>
