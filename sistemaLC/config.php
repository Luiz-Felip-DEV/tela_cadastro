<?php 
        // class responsavel por estabelecer uma 
        // conexão com o banco de dados      
        $dbHosta = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName = 'dog_ti';

        $mysqli = new mysqli($dbHosta,$dbUsername,$dbPassword,$dbName);
?>