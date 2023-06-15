<?php

include('../database/database.php');

$id = $_GET['id'];

$query = "DELETE FROM artikel WHERE id_artikel = '$id'";

if ($conn->query($query)) {
    header("location: daftar_artikel.php");
} else {
    echo "DATA GAGAL DIHAPUS";
}