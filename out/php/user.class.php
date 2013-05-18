<?php
class user{
	 var $id;
	 var $name;
	 var $surname;
	 var $website;
	 var $email;
	 var $password;
	 var $photo_id;
	 var $description;
	 var $permissions;
	 var $country;
	 var $city;


function create($id, $name, $surname, $website, $email, $password, $photo_id, $description, $permissions, $country, $city){
        $query="INSERT INTO `user` (`id`, `name`, `surname`, `website`, `email`, `password`, `photo_id`, `description`, `permissions`, `country`, `city`) 
                VALUES ('$id', '$name', '$surname', '$website', '$email', '$password', '$photo_id', '$description', '$permissions', '$country', 'city');";
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
	 $this->surname=$surname;
	 $this->website=$website;
	 $this->email=$email;
	 $this->password=$password;
	 $this->photo_id=$photo_id;
	 $this->description=$description;
	 $this->permissions=$permissions;
	 $this->country=$country;
	 $this->city=$city;

         }
}








function getid(){
    return this->$id;
}

function getname(){
    return this->$name;
}

function getsurname(){
    return this->$surname;
}

function getwebsite(){
    return this->$website;
}

function getemail(){
    return this->$email;
}

function getpassword(){
    return this->$password;
}

function getphoto_id(){
    return this->$photo_id;
}

function getdescription(){
    return this->$description;
}

function getpermissions(){
    return this->$permissions;
}

function getcountry(){
    return this->$country;
}

function getcity(){
    return this->$city;
}




function setUpdateid($value){
    $this->id = $value;
    $query = "UPDATE `user` SET `id` = '$value'
    WHERE `id` LIKE '$id';";
    $result = mysql_query($query);
    if (!$result) {
         die('Problem updating text values : ' . mysql_error());
    }
        
}

function setUpdatename($value){
    $this->name = $value;
    $query = "UPDATE `user` SET `name` = '$value'
    WHERE `id` LIKE '$id';";
    $result = mysql_query($query);
    if (!$result) {
         die('Problem updating text values : ' . mysql_error());
    }
        
}

function setUpdatesurname($value){
    $this->surname = $value;
    $query = "UPDATE `user` SET `surname` = '$value'
    WHERE `id` LIKE '$id';";
    $result = mysql_query($query);
    if (!$result) {
         die('Problem updating text values : ' . mysql_error());
    }
        
}

function setUpdatewebsite($value){
    $this->website = $value;
    $query = "UPDATE `user` SET `website` = '$value'
    WHERE `id` LIKE '$id';";
    $result = mysql_query($query);
    if (!$result) {
         die('Problem updating text values : ' . mysql_error());
    }
        
}

function setUpdateemail($value){
    $this->email = $value;
    $query = "UPDATE `user` SET `email` = '$value'
    WHERE `id` LIKE '$id';";
    $result = mysql_query($query);
    if (!$result) {
         die('Problem updating text values : ' . mysql_error());
    }
        
}

function setUpdatepassword($value){
    $this->password = $value;
    $query = "UPDATE `user` SET `password` = '$value'
    WHERE `id` LIKE '$id';";
    $result = mysql_query($query);
    if (!$result) {
         die('Problem updating text values : ' . mysql_error());
    }
        
}

function setUpdatephoto_id($value){
    $this->photo_id = $value;
    $query = "UPDATE `user` SET `photo_id` = '$value'
    WHERE `id` LIKE '$id';";
    $result = mysql_query($query);
    if (!$result) {
         die('Problem updating text values : ' . mysql_error());
    }
        
}

function setUpdatedescription($value){
    $this->description = $value;
    $query = "UPDATE `user` SET `description` = '$value'
    WHERE `id` LIKE '$id';";
    $result = mysql_query($query);
    if (!$result) {
         die('Problem updating text values : ' . mysql_error());
    }
        
}

function setUpdatepermissions($value){
    $this->permissions = $value;
    $query = "UPDATE `user` SET `permissions` = '$value'
    WHERE `id` LIKE '$id';";
    $result = mysql_query($query);
    if (!$result) {
         die('Problem updating text values : ' . mysql_error());
    }
        
}

function setUpdatecountry($value){
    $this->country = $value;
    $query = "UPDATE `user` SET `country` = '$value'
    WHERE `id` LIKE '$id';";
    $result = mysql_query($query);
    if (!$result) {
         die('Problem updating text values : ' . mysql_error());
    }
        
}

function setUpdatecity($value){
    $this->city = $value;
    $query = "UPDATE `user` SET `city` = '$value'
    WHERE `id` LIKE '$id';";
    $result = mysql_query($query);
    if (!$result) {
         die('Problem updating text values : ' . mysql_error());
    }
        
}





}
?>