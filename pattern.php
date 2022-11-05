<!DOCTYPE html>
<html>
<head>
	<title>Pattern Matching in PHP</title>
<!--
-- NAME: ONYEMA EMEKA FAMOUS--
-- DURATION: 3hrs--
-- DATE: Friday 4th November, 2022--
-- PROGRAMME: MSc. Computer Science--
-- Question: Write a programe in any language that can take any string of character
   and check if a substring is found. Your programme return the complexity/running time and 
   the index of the string if found. --

   Lecturer: Prof. Adewunmi Sunday
   Course: CSC812 - Advanced Data Structure and Algorithms --
-->
</head>
<body>
<form action="" method="POST">
	<input type="text" name="string" placeholder="Search String"> <br>
	<input type="text" name="sub" placeholder="substring"><br>
	<input type="submit" name="deploy" value="Search">
</form>
<?php 
if(isset($_POST['deploy'])){
$var = strtoupper($_POST['string']);
$search =strtoupper($_POST['sub']);

echo 'STRING: '.$var; echo '<br/>';
echo 'Search String: '.$search; echo '<br/>';



#THIS IS THE CLASS OF CSC812


$count = 0;
$addup = 0;
$count_inner = 0;
$failed = 0;
$location_index_found = 0;
$status='A';

for ($a=0;$a<strlen($var);$a++){
// echo $var[$a].'<br/>';
	$strflag = substr($var,$a,strlen($search));



	
	if(mb_strlen($search)==mb_strlen($strflag)){
		echo ($strflag).'<br/>';
        $location_index_found += 1;

        if($strflag==$search){
        	$addup +=strlen($search);
            $status ='Match found at Index: ';
            break;
	}

for($d=0;$d<strlen($strflag);$d++){

// for items in strflag:
            if($strflag[$d]==$search[$count_inner]){
            	$addup+=1;
                $count_inner+=1;
            }else{
            	$failed += 1;
                $count_inner=0;
                break;
            }
                

    


}

$count += 1;



        }
        

}

echo("The Complexity is: ".($addup+$failed));
if($status=='A'){
	echo '<br/>';
    echo("Match Not Found");
}
else{
	echo '<br/>';
    echo($status.$location_index_found);
}

}
?>
</body>
</html>
