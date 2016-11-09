<?php 
class Input{
	public static function exists($type = 'post'){
        switch ($type) {
            case 'post':
                return !empty($_POST);
                break;

            case 'get':
                return !empty($_GET);
                break;

            default:
                return false;
                break;
        }
    }

    public static function get($item){
        if (!empty($_POST[$item])) {
            return $_POST[$item];
        }elseif (!empty($_GET[$item])) {
            return $_GET[$item];
        }
        return '';
    }
}