<?php

class BasedeDatos{

	const host='localhost';
    const db = 'Sena';
    const username = 'postgres';
    const password = 'Datacenter.';
    
    public static function Conectar()
	{
        $connStr =  ("pgsql:host=".self::host.";port=5432;dbname=".self::db.";user=".self::username.";password=".self::password);

 
        try{
        // create a PostgreSQL database connection
        $conn = new PDO($connStr);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // display a message if connected to the PostgreSQL successfully
        if($conn){
        return $conn;
        }
        }catch (PDOException $e){
        // report error message
        return $e->getMessage();
        }
    }


}