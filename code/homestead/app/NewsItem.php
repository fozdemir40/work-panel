<?php

namespace App;

class NewsItem
{
    public $id;
    public $title;
    public $description;
    public $image = null;
    private $errors = [];

    const ITEMS = [
        [
            "id" => 1,
            "title" => "Vandaag is er iets gebeurd",
            "description" => "Neuter cursus tandem promissios nix est. When drying puréed margerines, be sure they are room temperature. Sonic shower, pattern, and advice.",
            "image" => "http://lorempixel.com/400/200/business/"
        ],
        [
            "id" => 2,
            "title" => "Iets met techniek",
            "description" => "Neuter cursus tandem promissios nix est. When drying puréed margerines, be sure they are room temperature. All occult visitors meet each other, only celestine saints have a courage.",
            "image" => "http://lorempixel.com/400/200/technics/"
        ],
        [
            "id" => 3,
            "title" => "Sporten is belangrijk",
            "description" => "Neuter cursus tandem promissios nix est. When drying puréed margerines, be sure they are room temperature. The mighty bung hole calmly robs the wave.",
            "image" => "http://lorempixel.com/400/200/sports/"
        ]
    ];

    /**
     * @return \string[][]
     */
    static public function all()
    {
        return self::ITEMS;
    }

    /**
     * @param int $id
     * @return string[]
     * @throws \Exception
     */
    static public function find(int $id)
    {
        $itemIndex = array_search($id, array_column(self::ITEMS, 'id'));

        if ($itemIndex === false) {
            throw new \Exception("ID does not exist in NewsItem");
        }

        return self::ITEMS[$itemIndex];
    }

    /**
     * @return bool
     */
    public function save()
    {
        if (empty($this->title)) {
            $this->errors['title'] = 'Titel moet ingevuld zijn';
        }
        if (empty($this->description)) {
            $this->errors['description'] = 'Beschrijving moet ingevuld zijn';
        }

        //True/false based on state of errors
        return empty($this->errors);
    }

    /**
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
}
