<?php

main::start("example.csv");

class main
{

    static public function start($filename){

        $records = csv::getRecords($filename);
    }

}

class csv
{

    static public function getRecords($filename) {


        $file = fopen($filename, "r");

        $fieldNames = array();

        $count = 0;

        while(! feof($file))

        {
            $record = fgetcsv($file);
            if($count == 0){
                $fieldNames = $record;
            } else {
                $records[] = recordFactory::create($fieldNames, $record);
            }
            $count++;
        }

        fclose($file);

        return $records;

    }
}

class record {

    public function __construct(array $fieldNames = null, $values = null)
    {
        print_r($fieldNames);
        print_r($values);

        
        $this->createProperty();

    }

    public function createProperty($name = 'first', $value = 'Maddy'){

        $this->{$name} = $value;

    }

}

class recordFactory {

    public static function create(Array $fieldNames = null, $values = null) {

        $record = new record($fieldNames, $values);

        return $record;

    }
}















