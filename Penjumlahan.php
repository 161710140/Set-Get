<?php
class penjumlahan
{
	public $bil1;
	public $bil2;

	public function set_penjumlahan($bilangan1,$bilangan2){
		$this->bil1=$bilangan1;
		$this->bil2=$bilangan2;
	}
	public function get_penjumlahan(){
		return $this->bil1+$this->bil2;
	}
}
?>