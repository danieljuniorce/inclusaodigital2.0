<?php
    class geral{

        public static function hashIntegrate($senha) {
            $hash = sha1(md5($senha.HASH_ECRYPT));
            return $hash;
        }

    }