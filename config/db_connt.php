<?php  

define("DB_HOST","localhost");
define("DB_USER","prakhar");
define("DB_PASS","");
define("DB_NAME","dailycart");


$conn=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if($conn->connect_error){
    echo "Database not connected";
}else{
    // echo "you are connected to database";
}





?>