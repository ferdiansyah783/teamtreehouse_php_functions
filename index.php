<?php

//create function hello
function hello(){
    echo "hello,world";
}
hello();//hello,world
echo PHP_EOL;

$current_user="Mike";

function is_mike(){
    global $current_user;
    if($current_user=="Mike"){
        echo "you is mike";
    }else{
        echo "you not mike";
    }
}
is_mike();//you is mike
echo PHP_EOL;

function helloName($name){
    if(is_array($name) && !empty($name)){
        foreach($name as $key){
            echo "hello $key\n";
        }
        }else{
            echo "hello friend";
        }
    }

    helloName(["zanuk","ferdi","huda"]);
    echo PHP_EOL;

function get_info($name,$title=Null){
    if($title){
        echo "$name was arrive,and come as $title";
    }else{
        echo "$name was arrive";
    }
}
get_info("mike","forg");
echo PHP_EOL;
//
function helloWorld($nama){
    return "$nama\nhello world";
}
$data=helloWorld("ferdi");
echo $data;
echo PHP_EOL;
//
function addUp($a,$b){
    return [$a,$b,$a+$b];
}
print_r(addUp(2,4));
echo PHP_EOL;
//
echo PHP_EOL;

function sumArray($data){
    $result=0;
    foreach($data as $key){
        $result+=$key;
    }
    return $result;
}
 
var_dump(sumArray([1,2,3,4]));
//
echo PHP_EOL;

function answer(){
    return "you answer the question";
}

$answer=answer();//save an variable
echo $answer;
echo PHP_EOL;

//callback function
$answer_call='answer';
echo $answer_call()."!!";//call function
echo PHP_EOL;

//anonymus function
$askName="what is your name ?";//menngunakan use
$name="budy";
$ask=function()use($askName,$name)//use(untuk mengakses variable global)
{
    return "ask the question, $askName: my name is $name";
};
echo $ask();

echo PHP_EOL;

function br(){
    echo PHP_EOL;
}

br();
//built-in string function
$magang="magang TOP jos";
echo strlen($magang);//14
br();
echo substr($magang,7);//TOP jos
br();
echo substr($magang,7,6);//TOP jo
br();
echo strpos($magang,"jos");//11(dimulai dari nol)
br();
echo $magang[11];//j
br();

$team=["mike"=>"devoloper","huda"=>"designer","reza"=>"devolopment"];
print_r(array_keys($team));
br();

var_dump(array_key_exists("mike",$team));//untuk mengecek key
if(array_key_exists("mike",$team)){
    echo "found in \$team";
}else{
    echo "not foun in\$team";
}
br();

array_walk($team,function($value,$key){
    echo "$key is a $value\n";
});