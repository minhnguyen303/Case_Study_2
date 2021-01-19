<?php

namespace Src\Model;

class Inventory
{
    protected $id;
    protected $userName;
    protected $displayName;
    protected $maxSlots;

    /**
     * Inventory constructor.
     * @param $id
     * @param $userName
     * @param $displayName
     * @param $maxSlots
     */
    public function __construct($id, $userName, $displayName, $maxSlots)
    {
        $this->id = $id;
        $this->userName = $userName;
        $this->displayName = $displayName;
        $this->maxSlots = $maxSlots;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param mixed $userName
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    /**
     * @return mixed
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param mixed $displayName
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    /**
     * @return mixed
     */
    public function getMaxSlots()
    {
        return $this->maxSlots;
    }

    /**
     * @param mixed $maxSlots
     */
    public function setMaxSlots($maxSlots)
    {
        $this->maxSlots = $maxSlots;
    }

}