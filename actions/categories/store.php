<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['store'])) {
    $name = $_POST['name'] ?? '';
    $description = $_POST['description'] ?? '';

    echo "<pre>";
    print_r([
        'name' => $name,
        'description' => $description,
    ]);
    echo "</pre>";
} else {
    echo "Data tidak dikirim melalui POST.";
}

?>