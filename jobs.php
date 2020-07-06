<?php

class Job{
    public $title;
    private $description;
    public $visible;
    public $monhs;


    public function __construct($title, $description){
        $this->title = $title;
        $this->setDescription($description);
    }

    public function setDescription($d){
        $this->description = $d;
    }


    public function getDescription(){
        return $this->description;
    }


    public function getDurationString(){
    $years = floor($this->monhs / 12);
    $extraMonths = $this->monhs % 12;
  
    return "$years años $extraMonths meses";
  }
}

$job1 = new Job('PHP Developer', 'Tu diii amigooo');
$job1->visible = true;
$job1->monhs = 23;

$job2 = new Job('WebMaster','Tu diii prroooo');
$job2->visible = true;
$job2->monhs = 44;

$job3 = new Job('Frontend dEv','Tu diii prroooo');
$job3->visible = true;
$job3->monhs = 32;




$jobs = [
    $job1,
    $job2,
    $job3
    // [
    //   'title' => 'PHP Developer',
    //   'description' => 'Tu diii amigooo',
    //   'visible' => true,
    //   'monhs' => 23
    // ],
    // [
    //   'title' => 'Python Dev',
    //   'description' => 'Tu diii amigooo',
    //   'visible' => false,
    //   'monhs' => 34
  
  
    // ],
    // [
    //   'title' => 'Devops',
    //   'description' => 'Tu diii amigooo',
    //   'visible' => true,
    //   'monhs' => 18
  
  
    // ],
    // [
    //   'title' => 'WebMaster',
    //   'description' => 'Lo perron de lo perron',
    //   'visible' => true,
    //   'monhs' => 12
  
  
    // ],
    // [
    //   'title' => 'Frontend Dev',
    //   'description' => 'Lo chido de lomas chido',
    //   'visible' => true,
    //   'monhs' => 10
  
    // ]
    
  ];