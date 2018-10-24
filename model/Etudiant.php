<?php
require_once('connectBD.php');

class Etudiant extends connectDB
{

    private $id_etu;
    private $id_promo;
    private $id_grpe;
    private $genre;
    private $nom;
    private $prenom;
    private $email;
    private $login_etu;
    private $pass_etu;
    private $matricule;
    private $date_etu;
    private $urlPhoto;
    private $bConnect;


    public function __construct($id_etu, $id_promo, $id_grpe, $genre, $nom, $prenom, $email, $login_etu, $pass_etu, $matricule, $date_etu, $urlPhoto, $bConnect)
    {
        $this->id_etu = $id_etu;
        $this->id_promo = $id_promo;
        $this->id_grpe = $id_grpe;
        $this->genre = $genre;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->login_etu = $login_etu;
        $this->pass_etu = $pass_etu;
        $this->matricule = $matricule;
        $this->date_etu = $date_etu;
        $this->urlPhoto = $urlPhoto;
        $this->bConnect = $bConnect;
    }


    function getAllEtudiant()
    {
        $db = dbConnect();
        $etudiant = $db->prepare('SELECT * FROM `etudiant`');
        $etudiant->execute();

        return $etudiant;
    }
}