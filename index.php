<?php 

$users =[
    ['name' => 'Federico', 'surname' => 'Bianchi', 'gender' => 'M'],
    ['name' => 'Fabiana', 'surname' => 'Rossi', 'gender' => 'F'],
    ['name' => 'Yari', 'surname' => 'Verdi', 'gender' => 'NB']
];

for($i = 0; $i < count($users); $i++){
  if($users[$i]['gender'] == 'M'){
      echo 'Welcome back Mr' . ' ' . $users[$i]['name'] . ' ' . $users[$i]['surname'];
  }
  elseif($users[$i]['gender'] == 'F'){
    echo 'Welcome back Mrs' . ' ' . $users[$i]['name'] . ' ' . $users[$i]['surname'];
  }
  else{
    $users[$i]['gender'] == 'NB';
      echo 'Welcome back ' . ' ' . $users[$i]['name'] . ' ' . $users[$i]['surname'];
  }
  };

?>


