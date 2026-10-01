<?php

$id = $_GET['id'] ?? '';

if ($id === '') {
    echo "ID pengguna tidak ditemukan.";
} else {
    echo "Pengguna dengan ID $id berhasil dihapus (simulasi).";
}

?>