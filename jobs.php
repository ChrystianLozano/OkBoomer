<?php
$jobs = [
    [
      'title' => 'PHP Developer',
      'description' => 'esto es una descripcion',
      'visible' => false,
      'months' => 5,
    ],
    [
      'title' => 'Python Dev',
      'description' => 'esto es una descripcion',
      'visible' => false,
      'months' => 9,
  
  
    ],[
      'title' => 'Devops',
      'description' => 'esto es una descripcion',
      'visible' => true,
      'months' => 15,
  
    ],[
      'title' => 'WebMaster',
      'description' => 'esto es una descripcion',
      'visible' => true,
      'months' => 35,
  
  
    ],[
      'title' => 'Frontend Dev',
      'description' => 'esto es una descripcion',
      'visible' => true,
      'months' => 26,
  
    ],
  
  ];

  function getDuration($months){
    $years = floor($months / 12);
    $extraMonths = $months % 12;
    return "$years años $extraMonths meses";
  }
  
  function printJob($job){
    echo  '<li class="work-position">';
    echo  '<h5>' . $job['title'] . '</h5>';
    echo  '<p>' . $job['description'] . '</p>';
    echo  '<p>' . getDuration($job['months']) . '</p>';
  
    echo  '<strong>Achievements:</strong>
      <ul>
        <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
        <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
        <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
      </ul>
    </li>
    '; 
  }