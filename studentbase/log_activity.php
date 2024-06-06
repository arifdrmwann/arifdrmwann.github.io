<?php

function logActivity($userId, $activity) {
    // Koneksi ke database
    $conn = new mysqli("localhost", "username", "password", "db_mahasiswa");

    
    // Cek koneksi
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Siapkan dan bind
    $stmt = $conn->prepare("INSERT INTO activity_log (user_id, activity) VALUES (?, ?)");
    $stmt->bind_param("is", $userId, $activity);

    // Eksekusi
    $stmt->execute();

    // Tutup statement dan koneksi
    $stmt->close();
    $conn->close();
}

?>
