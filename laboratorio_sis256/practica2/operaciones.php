<?php

class Operacion{
	private $n;
	private $cadena;
	private $a;
	private $b;
	private $c;
	function __construct($n, $cadena, $a, $b, $c){
		$this->n = $n;
		$this->cadena = $cadena;
		$this->a = $a;
		$this->b = $b;
		$this->c = $c;
	}
	function calcular_fibonacci(){
		$v=array();
		$v[0]=0;
		$v[1]=1;
		for ($i=2;$i<=$this->n;$i++)
		{
 			$v[$i]=$v[$i-1]+$v[$i-2];
 			echo " ".$v[$i-2];
 		}
 		$v[$i]=$v[$i-1]+$v[$i-2];
 		echo " ".$v[$i-2];
		
	}
	function calcular_menor(){
		if($this->a < $this->b && $this->a < $this->c)
			return $this->a;
		else if($this->b < $this->a && $this->b < $this->c)
			return $this->b;
		else
			return $this->c;
	}
	function piramide(){

	}
}