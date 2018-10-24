<?php

require_once('connectBD.php');


class Prof extends connectDb {

    private $id_prof;
    private $genre;
    private $nom;
    private $prenom;
    private $email;
    private $label;
    private $login_prof;
    private $pass_prof;
    private $date_prof;
    private $urlPhoto;
    private $couleur;
    private $bConnect;

    public function __construct($id_prof, $genre, $nom, $prenom, $email, $label, $login_prof, $pass_prof, $date_prof, $urlPhoto, $couleur, $bConnect)
    {
        $this->id_prof = $id_prof;
        $this->genre = $genre;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->label = $label;
        $this->login_prof = $login_prof;
        $this->pass_prof = $pass_prof;
        $this->date_prof = $date_prof;
        $this->urlPhoto = $urlPhoto;
        $this->couleur = $couleur;
        $this->bConnect = $bConnect;
    }

    function getAllProf()
    {
        $db = dbConnect();
        $prof = $db->prepare('SELECT * FROM `prof`');
        $prof->execute();

        return $prof;
    }
}