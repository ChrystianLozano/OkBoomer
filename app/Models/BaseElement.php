<?php
class BaseElement {
    private $title;
    public $description;
    public $visible;
    public $months;
  
  
    public function __construct($t, $d) {
      $this->setTitle($t);
      $this->description = $d;
    }
  
  
    public function setTitle($t){
      if($t == ''){
        $this->title = 'N/A';
      }else{
      $this->title = $t;
      }
    }
  
    public function getTitle() {
      return $this->title;
    }
  

  }