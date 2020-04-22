<?php
class participant
{
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $photo;
    private $tel;
    private $pays;

    public function __construct($id, $nom, $prenom, $email, $photo, $tel, $pays)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->photo = $photo;
        $this->tel = $tel;
        $this->pays = $pays;
    }

    public function add($cnx){
        $cnx->exec("insert into participants (nom, prenom, email, photo, tel,pays)
          values('".$this->nom."', '".$this->prenom."',
                '".$this->email."', '".$this->photo."', '".$this->tel."',
                 '".$this->pays."')");
        header("location:controller.php?action=liste");
    }
    public function edit($cnx){
        $cnx->exec("update participants set nom='".$this->nom."',
        prenom='".$this->prenom."',email='".$this->email."',
        photo='".$this->photo."',tel='".$this->tel."',pays='".$this->pays."'
        where id='".$this->id."'");
    }
    
    public function supp($cnx){
        $cnx->exec("delete from participants where id= '".$this->id."' ");
        unlink("photos/".$this->photo);
    }

    public function liste($cnx){
	$list = $cnx->query("select * from participants")->fetchAll(PDO::FETCH_OBJ);
	return $list;
    }

    public function detail($cnx){
	$list=$cnx->query("select * from participants where id='".$this->id."'")->fetch(PDO::FETCH_OBJ);
	return $list;
    }
}
?>