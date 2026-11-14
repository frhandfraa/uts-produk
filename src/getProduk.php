<?php

require __DIR__ . '/config.php';

try {
    $stmt = $pdo->query("SELECT id, nama_produk, harga, stok, created_at FROM produk ORDER BY id ASC");
    $rows = $stmt->fetchAll();

    $data = array_map(function ($row) {
        return [
            'id' => (int) $row['id'],
            'nama_produk' => $row['nama_produk'],
            'harga' => (int) $row['harga'],
            'stok' => (int) $row['stok'],
            'created_at' => $row['created_at']
        ];
    }, $rows);

    http_response_code(200);

    echo json_encode([
        'status' => 'success',
        'code' => 200,
        'data' => $data,
        'message' => 'Data produk berhasil diambil'
    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
} catch (PDOException $e) {
    http_response_code(500);

    echo json_encode([
        'status' => 'error',
        'code' => 500,
        'message' => 'Gagal mengambil data produk: ' . $e->getMessage()
    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
}