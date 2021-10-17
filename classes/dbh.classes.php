 <?php

class Dbh{

protected function connect(){
try{
$username = "root";
$password = "";
$dbh = new PDO('mysql:host=localhost;dbname=ooplogin',$username,$password); //if the db connection has a error it is most likely the mysql
return $dbh;
}   
catch(PDOException $e){
print "error!: ".$e->getMessage() ."<br/>";
die();
} 
}     


}