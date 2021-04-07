<?php
namespace App\Entity;

class Arm{
    public $type;
    public $poid;
    public $utilisation;
    public $effet;
    public static $arms=[];

    /**
     * Arm constructor.
     * @param $type
     * @param $poid
     * @param $utilisation
     * @param $effet
     */
    public function __construct($type, $poid, $utilisation, $effet)
    {
        $this->type = $type;
        $this->poid = $poid;
        $this->utilisation = $utilisation;
        $this->effet = $effet;
        self::$arms[]=$this;
    }
    public static function creerArm(){
        $a1=new Arm("Lim","leger","yedgher","jor7 3ami9");
        $a2=new Arm("Stone","lourd","tadmagh","traumatisme cranien");
        $a3=new Arm("Foushika","leger","tfarga3","trach");
    }
    public static function getArmParType($type){
        foreach (self::$arms as $arm){
            if($arm->type==$type){
                return $arm;
            }
        }

}


}
?>