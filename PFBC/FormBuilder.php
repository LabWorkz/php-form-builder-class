<?php
/**
 * Created by IntelliJ IDEA.
 * User: Gary
 * Date: 5/16/2016
 * Time: 2:47 AM
 */

namespace PFBC;


use PFBC\Element\Button;
use PFBC\Element\Captcha;
use PFBC\Element\Checkbox;
use PFBC\Element\Checksort;
use PFBC\Element\CKEditor;
use PFBC\Element\Color;
use PFBC\Element\Country;
use PFBC\Element\Select;
use PFBC\Element\Textbox;
use PFBC\Form;

class FormBuilder extends Form
{
    public function __construct($id)
    {
        parent::__construct($id);
    }

    public function button($label = 'submit', $type='', $properties=[]){
        return $this->addElement( new Button($label,$type,$properties));
    }

    public function captcha($label='', $properties=[]){
        return $this->addElement(new Captcha($label,$properties));
    }

    public function checkbox($label,$name, $options=[], $properties=[]){
        return $this->addElement(new Checkbox($label,$name,$options,$properties));
    }

    public function checksort($label, $name, $options=[], $properties=[]){
        return $this->addElement(new Checksort($label,$name,$options,$properties ));
    }

    public function ckEditor($label, $name, $properties=[]){
        return $this->addElement(new CKEditor($label,$name,$properties ));
    }

    public function color($label, $name, $properties=[]){
        return $this->addElement(new Color($label,$name,$properties ));
    }

    public function country($label, $name, $properties=[]){
        return $this->addElement(new Country($label, $name,$properties));
    }



    public function textbox($label, $name, $properties = []){
        return $this->addElement(new Textbox($label, $name,$properties));
    }

    public function select($label, $name, $properties = []){
        return $this->addElement(new Select($label, $name, $properties));
    }
}
