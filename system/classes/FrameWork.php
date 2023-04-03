<?php
class FrameWork {
	public function view($viewName)
	{
		if (file_exists("../application/view/$viewName.php")) {
			require_once "../application/view/$viewName.php";
		}
	}

	public function model($modelName)
	{
		if (file_exists("../application/model/". ucwords($modelName) . ".php")) {
			require_once "../application/model/". ucwords($modelName) . ".php";
			return new $modelName;
		}
	}

	public function redirect($path)
	{
		header("location:" . "/" . $path);
	}
}
?>
