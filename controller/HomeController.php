<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home
 *
 * @author Willian
 */
class HomeController {

    function homeAdmin() {
        include_once 'view/web/adm/home.php';
    }
    function homeUsuario() {
        include_once 'view/web/user/home.php';
    }
    function homeAdminMobile() {
        include_once 'view/mobile/adm/home.php';
    }
    function homeUsuarioMobile() {
        include_once 'view/mobile/user/home.php';
    }

    //put your code here
}
