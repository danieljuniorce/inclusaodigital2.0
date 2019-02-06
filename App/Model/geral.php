<?php
    class geral{

        public static function hashIntegrate($senha) {
            $hash = '$i$d$l$f$c'.sha1(md5('$i$d$l$f$c'.$senha));
            return $hash;
        }
        public function DataNascimentoForAno($data)
        {
            $date = date("d/m/Y", strtotime($data));
    
            list($dia, $mes, $ano) = explode('/', $date);
    
            $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
    
            $nascimento = mktime(0, 0, 0, $mes, $dia, $ano);
    
            return $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
        }
        public function transDate($data)
        {
            return date("d/m/Y", strtotime($data));
        }
    }