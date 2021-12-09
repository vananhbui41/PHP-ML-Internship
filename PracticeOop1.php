<?php
class ExerciseString 
{
    public $check1;
    public $check2;

    function checkValidString($s)
    {
        $x = stripos($s,"book");
        $y = stripos($s,"restaurant");
        
        if (is_numeric($x) xor is_numeric($y)){
            return true;
        }
        else {
            return false;
        }
    }

    function readFile ($filename)
    {
        if(!file_exists($filename)) {
            echo "<br>";
            die("File not found.");
        } else {
            $fp = fopen($filename, "r") or die("Unable to open file!");
            $contents = fread($fp, filesize($filename));
            return $contents;
            fclose($fp);
        }        
    }

    function writeFile ($filename,$input)
    {
        $myfile = fopen($filename, "w") or die("Unable to open file!");
        fwrite($myfile, $input);
        fclose($myfile);
    }
}

$object1 = new ExerciseString;

$str1 = $object1->readFile("file1.txt");
$object1->$check1 = $object1->checkValidString($str1);

$str2 = $object1->readFile("file2.txt");
$object1->$check2 = $object1->checkValidString($str2);

if ($check1) {
    $s1 = "check1 là chuỗi \"Hợp lệ\"\n";
}
else $s1 = "check1 là chuỗi \"Không hợp lệ\"\n";

$n = substr_count($str2,".");
if($check2){
    $s2 = "check2 là chuỗi \"Hợp lệ\". Chuỗi có $n câu.";
}
else {
    $s2 = "check2 là chuỗi \"Không hợp lệ\". Chuỗi có $n câu.";
}

$object1->writeFile("result_file.txt",$s1.$s2);
?>