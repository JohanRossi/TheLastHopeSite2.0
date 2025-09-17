<?php
class Database {
  private static $pdo = null;

  public static function get(): PDO {
    if (self::$pdo === null) {
      $cfg = require __DIR__ . '/../config/db.php';
      $dsn = "mysql:host={$cfg['host']};dbname={$cfg['db']};charset={$cfg['charset']}";
      self::$pdo = new PDO($dsn, $cfg['user'], $cfg['pass'], [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      ]);
    }
    return self::$pdo;
  }
}
