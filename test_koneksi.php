<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'config/koneksi.php';

if ($conn) {
    echo '✅ Koneksi database berhasil!';
    $result = mysqli_query($conn, 'SELECT COUNT(*) as total FROM users');
    $row = mysqli_fetch_assoc($result);
    echo '<br>Total users: ' . $row['total'];
} else {
    echo '❌ Koneksi gagal!';
}
?>