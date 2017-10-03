<?php
class pdom
{
    private static $serveur='mysql:host=localhost';
    private static $user='root';
    private static $bdd='dbname=projet-gfi';
    private static $leMdp='root';
    private static $monPdo;
    private static $monPdoGsb = null;

    /**
     * Constructeur privé, crée l'instance de PDO qui sera sollicitée
     * pour toutes les méthodes de la classe
     */
    private function __construct(){
        pdom::$monPdo = new PDO(pdom::$serveur.';'.pdom::$bdd, pdom::$user, pdom::$leMdp);
        pdom::$monPdo->query("SET CHARACTER SET utf8");

    }
    public function _destruct(){
        pdom::$monPdo = null;
    }
    /**
     * Fonction statique qui crée l'unique instance de la classe

     * Appel : $instancePdoGsb = PdoGsb::getPdoGsb();

     * @return l'unique objet de la classe PdoGsb
     */
    public  static function getPdo(){
        if(pdom::$monPdoGsb==null){
            pdom::$monPdoGsb= new pdom();
        }
        return pdom::$monPdoGsb;
    }
}

?>