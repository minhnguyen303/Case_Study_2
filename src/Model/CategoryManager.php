<?php

namespace Src\Model;


class CategoryManager
{
    protected DBConnect $dbConnect;

    public function __construct()
    {
        $this->dbConnect = new DBConnect();
    }

    public function getAllCategory(): array
    {
        $sql = "SELECT * FROM Categories";
        $data = $this->dbConnect->query($sql);
        $users = [];
        foreach ($data as $item) {
            $users[] = new Category($item['id'],$item['name'],$item['description']);
        }
        return $users;
    }

    public function addCategory(Category $category)
    {
        $id = $category->getId();
        $name = $category->getName();
        $description = $category->getDescription();
        $sql = "INSERT INTO Categories VALUES ()";
        $this->dbConnect->execute($sql);
    }

    public function getCategory($id): array
    {
        $sql = "SELECT * FROM Categories where id='$id'";
        return $this->dbConnect->query($sql);
    }

    public function updateCategory($id,Category $data)
    {
        $name = $data->getName();
        $description = $data->getDescription();
        $sql = "UPDATE Categories SET id='$id', name='$name', description='$description' WHERE id='$id'";
        $this->dbConnect->execute($sql);
    }

    public function deleteCategory($id)
    {
        $sql = "DELETE FROM Categories WHERE id='$id'";
        $this->dbConnect->execute($sql);
    }
}