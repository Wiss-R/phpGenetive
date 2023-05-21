<?php

require realpath('vendor\autoload.php');
require realpath('NameCaseLib\Library\NCLNameCaseRu.php');
require realpath('petrovich-php\Petrovich.php');


mb_internal_encoding('UTF-8');


function getGenitiveMorphos($name){
    $gender = morphos\Russian\detectGender($name);
    $cases  = morphos\Russian\inflectName($name, null, $gender);
    return $cases['genitive'];
}

function getGenitiveNameCaseLib($name){
    $nc = new NCLNameCaseRu();
    return $nc->q(mb_convert_case($name,MB_CASE_TITLE, "UTF-8"), NCL::$RODITLN);
}

function getGenitivePetrovich($name){
    $name= mb_convert_case($name,MB_CASE_TITLE, "UTF-8");
    $name = explode(' ', $name);

    $lastname = $name[0];
    $firstname = $name[1];
    $middlename = $name[2];
        
    $petrovich = new Petrovich(Petrovich::GENDER_MALE);
    $gen = $petrovich->detectGender($middlename);
    $petrovich = new Petrovich($gen);
    
    return $petrovich->lastname($lastname, Petrovich::CASE_GENITIVE).' '.$petrovich->firstname($firstname, Petrovich::CASE_GENITIVE).' '.$petrovich->middlename($middlename, Petrovich::CASE_GENITIVE);
}

function getGenitiveMix($name){
    $fio = explode(' ', $name);
    if(mb_strtoupper(substr($fio[0],-4))=='ЕЦ' ){
        return getGenitiveNameCaseLib($name);
    }

    if(mb_strtoupper(substr($fio[0],-4))=='ЫЙ' ){
        return getGenitiveNameCaseLib($name);
    }
    
    if(mb_strtoupper(substr($fio[0],-6))=='АВА' ){
        return getGenitiveNameCaseLib($name);
    }

    if(mb_strtoupper(substr($fio[0],-4))=='УЙ' ){
        return getGenitivePetrovich($name);
    }

    if(mb_strtoupper(substr($fio[0],-4))=='ИЙ' ){
        return getGenitivePetrovich($name);
    }
    return getGenitiveMorphos($name);
}


// function getGenitiveMix($name){
//     $fio = explode(' ', $name);
//     if(mb_strtoupper(substr($fio[0],-4))=='ЕЦ' ){
//         return getGenitiveNameCaseLib($name);
//     }

//     if(mb_strtoupper(substr($fio[0],-4))=='ЫЙ' ){
//         return getGenitiveNameCaseLib($name);
//     }
    
//     return getGenitivePetrovich($name);
// }

$file = fopen('tst.csv', 'r');
$data = array();

while (($line = fgetcsv($file, 0, ';')) !== false) {
    $data[] = $line;
}

fclose($file);

$ErrMorphos=0;
$ErrNameCaseLib=0;
$ErrPetrovich=0;
$ErrMix=0;


foreach ($data as  $key => $value) {
    $data[$key]['fio']=$value[0];
    $data[$key]['genitiveRight']=$value[1];
    $data[$key]['genitiveMorphos'] = getGenitiveMorphos($value[0]);
    $data[$key]['genitiveNameCaseLib'] = getGenitiveNameCaseLib($value[0]);
    $data[$key]['genitivePetrovich'] = getGenitivePetrovich($value[0]);
    $data[$key]['genitiveMix'] = getGenitiveMix($value[0]);

    unset($data[$key][0]);
    unset($data[$key][1]);

    if (mb_strtoupper($data[$key]['genitiveNameCaseLib'])==mb_strtoupper($data[$key]['genitiveRight']) and mb_strtoupper($data[$key]['genitiveMorphos'])==mb_strtoupper($data[$key]['genitiveRight']) and mb_strtoupper($data[$key]['genitivePetrovich'])==mb_strtoupper($data[$key]['genitiveRight'])){
        unset($data[$key]);
    }  
    else{
        if(mb_strtoupper($data[$key]['genitiveNameCaseLib'])!=mb_strtoupper($data[$key]['genitiveRight'])){
            $data[$key]['genitiveNameCaseLib'] = "ОШИБКА: ".$data[$key]['genitiveNameCaseLib'];
            ++$ErrNameCaseLib;
        }
        if(mb_strtoupper($data[$key]['genitiveMorphos'])!=mb_strtoupper($data[$key]['genitiveRight'])){
            $data[$key]['genitiveMorphos'] = "ОШИБКА: ".$data[$key]['genitiveMorphos'];
            ++$ErrMorphos;
        }
        if(mb_strtoupper($data[$key]['genitivePetrovich'])!=mb_strtoupper($data[$key]['genitiveRight'])){
            $data[$key]['genitivePetrovich'] = "ОШИБКА: ".$data[$key]['genitivePetrovich'];
            ++$ErrPetrovich;
        }

        if (mb_strtoupper($data[$key]['genitiveMix'])!=mb_strtoupper($data[$key]['genitiveRight'])){
            $data[$key]['genitiveMix'] = "ОШИБКА: ".$data[$key]['genitiveMix'];
            ++$ErrMix;
        }
    }
}

function generateTable($data) {
    // Проверка, что массив не пустой
    if (empty($data)) {
        return "Массив данных пуст.";
    }
    
    // Формирование заголовков таблицы
    $table = "<table>";
    $table .= "<thead><tr>";
    $table .= "<th>ФИО</th>";
    $table .= "<th>Родительный падеж (правильный)</th>";
    $table .= "<th>Родительный падеж (Morphos)</th>";
    $table .= "<th>Родительный падеж (NameCaseLib)</th>";
    $table .= "<th>Родительный падеж (Petrovich)</th>";
    $table .= "<th>Родительный падеж (Mix)</th>";
    $table .= "</tr></thead>";
    
    // Формирование строк таблицы с данными
    $table .= "<tbody>";
    foreach ($data as $item) {
        $table .= "<tr>";
        $table .= "<td>{$item['fio']}</td>";
        $table .= "<td>{$item['genitiveRight']}</td>";
        $table .= "<td>{$item['genitiveMorphos']}</td>";
        $table .= "<td>{$item['genitiveNameCaseLib']}</td>";
        $table .= "<td>{$item['genitivePetrovich']}</td>";
        $table .= "<td>{$item['genitiveMix']}</td>";
        $table .= "</tr>";
    }
    $table .= "</tbody>";
    
    $table .= "</table>";
    
    return $table;
}

print_r('ErrMorphos '.$ErrMorphos);
echo '<br/>';
print_r('ErrNameCaseLib '.$ErrNameCaseLib);
echo '<br/>';
print_r('ErrPetrovich '.$ErrPetrovich);
echo '<br/>';
print_r('ErrMix '.$ErrMix);
echo '<br/>';
echo generateTable($data);

?>