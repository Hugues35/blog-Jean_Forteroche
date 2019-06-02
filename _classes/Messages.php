<?php

class Messages
{

    public $id;
    public $date;
    public $pseudo;
    public $message;
    public $category;
    public $signalements;


    /**
     * Messages constructor.
     * @param $id
     */
    function __construct($id) {

        global $db;

        $id = str_secur($id);

        $reqMessage = $db->prepare('SELECT * FROM messages WHERE id = ?');
        $reqMessage->execute([$id]);
        $data = $reqMessage->fetch();

        $this->id = $id;
        $this->date = $date;
        $this->pseudo = $data['pseudo'];
        $this->message = $data['message'];
        $this->category = $data['category'];
        $this->signalements = $data['signalements'];

    }


    /**
     * Envoi de tous les messages
     * @return array
     */
    public static function getAllMessages() {

        global $db;

        $reqMessages = $db->prepare('SELECT * FROM messages ORDER BY id DESC');
        $reqMessages->execute([]);
        return $reqMessages->fetchAll();

    }


    /**
     * Envoi le dernier message
     * @return array
     */
    public static function getLastMessage($message = null) {

        global $db;

        if($message == null){
            $reqMessage = $db->prepare('
                SELECT a.*
                FROM messages a 
                
                ORDER BY id DESC
                LIMIT 1
            ');
            $reqMessage->execute([]);
        }else{
            $reqMessage = $db->prepare('
                SELECT a.*
                FROM messages a 
                
                ORDER BY id DESC
                LIMIT 1
            ');
            $reqMessage->execute([str_secur($message)]);
        }

        return $reqMessage->fetch();
    }


    /**
     * Envoi les messages sélectionnés par chapitre
     * @return array
     */
    public static function getMessChapt($chapterNumber) {

        global $db;

        $reqMessages = $db->prepare("SELECT * FROM messages WHERE chapter_number = $chapterNumber ORDER BY id DESC");
        $reqMessages->execute([]);
        return $reqMessages->fetchAll();

    }


    /**
     * Envoi la valeur de signalements pour un message signalé
     * @return array
     */
    public static function getSignalement() {

        global $db;

        $reqMessages = $db->prepare("SELECT signalements FROM messages WHERE signalements = $signal");
        $reqMessages->execute([]);
        return $reqMessages->fetchAll();

    }

}