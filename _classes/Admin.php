<?php

class Admin
{

    public $id;
    public $username;
    public $password;


    /**
     * Messages constructor.
     * @param $id
     */
    function __construct($id) {

        global $db;

        $id = str_secur($id);

        $reqUsername = $db->prepare('SELECT * FROM admin WHERE id = ?');
        $reqUsername->execute([$id]);
        $data = $reqUsername->fetch();

        $this->id = $id;
        $this->username = $data['username'];
        $this->password = $data['password'];

    }


    /**
     * Envoi de tous les Administrateurs
     * @return array
     */
    static function getAllAdminUsers() {

        global $db;

        $reqAdminUsers = $db->prepare('SELECT * FROM admin');
        $reqAdminUsers->execute([]);
        return $reqAdminUsers->fetchAll();

    }

}