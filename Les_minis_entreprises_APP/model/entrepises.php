<?php 

function get_all_entreprise()
{
    $bdd = new PDO("mysql:host=localhost;dbname=lje_app","root","root",[PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    
    $stmt = $bdd->prepare("SELECT * FROM entrepises");
    
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
        
}
function get_entreprise_id($id)
{
    $bdd = new PDO("mysql:host=localhost;dbname=lje_app","root","root",[PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    
    $stmt = $bdd->prepare("SELECT * FROM entrepises WHERE id = :id");
    
    $stmt->execute(['id'=>$id]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC)[0];

}
function investis()
{
    $bdd = new PDO("mysql:host=localhost;dbname=lje_app","root","root",[PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $bdd->beginTransaction();

    $stmt = $bdd->prepare("INSERT INTO investissements (id_entrepise,name,email,address,message) VALUES (:id_entrepise,:name,:email,:address,:message)");
    $stmt->execute($_POST);

    $stmt = $bdd->prepare("UPDATE entrepises SET investissements = investissements+1 WHERE id = :id_entreprise");
 
    $stmt->execute($_POST);

    $bdd->commit();

   // return $stmt->fetchAll(PDO::FETCH_ASSOC);

}