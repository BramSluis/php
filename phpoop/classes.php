<?php
class Enemy
{
    public $name;
    public $health;
    public $damage;

    function __construct($name, $health, $damage)
    {
        $this->name = $name;
        $this->health = (int) $health;
        $this->damage = (int) $damage;

    }
    function GetName()
    {
        return $this->name;
    }
    function GetHealth()
    {
        return $this->health;
    }

    function GetDamage()
    {
        return $this->health;
    }
}

