<?php
function adminer_object() {

    class AdminerSoftware extends Adminer {



//        function permanentLogin() {
//            // key used for permanent login
//            return "e237a89867b04f22d3e25ec491937590";
//        }

//        function credentials() {
//            // server, username and password for connecting to database
//            return array('localhost', 'root', '');
//        }

//        function database() {
//            // database name, will be escaped by Adminer
//            return 'homestead';
//        }

//        function login($login, $password) {
//            // validate user submitted credentials
//            return ($login == 'admin' && $password == '');
//        }


    }

    return new AdminerSoftware;
}

include 'adminer-4.2.4-en.php';