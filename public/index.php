<?php
/**
 * Created by PhpStorm.
 * User: madelinegriep
 * Date: 2/24/19
 * Time: 12:27 PM
 */
main::start();

class main {

    static public function start(){
        $records = csv::getRecords():
        $table = html::generateTable($records);
        system::printPage($table);
    }
}

class csv {
    static public function getRecords() {

        $records ='test';
        return $records;
    }
}

class html {
    static public function generateTable($records) {

        $table =$records;

        return $table;

    }
}

class system {
    static public function printPage($page) {
        echo $page;
    }
}
