<?php
class business{
	 var $id;
	 var $fanCount;
	 var $name;
	 var $website;
	 var $email;
	 var $password;
	 var $short_description;
	 var $description;


function create($id, $fanCount, $name, $website, $email, $password, $short_description, $description){
        $query="INSERT INTO `business` (`id`, `fanCount`, `name`, `website`, `email`, `password`, `short_description`, `description`) 
                VALUES ('$id', '$fanCount', '$name', '$website', '$email', '$password', '$short_description', 'description');";
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
	 $this->fanCount=$fanCount;
	 $this->name=$name;
	 $this->website=$website;
	 $this->email=$email;
	 $this->password=$password;
	 $this->short_description=$short_description;
	 $this->description=$description;

         }
}








function getid(){
    return this->$id;
}

function getfanCount(){
    return this->$fanCount;
}

function getname(){
    return this->$name;
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

function getshort_description(){
    return this->$short_description;
}

function getdescription(){
    return this->$description;
}




function setUpdateid($value){
    $this->id = $value;
    $query = "UPDATE `business` SET `id` = '$value'
    WHERE `id` LIKE '$id';";
    $result = mysql_query($query);
    if (!$result) {
         die('Problem updating text values : ' . mysql_error());
    }
        
}

function setUpdatefanCount($value){
    $this->fanCount = $value;
    $query = "UPDATE `business` SET `fanCount` = '$value'
    WHERE `id` LIKE '$id';";
    $result = mysql_query($query);
    if (!$result) {
         die('Problem updating text values : ' . mysql_error());
    }
        
}

function setUpdatename($value){
    $this->name = $value;
    $query = "UPDATE `business` SET `name` = '$value'
    WHERE `id` LIKE '$id';";
    $result = mysql_query($query);
    if (!$result) {
         die('Problem updating text values : ' . mysql_error());
    }
        
}

function setUpdatewebsite($value){
    $this->website = $value;
    $query = "UPDATE `business` SET `website` = '$value'
    WHERE `id` LIKE '$id';";
    $result = mysql_query($query);
    if (!$result) {
         die('Problem updating text values : ' . mysql_error());
    }
        
}

function setUpdateemail($value){
    $this->email = $value;
    $query = "UPDATE `business` SET `email` = '$value'
    WHERE `id` LIKE '$id';";
    $result = mysql_query($query);
    if (!$result) {
         die('Problem updating text values : ' . mysql_error());
    }
        
}

function setUpdatepassword($value){
    $this->password = $value;
    $query = "UPDATE `business` SET `password` = '$value'
    WHERE `id` LIKE '$id';";
    $result = mysql_query($query);
    if (!$result) {
         die('Problem updating text values : ' . mysql_error());
    }
        
}

function setUpdateshort_description($value){
    $this->short_description = $value;
    $query = "UPDATE `business` SET `short_description` = '$value'
    WHERE `id` LIKE '$id';";
    $result = mysql_query($query);
    if (!$result) {
         die('Problem updating text values : ' . mysql_error());
    }
        
}

function setUpdatedescription($value){
    $this->description = $value;
    $query = "UPDATE `business` SET `description` = '$value'
    WHERE `id` LIKE '$id';";
    $result = mysql_query($query);
    if (!$result) {
         die('Problem updating text values : ' . mysql_error());
    }
        
}





}
?>