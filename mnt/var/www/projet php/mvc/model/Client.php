<?php

class Client {
private $id,$nom,$prenom,$mot_de_passe,$email;
function __construct($id="",$nom="",$prenom="",$mot_de_passe="",$email="") {
	
    $this->id=$id;
    $this->nom=$nom;
    $this->prenom=$prenom;

    $this->mot_de_passe=$mot_de_passe;
    $this->email=$email;

}
public function getId() {
    return $this->id;
}
public function getNom(){
	return $this->nom;
}

public function getPrenom(){
	return $this->prenom;
}





public function getMotDePasse(){
    return $this->mot_de_passe;
}

public function getEmail(){
    return $this->email;
}
public function setId($id){
    $this->id=$id;
}

public function setNom($nom){
    $this->nom=$nom;
}

public function setPrenom($prenom){
    $this->prenom=$prenom;
}



public function setMotDePasse($mot_de_passe){
    $this->mot_de_passe=$mot_de_passe;
}

public function setEmail($email){
    $this->email=$email;
}

	
}?>