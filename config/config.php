<?php

function getDatabase()
{
    $dbPath = __DIR__ . '/../data/database.db';
    try {
        $db = new SQLite3($dbPath);

// Create task table if not exists
        $db->exec('
            CREATE TABLE IF NOT EXISTS task (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                taskContent TEXT NOT NULL,
                done INTEGER
            )
        ');
        return $db;
    } catch (SQLiteException $e) {
        echo 'SQLite3 Error: ' . $e->getMessage();
        return null;
    }
}
