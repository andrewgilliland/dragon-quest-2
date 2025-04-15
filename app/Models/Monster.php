<?php

namespace App\Models;

class Monster implements \JsonSerializable {
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

    public function __construct(private string $name = "",  private string $description = "",  private string $type = "", private string $size = "", $alignment = "", $armor_class, $hit_points, $speed, $strength, $dexterity, $constitution, $intelligence, $wisdom, $charisma) {
        // Initialize the properties with default values or from parameters
        $this->name = $name;
        $this->description =   $description;
        $this->type = $type;
        $this->size = $size;
        $this->alignment = $alignment;
        $this->armor_class = $armor_class ?? 0;
        $this->hit_points = $hit_points ?? 0;
        $this->speed = $speed ?? 0;
        $this->strength = $strength ?? 0;
        $this->dexterity = $dexterity ?? 0;
        $this->constitution =  $constitution ?? 0;
        $this->intelligence = $intelligence ?? 0;
        $this->wisdom = $wisdom ?? 0;
        $this->charisma = $charisma ?? 0;
    }

    public static function getAllMonsters(): array {
        $monsters = [
            new Monster('Goblin', 'A small, green-skinned creature that is often mischievous and cunning.', 'Humanoid', 'Small', 'Neutral Evil', 15, 7, 30, 8, 14, 10, 8, 8, 8),
            new Monster('Orc', 'A brutish creature with green skin and a muscular build, known for their strength and ferocity.', 'Humanoid', 'Medium', 'Chaotic Evil', 13, 15, 30, 16, 12, 14, 7, 11, 10),
            new Monster('Black Dragon', 'A large, powerful creature with scales and the ability to fly and breathe fire.', 'Dragon', 'Large', 'Chaotic Evil', 19, 200, 60, 30, 10, 20, 16, 15, 18),
        ];

        return $monsters;
    }

    public function jsonSerialize(): array {
        return [
            'name' => $this->name,
            'description' => $this->description,
            'type' => $this->type,
            'size' => $this->size,
            'alignment' => $this->alignment,
            'armor_class' => $this->armor_class,
            'hit_points' => $this->hit_points,
            'speed' => $this->speed,
            'strength' => $this->strength,
            'dexterity' => $this->dexterity,
            'constitution' => $this->constitution,
            'intelligence' => $this->intelligence,
            'wisdom' => $this->wisdom,
            'charisma' => $this->charisma,
        ];
    }
}