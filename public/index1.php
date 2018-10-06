<?php
/**
 * Created by PhpStorm.
 * User: leena
 * Date: 10/6/18
 * Time: 5:51 PM
 */
echo "test123";
main::start();
class main {
    static public function start() {
        $records = csv::getRecords();
        $table = html::generateTable($records);
        system::printPage($table);
    }
}
class csv {
    static public function getRecords() {
        $make = 'Toyota';
        $model = 'Camry';
        $car = AutomobileFactory::create($make, $model);
        $records[] = $car;
        print_r($records);
        return $records;
    }
}
class html {
    static public function generateTable($records) {
        $table = $records;
        return $table;
    }
}
class system {
    static public function printPage($page) {
        echo $page;
    }
}
class Automobile
{
    private $vehicleMake;
    private $vehicleModel;
    public function __construct($make, $model)
    {
        $this->vehicleMake = $make;
        $this->vehicleModel = $model;
    }
    public function getMakeAndModel()
    {
        return $this->vehicleMake . ' ' . $this->vehicleModel;
    }
}
class AutomobileFactory
{
    public static function create($make, $model)
    {
        return new Automobile($make, $model);
    }
}