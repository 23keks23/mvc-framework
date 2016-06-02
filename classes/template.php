<?
// класс для подключения шаблонов и передачи данных в отображение
Class Template {

	private $template;
	private $controller;
	private $layouts;
	private $vars = array();
	
	function __construct($layouts, $controllerName) {
		$this->layouts = $layouts;
		$arr = explode('_', $controllerName);
		$this->controller = strtolower($arr[1]);
	}
	
	// установка переменных, для отображения
	function vars($varname, $value) {
		if (isset($this->vars[$varname])) {
			trigger_error ('Unable to set var `' . $varname . '`. Already set, and overwrite not allowed.', E_USER_NOTICE);
			
			return false;
		}

		$this->vars[$varname] = $value;
		
		return true;
	}
	
	// отображение
	function view($name) {
		$pathLayout = SITE_PATH . 'views' . DS . 'information' . DS . $name . '.tpl';
		//$contentPage = SITE_PATH . 'views' . DS . 'information' . DS . $this->controller . '.php';

		$header = SITE_PATH . 'views' . DS . 'common' . DS . 'header.php';
		$footer = SITE_PATH . 'views' . DS . 'common' . DS . 'footer.php';

		if (!file_exists($pathLayout)) {
			trigger_error ('Layout `' . $this->controller . '` does not exist.', E_USER_NOTICE);
			return false;
		}

		/*if (!file_exists($contentPage)) {
			trigger_error ('Template `' . $name . '` does not exist.', E_USER_NOTICE);
			return false;
		}*/
		
		foreach ($this->vars as $key => $value) {
			$$key = $value;
		}

		include ($pathLayout);           
	}
}