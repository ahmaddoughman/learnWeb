<?php 

# example on Strings

$name = "Ahmad";
echo  "$name";
echo "<br>";

echo  "get first letter $name[0] <br>";

echo  "get number of letter ".strlen($name) ;
echo "<br>";

echo  "get last letter ". $name[strlen($name) - 1] ;
echo "<br>";


#how to change the String into array
echo "<pre>";
print_r(str_split($name));
echo "</pre>";


# change letter
$name[0]="M";
echo $name;
echo "<br>";

#how to make first letter Small
echo lcfirst("Elzero Web School");
echo "<br>";

#how to make first letter Capital
echo ucfirst("elzero web school");
echo "<br>";

echo strtolower("Elzero Web School");
echo "<br>";

echo strtoupper("elzero web school");
echo "<br>";

echo ucwords("elzero web school");
echo "<br>";

# repeat the word
echo str_repeat("AHmad ",4);
echo "<br>";

# explode print in array
$str ="Elzero Web School";
echo "<pre>";
print_r(explode(" ",$str));  
echo "</pre>";
echo "<br>";

echo "<pre>";
print_r(explode("W",$str));  
echo "</pre>";

echo "<pre>";
print_r(explode(" ", $str, 2));  
echo "</pre>";

# change the word in random
echo str_shuffle("Elzero");
echo "<br>";

#reverse the word
echo strrev("elzero");
echo "<br>";

# trim remove spaces
echo trim("   Ahmad   Doughman");
echo "<br>";


#
parse_str("name=Ahmad&email=amd@gmail.com&pass=123", $array);
echo "<pre>";
print_r( $array );
echo "</pre>";

echo "Name: " .$array["name"]."<br>";
echo "email: " . $array["email"]."<br>";
echo "pass: " .$array["pass"]."<br>";
echo "<br>";
#


# change the letter 
$translation =["@" => "l"];
echo strtr("E@zero web schoo@", $translation);
echo "<br>";

# replace the letter
echo str_replace(["@","#"], ["l","k"] , "#E@zero # web schoo@@@#",$r);
echo "<br>";
echo "replace count is $r";

# replace by word
echo "<pre>";
print_r(str_replace("one", 1 , ["one","two","one","three","one"]));
echo "</pre>";

#wrap
$word ="welcome to aul university i am ahmad";
echo wordwrap($word, 8 , "<br>");

echo "<br>";



?>