<?php
namespace Framework;
Class DatabaseTable {
  private $connection;
  private $table;
  private $primaryKey;
  private $className;
  private $constructorArgs;

  function __construct(\PDO $connection, string $table, string $primaryKey, string $className = '\stdClass', array $constructorArgs = []) {
    $this->connection = $connection;
    $this->table = $table;
    $this->primaryKey = $primaryKey;
    $this->className = $className;
    $this->constructorArgs = $constructorArgs;
  }

  private function query($sql, $parameters = []) {
    $query = $this->connection->prepare($sql);
    $query->execute($parameters);
    return $query;
  }

  public function getData() {
    $result = $this->query('SELECT * FROM ' . $this->table);
    return $result->fetchAll(\PDO::FETCH_CLASS, $this->className, $this->constructorArgs);
  }
 
  public function find($column, $value) {
    $query = 'SELECT * FROM ' . $this->table . ' WHERE ' . $column . ' = :value';
    $parameters = ['value' => $value];

    $result = $this->query($query, $parameters);
    return $result->fetchAll();
  }

  public function insertData($image) {
    $this->query('INSERT INTO `'. $this->table .'` (`source`) VALUES ( ' . $image . ')');
  }

  public function deleteData($id) {
    $this->query('DELETE FROM ' . $this->table . ' WHERE `' . $this->primaryKey . '` = ' . $id);
  }

  public function updateData($table, $fields) {
    $query = 'UPDATE `:$table` SET ';
 
    foreach ($fields as $key => $value) {
      $query .= '`' . $key . '` = :' . $key . ',';
    }
    $query = rtrim($query, ',');
    $query .= ' WHERE `id` = :primaryKey';
 
    $fields['primaryKey'] = $fields['id'];

    query($query, $fields);
  }
    
}