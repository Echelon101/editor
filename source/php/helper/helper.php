<?php
class clear_string{
	
	public function getClearedString($input_sting, $how = '-'){
		$search = array("ä", "ö", "ü", "ß", "Ä", "Ö",
				"Ü", "&", "é", "á", "ó",
				" :)", " :D", " :-)", " :P",
				" :O", " ;D", " ;)", " ^^",
				" :|", " :-/", ":)", ":D",
				":-)", ":P", ":O", ";D", ";)",
				"^^", ":|", ":-/", "(", ")", "[", "]",
				"<", ">", "!", "\"", "§", "$", "%", "&",
				"/", "(", ")", "=", "?", "`", "´", "*", "'",
				"_", ":", ";", "²", "³", "{", "}",
				"\\", "~", "#", "+", ".", ",",
				"=", ":", "=)");
		$replace = array("ae", "oe", "ue", "ss", "Ae", "Oe",
				"Ue", "und", "e", "a", "o", "", "",
				"", "", "", "", "", "", "", "", "",
				"", "", "", "", "", "", "", "", "",
				"", "", "", "", "", "", "", "", "",
				"", "", "", "", "", "", "", "", "",
				"", "", "", "", "", "", "", "", "",
				"", "", "", "", "", "", "", "", "", "");
		$input_sting= str_replace($search, $replace, $input_sting);
		$input_sting= strtolower(preg_replace("/[^a-zA-Z0-9]+/", trim($how), $input_sting));
		
		return $input_sting;
	}
}

class redirect{
	public function redirect($location, array $params = null){
		$param_str = null;
		if ($params != null){
			$param_str = "?";
			$i = 0;
			foreach ($params as $key => $param){
				if ($i == 0){
					$param_str .= $key . "=" . $param;
				}else{
					$param_str .= "&" . $key . "=" . $param; 
				}
				$i++;
			}
		}
		header("Location: $location".$param_str);
	}
}
