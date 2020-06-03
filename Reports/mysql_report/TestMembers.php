<?php

//require_once "../../../load.koolreport.php";
// Require autoload.php from koolreport library
require_once "../koolreport/core/autoload.php";

use \koolreport\KoolReport;
use \koolreport\processes\Filter;
use \koolreport\processes\TimeBucket;
use \koolreport\processes\Group;
use \koolreport\processes\Limit;

class TestMembers extends KoolReport
{
    function settings()
    {
        return array(
            "dataSources"=>array(
                "sakila_rental"=>array(
                    "connectionString"=>"mysql:host=localhost;dbname=test",
                    "username"=>"",
                    "password"=>"",
                    "charset"=>"utf8"
                ),
            )
        ); 
    }    
    protected function setup()
    {
        $this->src('sakila_rental')
        ->query("SELECT MONTHNAME(date) AS payment_date, members_total_count as members from kpis where box_id =2 AND members_total_count is not null")
        ->pipe(new TimeBucket(array(
            "payment_date"=>"month"
        )))
        ->pipe(new Group(array(
            "by"=>"payment_date",
            "count"=>"members"
        )))
        ->pipe($this->dataStore('sale_by_month'));
    } 
}