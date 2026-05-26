<?php

require_once('models/car-model.php');

class CarView extends Car {
    function show_brand_options(string $toMark = "") {
        foreach($this->get_brands() as $currentBrand) {
            if (strtolower($toMark) == strtolower($currentBrand['make'])) {
                echo '<option value="' . $currentBrand['make'] . '" selected="selected">' . $currentBrand['make'] . '</option>';
            } else {
                echo '<option value="' . $currentBrand['make'] . '">' . $currentBrand['make'] . '</option>';
            }
        }
    }

    function show_cars_by_brand(string $make, int $limit = 15) {
        foreach($this->get_cars_by_brand($make, $limit) as $currentBrand) {
            extract($currentBrand);
            include('views/components/car-item.php');
        }
    }
}