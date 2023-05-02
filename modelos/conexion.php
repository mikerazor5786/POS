<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=u830864771_posdemo",
			            "u830864771_mike",
			            "Mikerazor5786");

		$link->exec("set names utf8");

		return $link;

	}

}