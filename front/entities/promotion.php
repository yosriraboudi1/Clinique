<?php

class Produit {
	private $id;
	private $nomproduit;
	private $prix;
	private $qt;
	private $categorie ;
	private $image ;
	private $idcat ;
	private $description ;


function __construct($id,$nomproduit,$prix,$qt,$categorie,$image,$idcat,$description){
		
		$this->id=$id ;
		$this->nomproduit=$nomproduit ;
		$this->prix=$prix ;
		$this->qt=$qt;
		$this->categorie=$categorie ;
	$this->image=$image ;
		$this->idcat=$idcat ;
		$this->description=$description ;
	
	}
	
	public function getid() {
	return $this->id ; }
	public function getnomproduit() {
	return $this->nomproduit ; }
	public function getprix() {
	return $this->prix ; }
	public function getqt() {
	return $this->qt ; }
	public function getcategorie() {
	return $this->categorie ;}
	
	public function getimage() {
	return $this->image ;}
	public function getidcat() {
	return $this->idcat ;}
	public function getdescription() {
	return $this->description ;}
	


	public function setid($id) {
	return $this->id=$id ;}
	public function setnomproduit($nomproduit) {
	return $this->nomproduit=$nomproduit ;} 
	public function setprix($prix) {
	return $this->prix=$prix ;}
	public function setqt($qt) {
	return $this->qt=$qt;}
	public function setcategorie($categorie) {
	return $this->categorie=$categorie ; } 

	public function setimage($image) {
	return $this->image=$image ;}
	public function setidcat($idcat) {
	return $this->idcat=$idcat  ;}
	public function setdescription($description) {
	return $this->description=$description ;}
	

}
?>