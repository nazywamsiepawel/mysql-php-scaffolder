<?php
class network{
	 var $id;
	 var $name;
	 var $country;
	 var $centre_longtitude;
	 var $centre_latitude;
	 var $countUsers;
	 var $countBusiness;
	 var $countEvents;


function create($id, $name, $country, $centre_longtitude, $centre_latitude, $countUsers, $countBusiness, $countEvents){
        $query="INSERT INTO `network` (`id`, `name`, `country`, `centre_longtitude`, `centre_latitude`, `countUsers`, `countBusiness`, `countEvents`) 
                VALUES ('$id', '$name', '$country', '$centre_longtitude', '$centre_latitude', '$countUsers', '$countBusiness', 'countEvents');";
        $result = mysql_query($query);

        if (!$result)
             die('Invalid query: ' . mysql_error());
}


function read($id){
        $query = "SELECT * FROM `id` WHERE `[primary_key]` LIKE '$id'";
        $result = mysql_query($query);
        if($result){
               $data = mysql_fetch_assoc($result);
               	 $this->id=$id;
	 $this->name=$name;
	 $this->country=$country;
	 $this->centre_longtitude=$centre_longtitude;
	 $this->centre_latitude=$centre_latitude;
	 $this->countUsers=$countUsers;
	 $this->countBusiness=$countBusiness;
	 $this->countEvents=$countEvents;

         }
}








function getid(){
    return this->$id;
}

function getname(){
    return this->$name;
}

function getcountry(){
    return this->$country;
}

function getcentre_longtitude(){
    return this->$centre_longtitude;
}

function getcentre_latitude(){
    return this->$centre_latitude;
}

function getcountUsers(){
    return this->$countUsers;
}

function getcountBusiness(){
    return this->$countBusiness;
}

function getcountEvents(){
    return this->$countEvents;
}




function setUpdateid($value){
    $this->id = $value;
    $query = "UPDATE `network` SET `id` = '$value'
    WHERE `id` LIKE '$id';";
    $result = mysql_query($query);
    if (!$result) {
         die('Problem updating text values : ' . mysql_error());
    }
        
}

function setUpdatename($value){
    $this->name = $value;
    $query = "UPDATE `network` SET `name` = '$value'
    WHERE `id` LIKE '$id';";
    $result = mysql_query($query);
    if (!$result) {
         die('Problem updating text values : ' . mysql_error());
    }
        
}

function setUpdatecountry($value){
    $this->country = $value;
    $query = "UPDATE `network` SET `country` = '$value'
    WHERE `id` LIKE '$id';";
    $result = mysql_query($query);
    if (!$result) {
         die('Problem updating text values : ' . mysql_error());
    }
        
}

function setUpdatecentre_longtitude($value){
    $this->centre_longtitude = $value;
    $query = "UPDATE `network` SET `centre_longtitude` = '$value'
    WHERE `id` LIKE '$id';";
    $result = mysql_query($query);
    if (!$result) {
         die('Problem updating text values : ' . mysql_error());
    }
        
}

function setUpdatecentre_latitude($value){
    $this->centre_latitude = $value;
    $query = "UPDATE `network` SET `centre_latitude` = '$value'
    WHERE `id` LIKE '$id';";
    $result = mysql_query($query);
    if (!$result) {
         die('Problem updating text values : ' . mysql_error());
    }
        
}

function setUpdatecountUsers($value){
    $this->countUsers = $value;
    $query = "UPDATE `network` SET `countUsers` = '$value'
    WHERE `id` LIKE '$id';";
    $result = mysql_query($query);
    if (!$result) {
         die('Problem updating text values : ' . mysql_error());
    }
        
}

function setUpdatecountBusiness($value){
    $this->countBusiness = $value;
    $query = "UPDATE `network` SET `countBusiness` = '$value'
    WHERE `id` LIKE '$id';";
    $result = mysql_query($query);
    if (!$result) {
         die('Problem updating text values : ' . mysql_error());
    }
        
}

function setUpdatecountEvents($value){
    $this->countEvents = $value;
    $query = "UPDATE `network` SET `countEvents` = '$value'
    WHERE `id` LIKE '$id';";
    $result = mysql_query($query);
    if (!$result) {
         die('Problem updating text values : ' . mysql_error());
    }
        
}





}
?>