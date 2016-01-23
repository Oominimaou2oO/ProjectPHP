<?php

/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 23/01/2016
 * Time: 16:29
 */
class CategoryEntity
{
    private $id, $account, $name;

    public function persist()
    {
        $db = new Database();
        if ($this->id == null)
        {
            $req = 'INSERT INTO categories (account, title) VALUES (?, ?)';
            $db->execute($req, array($this->account, $this->name));
        }
        else
        {
            $req = 'UPDATE categories SET account = ?, title = ? WHERE id = ?';
            $db->execute($req, array($this->account, $this->name));
        }
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
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @param mixed $account
     */
    public function setAccount($account)
    {
        $this->account = $account;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

}