<?php
class event{
	 var $id;
	 var $title;
	 var $short_description;
	 var $description;
	 var $address;
	 var $longtitude;
	 var $latitude;
	 var $current_pictureID;
	 var $network;
	 var $owner_type;
	 var $ownerID;


function create($id, $title, $short_description, $description, $address, $longtitude, $latitude, $current_pictureID, $network, $owner_type, $ownerID){
        $query="INSERT INTO `event` (`id`, `title`, `short_description`, `description`, `address`, `longtitude`, `latitude`, `current_pictureID`, `network`, `owner_type`, `ownerID`) 
                VALUES ('$id', '$title', '$short_description', '$description', '$address', '$longtitude', '$latitude', '$current_pictureID', '$network', '$owner_type', 'ownerID');";
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
	 $this->title=$title;
	 $this->short_description=$short_description;
	 $this->description=$description;
	 $this->address=$address;
	 $this->longtitude=$longtitude;
	 $this->latitude=$latitude;
	 $this->current_pictureID=$current_pictureID;
	 $this->network=$network;
	 $this->owner_type=$owner_type;
	 $this->ownerID=$ownerID;

         }
}








function getid(){
    return this->$id;
}

function gettitle(){
    return this->$title;
}

function getshort_description(){
    return this->$short_description;
}

function getdescription(){
    return this->$description;
}

function getaddress(){
    return this->$address;
}

function getlongtitude(){
    return this->$longtitude;
}

function getlatitude(){
    return this->$latitude;
}

function getcurrent_pictureID(){
    return this->$current_pictureID;
}

function getnetwork(){
    return this->$network;
}

function getowner_type(){
    return this->$owner_type;
}

function getownerID(){
    return this->$ownerID;
}




function setUpdateid($value){
    $this->id = $value;
    $query = "UPDATE `event` SET `id` = '$value'
    WHERE `id` LIKE '$id';";
    $result = mysql_query($query);
    if (!$result) {
         die('Problem updating text values : ' . mysql_error());
    }
        
}

function setUpdatetitle($value){
    $this->title = $value;
    $query = "UPDATE `event` SET `title` = '$value'
    WHERE `id` LIKE '$id';";
    $result = mysql_query($query);
    if (!$result) {
         die('Problem updating text values : ' . mysql_error());
    }
        
}

function setUpdateshort_description($value){
    $this->short_description = $value;
    $query = "UPDATE `event` SET `short_description` = '$value'
    WHERE `id` LIKE '$id';";
    $result = mysql_query($query);
    if (!$result) {
         die('Problem updating text values : ' . mysql_error());
    }
        
}

function setUpdatedescription($value){
    $this->description = $value;
    $query = "UPDATE `event` SET `description` = '$value'
    WHERE `id` LIKE '$id';";
    $result = mysql_query($query);
    if (!$result) {
         die('Problem updating text values : ' . mysql_error());
    }
        
}

function setUpdateaddress($value){
    $this->address = $value;
    $query = "UPDATE `event` SET `address` = '$value'
    WHERE `id` LIKE '$id';";
    $result = mysql_query($query);
    if (!$result) {
         die('Problem updating text values : ' . mysql_error());
    }
        
}

function setUpdatelongtitude($value){
    $this->longtitude = $value;
    $query = "UPDATE `event` SET `longtitude` = '$value'
    WHERE `id` LIKE '$id';";
    $result = mysql_query($query);
    if (!$result) {
         die('Problem updating text values : ' . mysql_error());
    }
        
}

function setUpdatelatitude($value){
    $this->latitude = $value;
    $query = "UPDATE `event` SET `latitude` = '$value'
    WHERE `id` LIKE '$id';";
    $result = mysql_query($query);
    if (!$result) {
         die('Problem updating text values : ' . mysql_error());
    }
        
}

function setUpdatecurrent_pictureID($value){
    $this->current_pictureID = $value;
    $query = "UPDATE `event` SET `current_pictureID` = '$value'
    WHERE `id` LIKE '$id';";
    $result = mysql_query($query);
    if (!$result) {
         die('Problem updating text values : ' . mysql_error());
    }
        
}

function setUpdatenetwork($value){
    $this->network = $value;
    $query = "UPDATE `event` SET `network` = '$value'
    WHERE `id` LIKE '$id';";
    $result = mysql_query($query);
    if (!$result) {
         die('Problem updating text values : ' . mysql_error());
    }
        
}

function setUpdateowner_type($value){
    $this->owner_type = $value;
    $query = "UPDATE `event` SET `owner_type` = '$value'
    WHERE `id` LIKE '$id';";
    $result = mysql_query($query);
    if (!$result) {
         die('Problem updating text values : ' . mysql_error());
    }
        
}

function setUpdateownerID($value){
    $this->ownerID = $value;
    $query = "UPDATE `event` SET `ownerID` = '$value'
    WHERE `id` LIKE '$id';";
    $result = mysql_query($query);
    if (!$result) {
         die('Problem updating text values : ' . mysql_error());
    }
        
}





}
?>