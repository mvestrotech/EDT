<?php

  class Periode extends connectDb{
    private $id_period;
    private $id_promo;
    private $label;
    private $tDeb;
    private $tFin;

    public function __construct($id_period,$id_promo,$label,$tDeb,$tFin)
    {
      $this->id_period = $id_period;
      $this->id_promo = $id_promo;
      $this->label = $label;
      $this->tDeb = $tDeb;
      $this->tFin = $tFon;
    }

    public function getAllPeriode()
    {
      $db = connectDb::dbConnect();
      $periode = $db->prepare('SELECT * FROM `period`');
      $periode->execute();
      return $periode;
    }

    public function getAllPeriodePromo()
    {
      $db = connectDb::dbConnect();
      $periode = $db->prepare('SELECT period.id_period, promotion.id_promo, period.label as "label_period", period.tDeb, period.tFin, promotion.label as "label_promo" FROM `period` INNER JOIN promotion ON promotion.id_promo = period.id_promo');
      $periode->execute();
      return $periode;
    }
  }
?>