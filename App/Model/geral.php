<?php
    class geral{

        public static function hashIntegrate($senha) {
            $hash = '$i$d$l$f$c'.sha1(md5('$i$d$l$f$c'.$senha.HASH_ECRYPT));
            return $hash;
        }

        public static function csrf($token) {

            $token = md5(sha1($token));
            if ($token == $_SESSION['token']) {
                return true;
            } else {
                return false;
            }
            
        }

    }