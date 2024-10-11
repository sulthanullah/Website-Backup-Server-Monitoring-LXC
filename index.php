<?php
include 'config/database.php';

// Ambil data dari folder backup
$backupDir = '/var/backup/lxc';
$backups = [];

// Pastikan folder backup ada
if (is_dir($backupDir)) {
    // Buka direktori
    if ($handle = opendir($backupDir)) {
        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != "..") {
                // Ambil info file backup
                $filePath = $backupDir . '/' . $entry;
                $backups[] = [
                    'name' => $entry,
                    'size' => filesize($filePath),
                    'last_modified' => date("F d Y H:i:s.", filemtime($filePath))
                ];
            }
        }
        closedir($handle);
    }
}

include 'views/header.php';
include 'views/dashboard.php';
include 'views/footer.php';
?>