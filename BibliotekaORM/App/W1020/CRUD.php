<?php


namespace W1020;


class CRUD extends Db
{
    protected string $tableName;

    /**
     * @param string $tableName
     * @return $this
     */
    public function setTableName(string $tableName)
    {
        $this->tableName = $tableName;
        return $this;
    }

    /** читает данные из таблицы
     * @return array
     */
    public function get(): array
    {
        return $this->query("SELECT * FROM $this->tableName;");
    }

    /** добавляет строку в таблицу
     * @return $this
     */
    public function create(): static
    {
//        $columns = array_keys($data);
//        $stringColumns="`".implode('`, `',$columns)."`";
//        echo $stringColumns;


        $this->mysqli->query("INSERT INTO $this->tableName (`message`,`name`) VALUES ('Hello Helena!!!','MASHA')");
        return $this;
    }

    public function update(): static
    {
        $this->mysqli->query("UPDATE $this->tableName SET `name` = 'Nika' WHERE id=11");
        return $this;
    }

    /** удаляет строку из таблицы
     * @return $this
     */
    public function delete(): static
    {
        $this->mysqli->query("DELETE FROM $this->tableName WHERE id=87");
        return $this;
    }
}