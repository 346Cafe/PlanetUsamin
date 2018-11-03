<?php

class Template{

	private static $fileMap = [];

	public static function show(string $name, int $tabCount = 0, bool $doFirst = false){
		if(!file_exists(self::$fileMap[$name])){
			return false;
		}
		$context = file_get_contents(self::$fileMap[$name]);
		if($tabCount > 0){
			$context = str_replace("\n", "\n" . str_repeat("\t", $tabCount), $context);
		}

		if($doFirst){
			$context = str_repeat("\t", $tabCount) . $context;
		}
		print($context . "\n");
		return true;
	}

	public static function register(string $name, string $file){
		if(isset(self::$fileMap[$name])){
			return false;
		}
		self::$fileMap[$name] = $file;
		return true;
	}

	public static function unregister(string $name){
		if(!isset(self::$fileMap[$name])){
			return false;
		}
		unset(self::$fileMap[$name]);
		return true;
	}

	public static function replace(string $name, string $newFile){
		if(isset(self::$fileMap[$name])){
			unset(self::$fileMap[$name]);
		}
		self::$fileMap[$name] = $newFile;
		return true;
	}
}