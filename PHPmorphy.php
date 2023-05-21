<?php

require realpath('vendor\autoload.php');

$morphy = new cijic\phpMorphy\Morphy('ru');

$word = "БАРДИЖ КОНДРАТ ЛУКИЧ";
$word = mb_strtoupper("Довгий Тарас Алексеевич");
$word = mb_strtoupper("ЛЕВ");
$x= $morphy->castFormByGramInfo($word, null, array('ЕД', 'РД', 'ОД'), false);
$y= $morphy->getGramInfo($word);
print_r($x);
print_r($y);

// function checkGrammers($data, $params){
//     foreach($data['grammems'] as $key => $value){
//         foreach($params as $param){
//             if (mb_strtoupper($value)==mb_strtoupper($param)){
//                 return $value;
//             }
//         }
//     }
// }

// function getCase($data){
//     return checkGrammers($data, ['им','рд','дт','вн','тв','пр','зв','2']);
// }

// function getSex($data){
//     return checkGrammers($data, ['мр','жр','ср','мр-жр']);
// }

// function getPlural($data){
//     return checkGrammers($data, ['ед','мн']);
// }

// function getSemant($data){
//     return checkGrammers($data, ['имя','фам','отч']);
// }

// function getGenitive($qweqeq, $name){
//     try {
//     $morphy = new cijic\phpMorphy\Morphy('ru');
//     $name=mb_strtoupper($name);
//     $fio = explode(' ', $name);
//     $parts = explode(' ', $name);

//     if (count($parts) != 3) {
//         return "Некорректный формат ФИО.";
//     }

//     $noRes=[];

//     foreach($parts as $key => $value){
//             $value=$morphy->getGramInfo($value);
//             if ($value==false){
//                 $noRes[$key]=$fio[$key];
//                 }else{
//                 foreach($value as $key2 => $value2){
//                     foreach($value2 as $key3 => $value3){
//                         $value[$key2][$key3]['Sex']=getSex($value3);
//                         $value[$key2][$key3]['Case']=getCase($value3);
//                         $value[$key2][$key3]['Plural']=getPlural($value3);
//                         $value[$key2][$key3]['Semant']=getSemant($value3);
//                     }
//                 }
//                 $parts[$key]=$value;
//             }
//     }

//     $hasSurname = false;
//     $list=[];
//     if (is_array($parts[2])){
//             foreach($parts[2] as $key =>$part){
//                 foreach($part as $key2 => $value){
//                     if (mb_strtoupper($value['Case'])!=mb_strtoupper("ИМ")){
//                         unset($parts[$key][$key2]);
//                     }else{
//                         if(mb_strtoupper($value['Semant'])==mb_strtoupper("отч")){
//                             $hasSurname=true;
//                         }
//                     }
//                 }
//             }

//         if ($hasSurname){
//             foreach($parts[2] as $key =>$part){
//                 foreach($part as $key2 => $value){
//                     if(mb_strtoupper($value['Semant'])!=mb_strtoupper("отч") or !(mb_strtoupper($value['Sex'])==mb_strtoupper("мр") or mb_strtoupper($value['Sex'])==mb_strtoupper("жр"))){
//                         unset($parts[$key][$key2]);
//                     }else{
//                         $list[mb_strtoupper($value['Sex'])]=mb_strtoupper($value['Sex']);
//                     }
//                 }
//             }
//         }
//     }

//     if (!is_array($parts[2])){
//         $res = array_key_exists(0,$noRes)?$noRes[0]:$morphy->castFormByGramInfo($fio[0], null, array('ЕД', 'РД'), false)[0]['form'];
//         $res = $res.' '.(array_key_exists(1,$noRes)?$noRes[1]:$morphy->castFormByGramInfo($fio[1], null, array('ЕД', 'РД'), false)[0]['form']);
//         $res = $res.' '.$noRes[2];
//         return $res;
//     }

//     if (count($parts[2]) == 0) {
//         $res = array_key_exists(0,$noRes)?$noRes[0]:$morphy->castFormByGramInfo($fio[0], null, array('ЕД', 'РД'), false)[0]['form'];
//         $res = $res.' '.(array_key_exists(1,$noRes)?$noRes[1]:$morphy->castFormByGramInfo($fio[1], null, array('ЕД', 'РД'), false)[0]['form']);
//         $res = $res.' '.($morphy->castFormByGramInfo($fio[2], null, array('ЕД', 'РД'), false)[0]['form']);
//         return $res;
//     }

//     if (count($list) ==1) {
//         // $x = $morphy->castFormByGramInfo($fio[1], null, array('ЕД', 'РД', reset($list)), false);
//         // $y = $morphy->getGramInfo($fio[1]);
//         // $z = array_key_exists(1,$noRes)?$noRes[1]:$morphy->castFormByGramInfo($fio[1], null, array('ЕД', 'РД', reset($list)), false)[0]['form'];
//         $res = array_key_exists(0,$noRes)?$noRes[0]:$morphy->castFormByGramInfo($fio[0], null, array('ЕД', 'РД', reset($list)), false)[0]['form'];
//         $res = $res.' '.(array_key_exists(1,$noRes)?$noRes[1]:$morphy->castFormByGramInfo($fio[1], null, array('ЕД', 'РД', reset($list)), false)[0]['form']);
//         $res = $res.' '.$morphy->castFormByGramInfo($fio[2], null, array('ЕД', 'РД', reset($list)), false)[0]['form'];
//         return $res;
//     }
// }
// catch(Exception $e){
//     echo "err";
// }
// }


// $file = fopen('tst.csv', 'r');
// $data = array();

// while (($line = fgetcsv($file, 0, ';')) !== false) {
//     $data[] = $line;
// }

// fclose($file);

// foreach ($data as  $key => $value) {
//     if ($key==78){
//         echo 1;
//     }


//     try {
//     $data[$key]['fio']=$value[0];
//     $data[$key]['genitiveRight']=$value[1];
//     $data[$key]['genitiveMy'] = getGenitive($key,$value[0]);
//     unset($data[$key][0]);
//     unset($data[$key][1]);
//     if (mb_strtoupper($data[$key]['genitiveRight'])==mb_strtoupper($data[$key]['genitiveMy'])){
//         unset($data[$key]);
//     }
// }
// catch(Exception $e){
//     echo "err";
// }
// }

// print_r($data);

?>


