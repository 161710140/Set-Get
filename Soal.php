<?php
class Matematika
{
	public $Penjumlahan1,$Penjumlahan2,$pengurangan1,$pengurangan2,$perkalian1,$perkalian2,$pembagian1,$pembagian2;
	public function set_penjumlahan($bilsatu,$bildua){
		$this->Penjumlahan1=$bilsatu;
		$this->Penjumlahan2=$bildua;	
	}
	public function get_penjumlahan(){
		return $this->Penjumlahan1+$this->Penjumlahan2;
	}
	public function set_pengurangan($bilangan1,$bilangan2){
		$this->pengurangan1=$bilangan1;
		$this->pengurangan2=$bilangan2;
	}
	public function get_pengurangan(){
		return $this->pengurangan1-$this->pengurangan2;
	}
	public function set_perkalian($per1,$per2){
		$this->perkalian1=$per1;
		$this->perkalian2=$per2;
	}
	public function get_perkalian(){
		return $this->perkalian1*$this->perkalian2;
	}
	public function set_pembagian($bilangsatu,$bilang2){
		$this->pembagian1=$bilangsatu;
		$this->pembagian2=$bilang2;
	}
	public function get_pembagian(){
		return $this->pembagian1/$this->pembagian2;
	}


}

?>