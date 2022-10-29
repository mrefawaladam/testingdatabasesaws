<?php

    $server   = 'refadb2.cheqzaofdfyb.us-east-1.rds.amazonaws.com';
    $username = 'admin';
    $password = 'adminadmin';
    $database = 'perusahaan';

    try {
        $conn = new PDO("mysql:host=$server;dbname=$database", $username, $password);
    }
    catch(PDOException $e) {
        echo 'Koneksi gagal: ' . $e->getMessage();
    }
