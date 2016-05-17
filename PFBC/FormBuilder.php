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
use PFBC\Element\Date;
use PFBC\Element\DateTime;
use PFBC\Element\DateTimeLocal;
use PFBC\Element\Email;
use PFBC\Element\File;
use PFBC\Element\Hidden;
use PFBC\Element\HTML;
use PFBC\Element\jQueryUIDate;
use PFBC\Element\Month;
use PFBC\Element\Number;
use PFBC\Element\Password;
use PFBC\Element\Phone;
use PFBC\Element\Radio;
use PFBC\Element\Range;
use PFBC\Element\Search;
use PFBC\Element\Select;
use PFBC\Element\Sort;
use PFBC\Element\State;
use PFBC\Element\Textarea;
use PFBC\Element\Textbox;
use PFBC\Element\Time;
use PFBC\Element\TinyMCE;
use PFBC\Element\Url;
use PFBC\Element\Week;
use PFBC\Element\YesNo;
use PFBC\Form;

class FormBuilder extends Form
{
    public function __construct($id)
    {
        parent::__construct($id);
    }

    public function button($label = 'submit', $type = '', $properties = [])
    {
        return $this->addElement(new  Button($label, $type, $properties));
    }

    public function captcha($label = '', $properties = [])
    {
        return $this->addElement(new  Captcha($label, $properties));
    }

    public function checkbox($label, $name, $options = [], $properties = [])
    {
        return $this->addElement(new  Checkbox($label, $name, $options, $properties));
    }

    public function checksort($label, $name, $options = [], $properties = [])
    {
        return $this->addElement(new  Checksort($label, $name, $options, $properties));
    }

    public function ckEditor($label, $name, $properties = [])
    {
        return $this->addElement(new  CKEditor($label, $name, $properties));
    }

    public function color($label, $name, $properties = [])
    {
        return $this->addElement(new  Color($label, $name, $properties));
    }

    public function country($label, $name, $properties = [])
    {
        return $this->addElement(new  Country($label, $name, $properties));
    }

    public function date($label, $name, $properties = [])
    {
        return $this->addElement(new  Date($label, $name, $properties));
    }

    public function dateTime($label, $name, $properties = [])
    {
        return $this->addElement(new  DateTime($label, $name, $properties));
    }

    public function dateTimeLocal($label, $name, $properties = [])
    {
        return $this->addElement(new  DateTimeLocal($label, $name, $properties));
    }

    public function email($label, $name, $properties = [])
    {
        return $this->addElement(new  Email($label, $name, $properties));
    }

    public function file($label, $name, $properties = [])
    {
        return $this->addElement(new  File($label, $name, $properties));
    }

    public function hidden($name, $value, $properties = [])
    {
        return $this->addElement(new  Hidden($name, $value, $properties));
    }

    public function html($html)
    {
        return $this->addElement(new  HTML($html));
    }

    public function jQueryUIDate($label, $name, $properties = [])
    {
        return $this->addElement(new  jQueryUIDate($label, $name, $properties));
    }

    public function month($label, $name, $properties = [])
    {
        return $this->addElement(new  Month($label, $name, $properties));
    }

    public function number($label, $name, $properties = [])
    {
        return $this->addElement(new  Number($label, $name, $properties));
    }

    public function password($label, $name, $properties = [])
    {
        return $this->addElement(new  Password($label, $name, $properties));
    }

    public function phone($label, $name, $properties = [])
    {
        return $this->addElement(new  Phone($label, $name, $properties));
    }

    public function radio($label, $name, $properties = [])
    {
        return $this->addElement(new  Radio($label, $name, $properties));
    }

    public function range($label, $name, $properties = [])
    {
        return $this->addElement(new  Range($label, $name, $properties));
    }

    public function search($label, $name, $properties = [])
    {
        return $this->addElement(new  Search($label, $name, $properties));
    }

    public function select($label, $name, $properties = [])
    {
        return $this->addElement(new  Select($label, $name, $properties));
    }

    public function sort($label, $name, $properties = [])
    {
        return $this->addElement(new  Sort($label, $name, $properties));
    }

    public function state($label, $name, $properties = [])
    {
        return $this->addElement(new  State($label, $name, $properties));
    }

    public function textarea($label, $name, $properties = [])
    {
        return $this->addElement(new  Textarea($label, $name, $properties));
    }

    public function textbox($label, $name, $properties = [])
    {
        return $this->addElement(new  Textbox($label, $name, $properties));
    }

    public function time($label, $name, $properties = [])
    {
        return $this->addElement(new  Time($label, $name, $properties));
    }

    public function tinyMCE($label, $name, $properties = [])
    {
        return $this->addElement(new  TinyMCE($label, $name, $properties));
    }

    public function url($label, $name, $properties = [])
    {
        return $this->addElement(new  Url($label, $name, $properties));
    }

    public function week($label, $name, $properties = [])
    {
        return $this->addElement(new  Week($label, $name, $properties));
    }

    public function yesNo($label, $name, $properties = [])
    {
        return $this->addElement(new  YesNo($label, $name, $properties));
    }


}
