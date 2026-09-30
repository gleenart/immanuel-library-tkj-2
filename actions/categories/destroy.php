<?php

$id = $_GET['id'] ?? '';

if ($id === '') {
    echo "ID kategori tidak ditemukan.";
} else {
    echo "Kategori dengan ID $id berhasil dihapus (simulasi).";
}

?>