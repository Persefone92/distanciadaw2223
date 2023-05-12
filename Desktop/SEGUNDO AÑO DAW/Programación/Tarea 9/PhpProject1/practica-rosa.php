<?php
/**
*@author laura rosa
*@version 1.0
*/
//Clase base con propiedades y metodos miembro
class Verdura{
	var $comestible;
	var $color;

/**
*
*@param $comestible $color;
*
*/

	function __construct($comestible,$color="verde")
	{
		$this->comestible= $comestible;
		$this->color= $color;
	}
/**
*
*@return this->comestible
*
*/
	function es_comestible()
	{
		return $this->comestible;

	}
/**
*
*@return this->color
*
*/
	function que_color()
	{
		return $this->color;
	}
} //fin de la clase Verdura

//ampliar la clase base
class Espinaca extends Verdura{
	var $cocinada = false;

	function __construct()
	{
		parent::__construct(true,"verde");
	}

	function cocinarla()
	{
		$this->cocinada = true;
	}

	function esta_cocinada()
	{
		return $this->cocinada;
	}
} //fin de la clase Espinaca
/**
*@internal al incluir esta etiqueta solo sera visible  para desarrolladores
*/
?>
