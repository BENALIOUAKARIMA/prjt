<!-- aleart -->
<?php

class Session{

    static public function set($type,$message){ // type de message (error or valide === rouge ou vert)
        //pour le message ib9a ikhtafi ankhdmo be setcookies
        //cookies pour recuperer les info d'utulisateur o ikhalihom 3ando bach mara akhra ma t7tajch dakhl les donner dyalk
        //cookie katakhod 4 paramettre 1.smiya o tani valeur o talt howa time li ghada tsala fih cookie rab3(/) ana cookie ghada tkhdem fe prjt kaml
        setcookie($type,$message,time()+5,"/");
    
    }
}



?>