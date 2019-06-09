<?php

class Chapters
{

    public $id;
    public $date;
    public $author;
    public $story;
    public $category;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return mixed
     */
    public function getStory()
    {
        return $this->story;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * Messages constructor.
     * @param $id
     */
    function __construct($id)
    {

        global $db;

        $id = str_secur($id);

        $reqChapter = $db->prepare('SELECT * FROM chapters WHERE id = ?');
        $reqChapter->execute([$id]);
        $data = $reqChapter->fetch();

        if ($data == false) {
            $this->id = "Error";
            $this->date = "Error";
            $this->author = "Error";
            $this->story = "Error";
            $this->category = "Error";
        } else {
            $this->id = $data['id'];
            $this->date = $data['date'];
            $this->author = $data['author'];
            $this->story = $data['story'];
            $this->category = $data['category'];
        }

    }

    public static function getAllChapters(){
        global $db;

        $reqChapitres = $db->prepare("SELECT * FROM chapters");
        $reqChapitres->execute([]);
        return $reqChapitres->fetchAll();
    }

}