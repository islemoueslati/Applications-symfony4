<?php
namespace App\Entity;
class Personnage{
    public $Pseudo;
    public $Age;
    public $Sexe;
    public $carac=[];
    public static $personnages=[];

    /**
     * Personnage constructor.
     * @param $Pseudo
     * @param $Age
     * @param $Sexe
     * @param array $carac
     */
    public function __construct($Pseudo, $Age, $Sexe, array $carac)
    {
        $this->Pseudo = $Pseudo;
        $this->Age = $Age;
        $this->Sexe = $Sexe;
        $this->carac = $carac;
        self::$personnages[]=$this;
    }
    public static function creerPersonnage(){
        $p1=new Personnage("Kalthoum",80,false,["force"=>8, "Agi"=>5,"intel"=>7]);
        $p2=new Personnage("Leonardo",40,true,["force"=>5, "Agi"=>3,"intel"=>2]);
        $p3=new Personnage("Trump",96,true,["force"=>6, "Agi"=>6,"intel"=>8]);

    }
    public static function getPersonnageParNom($Pseudo){
        foreach (self::$personnages as $perso){
            if($perso->Pseudo==$Pseudo){
                return $perso;
            }

        }


}
}
?>