<?php

namespace App\Models;

class Monster {

    // define the properties of the Monster class
    private string $name;
    private string $description;
    private string $type;
    private string $size;
    private string $alignment;
    private int $armor_class;
    private int $hit_points;
    private int $speed;
    private int $strength;
    private int $dexterity;
    private int $constitution;
    private int $intelligence;
    private int $wisdom;
    private int $charisma;

    public function __construct() {
        // Initialize the properties with default values or from parameters
        $this->name = '';
        $this->description = '';
        $this->type = '';
        $this->size = '';
        $this->alignment = '';
        $this->armor_class = 0;
        $this->hit_points = 0;
        $this->speed = 0;
        $this->strength = 0;
        $this->dexterity = 0;
        $this->constitution = 0;
        $this->intelligence = 0;
        $this->wisdom = 0;
        $this->charisma = 0;
    }
}