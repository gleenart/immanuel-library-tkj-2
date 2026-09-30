<?php

$id = $_GET['id'] ?? '';

if ($id === '') {
    echo "ID penulis tidak ditemukan.";
} else {
    echo "Penulis dengan ID $id berhasil dihapus (simulasi).";
}

?>