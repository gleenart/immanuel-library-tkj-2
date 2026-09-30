<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? '';
    $name = $_POST['name'] ?? '';
    $bio = $_POST['bio'] ?? '';

    echo "<pre>";
    print_r([
        'id' => $id,
        'name' => $name,
        'bio' => $bio,
    ]);
    echo "</pre>";
} else {
    echo "Data tidak dikirim melalui POST.";
}

?>