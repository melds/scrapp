<?php 
class Validate{
    private $_passed    = false;
    private $_errors    = [];
    private $_db        = null;

    public function __construct()
    {
        $this->_db = DB::getInstance();
    }

    public function check($source, $items = [])
    {
        foreach ($items as $item => $rules) {
            foreach ($rules as $rule => $ruleValue) {
                $value = trim($source[$item]);

                $itemName = $rules['name'];

                if ($rule === 'required' && empty($value)) {
                    $this->addError("{$itemName} is required.");
                }else if(!empty($value)){
                    switch ($rule) {
                        case 'min':
                            if (strlen($value) < $ruleValue) {
                                $this->addError("{$itemName} must be a minimun of {$ruleValue} characters.");
                            }
                            break;
                        case 'max':
                            if (strlen($value) > $ruleValue) {
                                $this->addError("{$itemName} must be a maximum of {$ruleValue} characters.");
                            }
                            break;
                        case 'matches':
                            if ($value != $source[$ruleValue]) {
                                $this->addError("{$itemName} must match with {$items[$ruleValue]['name']}.");
                            }
                            break;
                        case 'unique':
                            $check = $this->_db->get($ruleValue,[$item,"=",$value]);
                            if ($check->count()) {
                                $this->addError("{$itemName} already exists.");
                            }
                            break;
                    }
                }
            }
        }

        if (empty($this->_errors)) {
            $this->_passed = true;
        }

        return $this;
    }

    private function addError($error){
        $this->_errors[] = $error;
    }

    public function errors()
    {
        return $this->_errors;
    }

    public function passed()
    {
        return $this->_passed;
    }
}