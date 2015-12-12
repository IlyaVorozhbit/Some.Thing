<?php

/**
 * Класс-обёртка для работы с базами данных MySQL через PDO
 * @author TheAndrey
 */
class MySQL_PDO {

    /**
     * @var PDO Объект PDO
     */
    private $pdo;
    private $queryCount = 0;
    private $queryTime = 0;

    /**
     * Создание объекта класса MySQL_PDO для работы с базой данных MySQL
     * @param string $host Хост. Например, "localhost" или с указанием порта: "localhost:3306"
     * @param string $user Имя пользователя базы данных
     * @param string $password Пароль пользователя БД
     * @param string $dbname Имя базы данных
     * @param string $charset Кодировка соединения. По умолчанию - utf8
     */
    public function __construct($host, $user, $password, $dbname, $charset = 'utf8') {
        $port = ini_get('mysqli.default_port');
        if (self::str_contains(':', $port)) {
            list($host, $port) = explode(':', $host);
        }
        $this->pdo = new PDO("mysql:host={$host};port={$port};dbname={$dbname};charset={$charset}", $user, $password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ]);
    }

    /**
     * Выполнить SELECT запос к базе данных на запрос нескольких строк.
     * @param string $query SQL-запрос: "SELECT ... FROM ..."
     * @param array $values Массив подстановочных значений
     * @return array Массив состоящий из строк выборки.
     * @throws PDOException В случае возникновения ошибки.
     */
    public function select($query, array $values = null) {
        $stmt = $this->pdo->prepare($query);
        if ($values) {
            $stmt->execute($values);
        } else {
            $stmt->execute();
        }
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Выполнить SELECT запрос к базе данных на запрос только одной строки.
     * @param string $query SQL-запрос: "SELECT ... FROM ..."
     * @param array $values Массив подстановочных значений
     * @return array Выбранная строка из таблицы в виде массива. Ключи массива - имена полей таблицы.
     * @throws PDOException В случае возникновения ошибки.
     */
    public function selectOne($query, array $values = null) {
        $stmt = $this->pdo->prepare($query);
        if ($values) {
            $stmt->execute($values);
        } else {
            $stmt->execute();
        }
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * Выполнить запрос к базе данных. Для SELECT запросов рекомендуется использовать select() или selectOne().
     * @param string $query SQL-запрос
     * @return int Кол-во затронутых строк
     * @throws PDOException В случае возникновения ошибки.
     */
    public function runQuery($query, array $values = null) {
        $stmt = $this->pdo->prepare($query);
        if ($values) {
            $stmt->execute($values);
        } else {
            $stmt->execute();
        }
        return $stmt->rowCount();
    }

    private function insertReplaceQuery($action, $table, array $data) {
        $fields = self::str_wrap('`', array_keys($data));
        $fields = implode(', ', $fields);

        $placeholders = [];
        $values = [];
        foreach ($data as $value) {
            $placeholders[] = '?';
            $values[] = $value;
        }
        $placeholders = implode(', ', $placeholders);

        $stmt = $this->pdo->prepare("{$action} INTO `{$table}` ({$fields}) VALUES ({$placeholders})");
        $stmt->execute($values);
        return $this->pdo->lastInsertId();
    }

    /**
     * Выполнить INSERT запрос. Возвращает уникальный индентификатор, присвоенный вставленной записи.
     * @param string $table Имя таблицы
     * @param array $data Одномерный массив с данными. Ключами массива должны быть названия полей таблицы.
     * @return int Уникальный идентификатор добавленной записи
     * @throws PDOException В случае возникновения ошибки.
     */
    public function insert($table, array $data) {
        return $this->insertReplaceQuery('INSERT', $table, $data);
    }

    /**
     * Выполнить REPLACE запрос. Возвращает уникальный индентификатор, присвоенный вставленной записи.
     * @param string $table Имя таблицы
     * @param array $data Одномерный массив с данными. Ключами массива должны быть названия полей таблицы.
     * @return int Уникальный идентификатор добавленной записи
     * @throws PDOException В случае возникновения ошибки.
     */
    public function replace($table, array $data) {
        return $this->insertReplaceQuery('REPLACE', $table, $data);
    }

    /**
     * Закрыть соединение с базой данных
     */
    public function close() {
        $this->pdo = null; // именно так, согласно документации
    }

    /**
     * Возвращает общее количество выполненных запросов к БД
     * @return int Количество запросов
     */
    public function getQueryCount() {
        return $this->queryCount;
    }

    /**
     * Возвращает время, затраченное на выполнение всех запросов
     * @return int Время в секундах
     */
    public function getQueryTime() {
        return $this->queryTime;
    }

    private static function str_contains($needle, $str) {
        return (strpos($str, $needle) === false) ? false : true;
    }

    private static function str_wrap($wrapper, $str) {
        if (is_string($str)) {
            return $wrapper . $str . $wrapper;
        } else if (is_array($str)) {
            foreach ($str as $key => $value) {
                $str[$key] = self::str_wrap($wrapper, $value);
            }
            return $str;
        } else {
            return null;
        }
    }

}
