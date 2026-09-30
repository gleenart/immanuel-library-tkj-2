<?php

$id = $_GET['id'] ?? '';

if ($id === '') {
    echo "ID buku tidak ditemukan.";
} else {
    echo "Buku dengan ID $id berhasil dihapus (simulasi).";
}

?>