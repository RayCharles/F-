<?php
class Model {
	
	protected static $instance;
	protected $db;
	
	public function __construct() {
		$this->db = X_Base::getInstance ();
	}
	// public static function getInstance() {
	//
	// if (NULL === self::$instance) {
	// self::$instance = new self ();
	// self::$instance->db = X_Base::getInstance();
	// }
	// return self::$instance;
	// }
	// private function __clone() {
	// }
}