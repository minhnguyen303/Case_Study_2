<?php


namespace Src\Model;


class UserManager
{
    protected DBConnect $dbConnect;

    public function __construct()
    {
        $this->dbConnect = new DBConnect();
    }

    public function getAllUser(): array
    {
        $sql = "SELECT * FROM Users";
        $data = $this->dbConnect->query($sql);
        $users = [];
        foreach ($data as $item) {
            $users[] = new User($item['userName'],$item['password'],$item['birthday'],$item['phone'], $item['email']);
        }
        return $users;
    }

    public function addUser($user)
    {
        $userName = $user->getUserName();
        $password = $user->getPassword();
        $birthday = $user->getBirthday();
        $phone = $user->getPhone();
        $email = $user->getEmail();
        $money = $user->getMoney();
        $sql = "INSERT INTO Users VALUES ('$userName', '$password', '$birthday', '$phone', '$email', '$money')";
        $this->dbConnect->execute($sql);
    }

    public function getUser($userName): array
    {
        $sql = "SELECT * FROM Users where userName='$userName'";
        return $this->dbConnect->query($sql);
    }

    public function updateUser($userName, $data)
    {
        $password = $userName->getPassword();
        $birthday = $userName->getBirthday();
        $phone = $userName->getPhone();
        $email = $userName->getEmail();
        $money = $userName->getMoney();

        $sql = "UPDATE Users SET password='$password', birthday='$birthday', phone='$phone', email='$email', money='$money' WHERE userName='$userName'";
        $this->dbConnect->execute($sql);
    }

    public function deleteUser($userName)
    {
        $sql = "DELETE FROM Users WHERE userName='$userName'";
        $this->dbConnect->execute($sql);
    }
}