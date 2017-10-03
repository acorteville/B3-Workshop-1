<?php
class Pdom
{
    private static $serveur='mysql:host=localhost';
    private static $user='root';
    private static $bdd='dbname=projet-gfi';
    private static $leMdp='root';
    private static $monPdo;
    private static $monPdoGFI = null;

    /**
     * Constructeur privé, crée l'instance de PDO qui sera sollicitée
     * pour toutes les méthodes de la classe
     */
    private function __construct(){
        try {
            Pdom::$monPdo = new PDO(Pdom::$serveur.';'.Pdom::$bdd, Pdom::$user, Pdom::$leMdp);
            Pdom::$monPdo->query("SET CHARACTER SET utf8");
        } catch (Exception $e) {
            echo "Echec de la connexion";
            echo "<hr />";
            echo $e->getMessage();
            die;
        }

    }
    public function _destruct(){
        Pdom::$monPdo = null;
    }
    /**
     * Fonction statique qui crée l'unique instance de la classe

     * Appel : $instancePdoGsb = PdoGsb::getPdoGsb();

     * @return l'unique objet de la classe PdoGsb
     */
    public  static function getPdo(){
        if(Pdom::$monPdoGFI==null){
            Pdom::$monPdoGFI= new Pdom();
        }
        return Pdom::$monPdoGFI;
    }
    
    static public function getMonPdo() {
      return self::$monPdo;
    }
}

?>
