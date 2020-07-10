<?php
class DBController{

	protected $db; //поле класса, которые создано для хранения подключения к MySQL
	protected $defaults = [ //ассоциативный массив параметров используемых при настройке подключения к БД
		'host' => 'localhost', //на локальном сервере адрес хоста - localhost
		'user' => 'root', //пользователь в БД (root по умолчанию)
		'pass' => '', //пароль пользователя БД (по умолчанию у root'a не установлен)
		'db' => 'registr', //название вашей БД в phpMyAdmin (MySQL)
		'charset' => 'utf8', //используемая в БД кодировка символом
	];
	const FETCH_MODE = MYSQLI_ASSOC; //константа, которая хранит вид массива, в который попадут данные из результата запроса к MySQL
	public function __construct() { //конструктор класса, вызывается при создании экземпляра класса
		$opt = [];
		$opt = array_merge($this->defaults, $opt); //опции записанные в поле класса defaults записываются в $opt для удобства работы
		$this->db = new mysqli($opt['host'], $opt['user'], $opt['pass'], $opt['db']); //в поле класса $conn записывается подключение к БД и хранится там
		if (!$this->db) exit('Lost DB connection'); //если подключение false, то происходит выход из скрипта с ошибкой
		$this->db->set_charset($opt['charset']); //подключению задаётся определённая нами кодировка для избежания ошибок при работе с данными, которые записываем и получаем из БД
	}

	function runQuery($query) {
		
		$result =  mysqli_query($this->db, $query);
		while($row = mysqli_fetch_assoc($result)){
			$resultset[] = $row;
		}
		if(!empty($resultset)){
			return $resultset;
		}
	}

	function numRows($query) {
	    $result  = mysqli_query($this->db, $query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}

	function insert($query) {
        $insert_id = "";
	    $result  = mysqli_query($this->db, $query);
	    if(!empty($result)) {
	        $insert_id = mysqli_insert_id($this->db);
	    }
	    return $insert_id;
	}

	function execute($query) {
		$result  = mysqli_query($this->db, $query);
		return $result;
	}


}

?>