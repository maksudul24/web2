<?php
$empty1 = [];
$empty2 = array();
$names1 = ['Harry', 'Ron', 'Hermione'];
$names2 = array('Harry', 'Ron', 'Hermione');
$status1 = [
 'name' => 'Harry Potter',
 'status' => 'Alive'
];
$status2 = array(
 'name' => 'Harry Potter',
 'status' => 'Alive'
);

$names1[] = 'Rabat';
$status1['rabat'] = 'Rabat';
$status2['rabat'] = 'Rabat';
echo ("<pre>");
print_r($names1);
print_r($status2);
print_r($status2);

$pos1 = array_search('Rabat',$status1);
echo $pos1;
echo ("<pre>");
$pos2 = array_search('Ron',$names1);
echo $pos2;
unset($names1[$pos2]);
echo ("<pre>");
print_r($names1);
array_values($names1);
echo 'After Index fixing';
print_r($names1);