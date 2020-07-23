<?php

class Job {
  private $title;
  public $description;
  public $visible;
  public $months;

  public function setTitle($title){
    $this->title = $title;
  }

  public function getTitle() {
    return $this->title;
  }
}

$job1 = new Job();
$job1->setTitle('PHP Developer');
$job1->description = 'esto es una descripcion';
$job1->visible = true;
$job1->months = 5;

$job2 = new Job();
$job2->setTitle(WebMaster);
$job2->description = 'lo perron de lo perron';
$job2->visible = true;
$job2->months = 7;



$jobs = [
    $job1,
    $job2,
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

  function getDuration($months){
    $years = floor($months / 12);
    $extraMonths = $months % 12;
    return "$years años $extraMonths meses";
  }
  
  function printJob($job){
    if($job->visible == false){
      return;
    }


    echo  '<li class="work-position">';
    echo  '<h5>' . $job->getTitle() . '</h5>';
    echo  '<p>' . $job->description . '</p>';
    echo  '<p>' . getDuration($job->months) . '</p>';
  
    echo  '<strong>Achievements:</strong>
      <ul>
        <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
        <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
        <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
      </ul>
    </li>
    '; 
  }