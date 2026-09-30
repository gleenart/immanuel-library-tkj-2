<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? '';
    $name = $_POST['name'] ?? '';
    $description = $_POST['description'] ?? '';

    echo "<pre>";
    print_r([
        'id' => $id,
        'name' => $name,
        'description' => $description,
    ]);
    echo "</pre>";
} else {
    echo "Data tidak dikirim melalui POST.";
}

?>