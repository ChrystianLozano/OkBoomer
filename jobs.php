<?php

class Job {
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

  public function getDurationAsString(){
    $years = floor($this->months / 12);
    $extraMonths = $this->months % 12;
    return "$years años $extraMonths meses";
  }
}

$job1 = new Job('PHP Developer', 'esto es una descripcion');
$job1->visible = true;
$job1->months = 5;

$job2 = new Job('WebMaster', 'lo perron de lo perron');
$job2->visible = true;
$job2->months = 7;

$job3 = new Job('', 'lo perron de lo perron');
$job3->visible = true;
$job3->months = 2;



$jobs = [
    $job1,
    $job2,
    $job3,
    // [
    //   'title' => 'PHP Developer',
    //   'description' => 'esto es una descripcion',
    //   'visible' => false,
    //   'months' => 5,
    // ],
    // [
    //   'title' => 'Python Dev',
    //   'description' => 'esto es una descripcion',
    //   'visible' => false,
    //   'months' => 9,
  
  
    // ],[
    //   'title' => 'Devops',
    //   'description' => 'esto es una descripcion',
    //   'visible' => true,
    //   'months' => 15,
  
    // ],[
    //   'title' => 'WebMaster',
    //   'description' => 'esto es una descripcion',
    //   'visible' => true,
    //   'months' => 35,
  
  
    // ],[
    //   'title' => 'Frontend Dev',
    //   'description' => 'esto es una descripcion',
    //   'visible' => true,
    //   'months' => 26,
  
    // ],
  
  ];

 
  
  function printJob($job){
    if($job->visible == false){
      return;
    }


    echo  '<li class="work-position">';
    echo  '<h5>' . $job->getTitle() . '</h5>';
    echo  '<p>' . $job->description . '</p>';
    echo  '<p>' . $job->getDurationAsString() . '</p>';
  
    echo  '<strong>Achievements:</strong>
      <ul>
        <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
        <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
        <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
      </ul>
    </li>
    '; 
  }