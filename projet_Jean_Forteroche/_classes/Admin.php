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

    static function getOneAdminId($username, $password) {

        global $db;

        $reqAdminUsers = $db->prepare('SELECT * FROM admin where username = ? and password = ?');
        $reqAdminUsers->execute([$username, $password]);
        $admin = $reqAdminUsers->fetch();
        if ($admin === false){
            return false;
        } else {
            return $admin['id'];
        }
    }

    static function getPublicInfo($id){
        global $db;

        $reqAdminUsers = $db->prepare('SELECT * FROM admin where id = ?');
        $reqAdminUsers->execute([$id]);
        $adminInfos = $reqAdminUsers->fetch();
        $adminPublicInfo = [
            "username" => $adminInfos['username'],
            "key" => $adminInfos['personnalKey']
        ];
        return $adminPublicInfo;
    }


    static function getPublicInfoByKey($key){
        global $db;

        $reqAdminUsers = $db->prepare('SELECT * FROM admin where personnalKey = ?');
        $reqAdminUsers->execute([$key]);
        $adminInfos = $reqAdminUsers->fetch();
        $adminPublicInfo = [
            "username" => $adminInfos['username'],
            "key" => $adminInfos['personnalKey']
        ];
        return $adminPublicInfo;
    }

    static function getAdminByKey($key){
        global $db;

        $reqAdminUsers = $db->prepare('SELECT * FROM admin where personnalKey = ?');
        $reqAdminUsers->execute([$key]);
        $admin = $reqAdminUsers->fetch();
        if ($admin === false){
            return false;
        } else {
            return true;
        }
    }

    static function getAdminWithUsername($username){
        global $db;

        $reqAdminUsers = $db->prepare('SELECT * FROM admin where username = ?');
        $reqAdminUsers->execute([$username]);
        $admin = $reqAdminUsers->fetch();
        if ($admin === false){
            return "";
        } else {
            return $admin;
        }
    }
}