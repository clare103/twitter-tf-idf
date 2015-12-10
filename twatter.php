<?php

require_once("TwitterAPIExchange.php");

$settings = array(
    'oauth_access_token' => "3534968052-Lq0yPpMGMchKfoTewmLplKaph0v6HDv2RwQp4Lk",
    'oauth_access_token_secret' => "aErO1AUNoZu2L7rFWv6JFIOSOwLvFioZvEkSaPp9pj2fa",
    'consumer_key' => "f8jnOlejzZAWjwdPpoZiqnzLk",
    'consumer_secret' => "y2YeeBgwBoH6yFShssgBYs492zy3Mmu4yXk2AkjPEtvw8JabAu"
);


$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$getfield = '?screen_name=realDonaldTrump&count=20';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);

$array = $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();

$tweets = json_decode($array);

$collection = array();

foreach($tweets as $tweet)
{	
	array_push($collection, $tweet->text);
}

$text = $collection[0];
$text1 = $collection[1];
$text2 = $collection[2];
$text3 = $collection[3];
$text4 = $collection[4];
$text5 = $collection[5];
$text6 = $collection[6];
$text7 = $collection[7];
$text8 = $collection[8];
$text9 = $collection[9];
$text10 = $collection[10];
$text11 = $collection[11];
$text12 = $collection[12];
$text13 = $collection[13];
$text14 = $collection[14];
$text15 = $collection[15];
$text16 = $collection[16];
$text17 = $collection[17];
$text18 = $collection[18];
$text19 = $collection[19];

/*
$text = "A very nice unicode woman woman text. Something nice to think about if you're into Unicode.";
$text1 = "A woman woman woman woman has blown herself up and a suspect was shot dead during a police raid on a flat in";
$text2 = "Offers worldwide woman news coverage, analysis, show profiles, broadcast schedules, team biographies, and email news alerts";
$text3 = "A very nice unicode woman woman text. Something nice to think about if you're into Unicode.";
$text4 = "A very nice unicode woman woman text. Something nice to think about if you're into Unicode.";
$text5 = "A very nice unicode woman woman text. Something nice to think about if you're into Unicode.";
$text6 = "A very nice unicode woman woman text. Something nice to think about if you're into Unicode.";
$text7 = "A very nice unicode woman woman text. Something nice to think about if you're into Unicode.";
$text8 = "A very nice unicode woman woman text. Something nice to think about if you're into Unicode.";
$text9 = "A very nice unicode woman woman text. Something nice to think about if you're into Unicode.";
$text10 = "A very nice unicode woman woman text. Something nice to think about if you're into Unicode.";
$text11 = "A very nice unicode woman woman text. Something nice to think about if you're into Unicode.";
$text12 = "A very nice unicode woman woman text. Something nice to think about if you're into Unicode.";
$text13 = "A very nice unicode woman woman text. Something nice to think about if you're into Unicode.";
$text14 = "A very nice unicode woman woman text. Something nice to think about if you're into Unicode.";
$text15 = "A very nice unicode woman woman text. Something nice to think about if you're into Unicode.";
$text16 = "A very nice unicode woman woman text. Something nice to think about if you're into Unicode.";
$text17 = "A very nice unicode woman woman text. Something nice to think about if you're into Unicode.";
$text18 = "A very nice unicode woman woman text. Something nice to think about if you're into Unicode.";
$text19 = "A very nice unicode woman woman text. Something nice to think about if you're into Unicode.";
*/

$text = strtolower($text);
$text1 = strtolower($text1);
$text2 = strtolower($text2);
$text3 = strtolower($text3);
$text4 = strtolower($text4);
$text5 = strtolower($text5);
$text6 = strtolower($text6);
$text7 = strtolower($text7);
$text8 = strtolower($text8);
$text9 = strtolower($text9);
$text10 = strtolower($text10);
$text11 = strtolower($text11);
$text12 = strtolower($text12);
$text13 = strtolower($text13);
$text14 = strtolower($text14);
$text15 = strtolower($text15);
$text16 = strtolower($text16);
$text17 = strtolower($text17);
$text18 = strtolower($text18);
$text19 = strtolower($text19);

$documents = array();

array_push($documents, $text);
array_push($documents, $text1);
array_push($documents, $text2);
array_push($documents, $text3);
array_push($documents, $text4);
array_push($documents, $text5);
array_push($documents, $text6);
array_push($documents, $text7);
array_push($documents, $text8);
array_push($documents, $text9);
array_push($documents, $text10);
array_push($documents, $text11);
array_push($documents, $text12);
array_push($documents, $text13);
array_push($documents, $text14);
array_push($documents, $text15);
array_push($documents, $text16);
array_push($documents, $text17);
array_push($documents, $text18);
array_push($documents, $text19);
 
$docLength = sizeof($documents);

for($i =0; $i < $docLength; $i++)
{
	$documents[$i] = preg_replace('/[^a-z]+/i', ' ', $documents[$i]);
}

echo "<br />";

$array = explode(' ', $documents[0]);
$array1 = explode(' ', $documents[1]);
$array2 = explode(' ', $documents[2]);
$array3 = explode(' ', $documents[3]);
$array4 = explode(' ', $documents[4]);
$array5 = explode(' ', $documents[5]);
$array6 = explode(' ', $documents[6]);
$array7 = explode(' ', $documents[7]);
$array8 = explode(' ', $documents[8]);
$array9 = explode(' ', $documents[9]);
$array10 = explode(' ', $documents[10]);
$array11 = explode(' ', $documents[11]);
$array12 = explode(' ', $documents[12]);
$array13 = explode(' ', $documents[13]);
$array14 = explode(' ', $documents[14]);
$array15 = explode(' ', $documents[15]);
$array16 = explode(' ', $documents[16]);
$array17 = explode(' ', $documents[17]);
$array18 = explode(' ', $documents[18]);
$array19 = explode(' ', $documents[19]);

$sizeOfArray = sizeof($array);
$sizeOfArray1 = sizeof($array1);
$sizeOfArray2 = sizeof($array2);
$sizeOfArray3 = sizeof($array3);
$sizeOfArray4 = sizeof($array4);
$sizeOfArray5 = sizeof($array5);
$sizeOfArray6 = sizeof($array6);
$sizeOfArray7 = sizeof($array7);
$sizeOfArray8 = sizeof($array8);
$sizeOfArray9 = sizeof($array9);
$sizeOfArray10 = sizeof($array10);
$sizeOfArray11 = sizeof($array11);
$sizeOfArray12 = sizeof($array12);
$sizeOfArray13 = sizeof($array13);
$sizeOfArray14 = sizeof($array14);
$sizeOfArray15 = sizeof($array15);
$sizeOfArray16 = sizeof($array16);
$sizeOfArray17 = sizeof($array17);
$sizeOfArray18 = sizeof($array18);
$sizeOfArray19 = sizeof($array19);

//TF SCORE = number of times a word occurs in a single document divided by the total number of words in that document

$tfcounted = array_count_values($array);
$tfcounted1 = array_count_values($array1);
$tfcounted2 = array_count_values($array2);
$tfcounted3 = array_count_values($array3);
$tfcounted4 = array_count_values($array4);
$tfcounted5 = array_count_values($array5);
$tfcounted6 = array_count_values($array6);
$tfcounted7 = array_count_values($array7);
$tfcounted8 = array_count_values($array8);
$tfcounted9 = array_count_values($array9);
$tfcounted10 = array_count_values($array10);
$tfcounted11 = array_count_values($array11);
$tfcounted12 = array_count_values($array12);
$tfcounted13 = array_count_values($array13);
$tfcounted14 = array_count_values($array14);
$tfcounted15 = array_count_values($array15);
$tfcounted16 = array_count_values($array16);
$tfcounted17 = array_count_values($array17);
$tfcounted18 = array_count_values($array18);
$tfcounted19 = array_count_values($array19);

arsort($tfcounted);
arsort($tfcounted1);
arsort($tfcounted2);
arsort($tfcounted3);
arsort($tfcounted4);
arsort($tfcounted5);
arsort($tfcounted6);
arsort($tfcounted7);
arsort($tfcounted8);
arsort($tfcounted9);
arsort($tfcounted10);
arsort($tfcounted11);
arsort($tfcounted12);
arsort($tfcounted13);
arsort($tfcounted14);
arsort($tfcounted15);
arsort($tfcounted16);
arsort($tfcounted17);
arsort($tfcounted18);
arsort($tfcounted19);


//tf
foreach ($tfcounted as $value) {
	$new_tfcounted[] = $value / $sizeOfArray;
}
//tf1
foreach ($tfcounted1 as $value) {
	$new_tfcounted1[] = $value / $sizeOfArray1;
}
//tf2
foreach ($tfcounted2 as $value) {
	$new_tfcounted2[] = $value / $sizeOfArray2;
}

//tf3
foreach ($tfcounted3 as $value) {
	$new_tfcounted3[] = $value / $sizeOfArray3;
}

//tf4
foreach ($tfcounted4 as $value) {
	$new_tfcounted4[] = $value / $sizeOfArray4;
}

//tf5
foreach ($tfcounted5 as $value) {
	$new_tfcounted5[] = $value / $sizeOfArray5;
}

//tf6
foreach ($tfcounted6 as $value) {
	$new_tfcounted6[] = $value / $sizeOfArray6;
}

//tf7
foreach ($tfcounted7 as $value) {
	$new_tfcounted7[] = $value / $sizeOfArray7;
}

//tf8
foreach ($tfcounted8 as $value) {
	$new_tfcounted8[] = $value / $sizeOfArray8;
}

//tf9
foreach ($tfcounted9 as $value) {
	$new_tfcounted9[] = $value / $sizeOfArray9;
}

//tf10
foreach ($tfcounted10 as $value) {
	$new_tfcounted10[] = $value / $sizeOfArray10;
}

//tf11
foreach ($tfcounted11 as $value) {
	$new_tfcounted11[] = $value / $sizeOfArray11;
}

//tf12
foreach ($tfcounted12 as $value) {
	$new_tfcounted12[] = $value / $sizeOfArray12;
}

//tf13
foreach ($tfcounted13 as $value) {
	$new_tfcounted13[] = $value / $sizeOfArray13;
}
//tf14
foreach ($tfcounted14 as $value) {
	$new_tfcounted14[] = $value / $sizeOfArray14;
}
//tf15
foreach ($tfcounted15 as $value) {
	$new_tfcounted15[] = $value / $sizeOfArray15;
}
//tf16
foreach ($tfcounted16 as $value) {
	$new_tfcounted16[] = $value / $sizeOfArray16;
}
//tf17
foreach ($tfcounted17 as $value) {
	$new_tfcounted17[] = $value / $sizeOfArray17;
}
//tf18
foreach ($tfcounted18 as $value) {
	$new_tfcounted18[] = $value / $sizeOfArray18;
}
//tf19
foreach ($tfcounted19 as $value) {
	$new_tfcounted19[] = $value / $sizeOfArray19;
}

echo "<br /><br />TF PROPERLY <br />";

$keys = array_keys($tfcounted);
$keys1 = array_keys($tfcounted1);
$keys2 = array_keys($tfcounted2);
$keys3 = array_keys($tfcounted3);
$keys4 = array_keys($tfcounted4);
$keys5 = array_keys($tfcounted5);
$keys6 = array_keys($tfcounted6);
$keys7 = array_keys($tfcounted7);
$keys8 = array_keys($tfcounted8);
$keys9 = array_keys($tfcounted9);
$keys10 = array_keys($tfcounted10);
$keys11 = array_keys($tfcounted11);
$keys12 = array_keys($tfcounted12);
$keys13 = array_keys($tfcounted13);
$keys14 = array_keys($tfcounted14);
$keys15 = array_keys($tfcounted15);
$keys16 = array_keys($tfcounted16);
$keys17 = array_keys($tfcounted17);
$keys18 = array_keys($tfcounted18);
$keys19 = array_keys($tfcounted19);

$tf_formatted = array_combine($keys, $new_tfcounted);
$tf_formatted1 = array_combine($keys1, $new_tfcounted1);
$tf_formatted2 = array_combine($keys, $new_tfcounted2);
$tf_formatted3 = array_combine($keys, $new_tfcounted3);
$tf_formatted4 = array_combine($keys, $new_tfcounted4);
$tf_formatted5 = array_combine($keys, $new_tfcounted5);
$tf_formatted6 = array_combine($keys, $new_tfcounted6);
$tf_formatted7 = array_combine($keys, $new_tfcounted7);
$tf_formatted8 = array_combine($keys, $new_tfcounted8);
$tf_formatted9 = array_combine($keys, $new_tfcounted9);
$tf_formatted10 = array_combine($keys, $new_tfcounted10);
$tf_formatted11 = array_combine($keys, $new_tfcounted11);
$tf_formatted12 = array_combine($keys, $new_tfcounted12);
$tf_formatted13 = array_combine($keys, $new_tfcounted13);
$tf_formatted14 = array_combine($keys, $new_tfcounted14);
$tf_formatted15 = array_combine($keys, $new_tfcounted15);
$tf_formatted16 = array_combine($keys, $new_tfcounted16);
$tf_formatted17 = array_combine($keys, $new_tfcounted17);
$tf_formatted18 = array_combine($keys, $new_tfcounted18);
$tf_formatted19 = array_combine($keys, $new_tfcounted19);

print_r($tf_formatted);

//IDF SCORE = number of times a word appears over a collection of documents divided by the total number of documents. IE - the word 'woman' appears in 3 documents so it has an IDF-score of 1 because 3/3

echo "<br />";

$appendedarray = array(); //the dictionary of words

for($i=0; $i < $docLength; $i++)
{
	$array1 = explode(' ', $documents[$i]);
	$newarr = array_unique($array1);
	$newsize = sizeof($newarr);
	$finalarr = array_slice($newarr,0,$newsize,false);
	$appendedarray = array_merge($appendedarray, $finalarr);
}

$counted = array_count_values($appendedarray);

arsort($counted);

$new_counted = array();
foreach ($counted as $value) {
	
	$new_counted[] = $value / 20;

}

echo "<br />IDF PROPERLY <br />";

$idf_keys = array_keys($counted);

$idf_formatted = array_combine($idf_keys, $new_counted);

print_r($idf_formatted);

echo "<br /><br/>";
echo "TF-IDF SCORE <br /> <br />";


$tf_keys = array_keys($tf_formatted);
$tf_keys1 = array_keys($tf_formatted1);
$tf_keys2 = array_keys($tf_formatted2);
$tf_keys3 = array_keys($tf_formatted3);
$tf_keys4 = array_keys($tf_formatted4);
$tf_keys5 = array_keys($tf_formatted5);
$tf_keys6 = array_keys($tf_formatted6);
$tf_keys7 = array_keys($tf_formatted7);
$tf_keys8 = array_keys($tf_formatted8);
$tf_keys9 = array_keys($tf_formatted9);
$tf_keys10 = array_keys($tf_formatted10);
$tf_keys11 = array_keys($tf_formatted11);
$tf_keys12 = array_keys($tf_formatted12);
$tf_keys13 = array_keys($tf_formatted13);
$tf_keys14 = array_keys($tf_formatted14);
$tf_keys15 = array_keys($tf_formatted15);
$tf_keys16 = array_keys($tf_formatted16);
$tf_keys17 = array_keys($tf_formatted17);
$tf_keys18 = array_keys($tf_formatted18);
$tf_keys19 = array_keys($tf_formatted19);

$tf_values = array();
$tf_values1 = array();
$tf_values2 = array();
$tf_values3 = array();
$tf_values4 = array();
$tf_values5 = array();
$tf_values6 = array();
$tf_values7 = array();
$tf_values8 = array();
$tf_values9 = array();
$tf_values10 = array();
$tf_values11 = array();
$tf_values12 = array();
$tf_values13 = array();
$tf_values14 = array();
$tf_values15 = array();
$tf_values16 = array();
$tf_values17 = array();
$tf_values18 = array();
$tf_values19 = array();

foreach ($tf_formatted as $key => $value) {
	$score = $value * $idf_formatted[$key];
    echo "Key: $key; Value:".$score."<br />\n";
	array_push($tf_values,$score);
}

echo "<br/> ------------------------------ <br />";

foreach ($tf_formatted1 as $key => $value) {
	$score = $value * $idf_formatted[$key];
    echo "Key: $key; Value:".$score."<br />\n";
	array_push($tf_values1,$score);
}
echo "<br/> ------------------------------ <br />";

foreach ($tf_formatted2 as $key => $value) {
	$score = $value * $idf_formatted[$key];
    echo "Key: $key; Value:".$score."<br />\n";
	array_push($tf_values2,$score);
}
echo "<br/> ------------------------------ <br />";

foreach ($tf_formatted3 as $key => $value) {
	$score = $value * $idf_formatted[$key];
    echo "Key: $key; Value:".$score."<br />\n";
	array_push($tf_values3,$score);
}
echo "<br/> ------------------------------ <br />";

foreach ($tf_formatted4 as $key => $value) {
	$score = $value * $idf_formatted[$key];
    echo "Key: $key; Value:".$score."<br />\n";
	array_push($tf_values4,$score);
}
echo "<br/> ------------------------------ <br />";

foreach ($tf_formatted5 as $key => $value) {
	$score = $value * $idf_formatted[$key];
    echo "Key: $key; Value:".$score."<br />\n";
	array_push($tf_values5,$score);
}
echo "<br/> ------------------------------ <br />";

foreach ($tf_formatted6 as $key => $value) {
	$score = $value * $idf_formatted[$key];
    echo "Key: $key; Value:".$score."<br />\n";
	array_push($tf_values6,$score);
}
echo "<br/> ------------------------------ <br />";

foreach ($tf_formatted7 as $key => $value) {
	$score = $value * $idf_formatted[$key];
    echo "Key: $key; Value:".$score."<br />\n";
	array_push($tf_values7,$score);
}
echo "<br/> ------------------------------ <br />";

foreach ($tf_formatted8 as $key => $value) {
	$score = $value * $idf_formatted[$key];
    echo "Key: $key; Value:".$score."<br />\n";
	array_push($tf_values8,$score);
}
echo "<br/> ------------------------------ <br />";

foreach ($tf_formatted9 as $key => $value) {
	$score = $value * $idf_formatted[$key];
    echo "Key: $key; Value:".$score."<br />\n";
	array_push($tf_values9,$score);
}
echo "<br/> ------------------------------ <br />";

foreach ($tf_formatted10 as $key => $value) {
	$score = $value * $idf_formatted[$key];
    echo "Key: $key; Value:".$score."<br />\n";
	array_push($tf_values10,$score);
}
echo "<br/> ------------------------------ <br />";

foreach ($tf_formatted11 as $key => $value) {
	$score = $value * $idf_formatted[$key];
    echo "Key: $key; Value:".$score."<br />\n";
	array_push($tf_values11,$score);
}
echo "<br/> ------------------------------ <br />";

foreach ($tf_formatted12 as $key => $value) {
	$score = $value * $idf_formatted[$key];
    echo "Key: $key; Value:".$score."<br />\n";
	array_push($tf_values12,$score);
}
echo "<br/> ------------------------------ <br />";

foreach ($tf_formatted13 as $key => $value) {
	$score = $value * $idf_formatted[$key];
    echo "Key: $key; Value:".$score."<br />\n";
	array_push($tf_values13,$score);
}
echo "<br/> ------------------------------ <br />";

foreach ($tf_formatted14 as $key => $value) {
	$score = $value * $idf_formatted[$key];
    echo "Key: $key; Value:".$score."<br />\n";
	array_push($tf_values14,$score);
}
echo "<br/> ------------------------------ <br />";

foreach ($tf_formatted15 as $key => $value) {
	$score = $value * $idf_formatted[$key];
    echo "Key: $key; Value:".$score."<br />\n";
	array_push($tf_values15,$score);
}
echo "<br/> ------------------------------ <br />";

foreach ($tf_formatted16 as $key => $value) {
	$score = $value * $idf_formatted[$key];
    echo "Key: $key; Value:".$score."<br />\n";
	array_push($tf_values16,$score);
}
echo "<br/> ------------------------------ <br />";

foreach ($tf_formatted17 as $key => $value) {
	$score = $value * $idf_formatted[$key];
    echo "Key: $key; Value:".$score."<br />\n";
	array_push($tf_values17,$score);
}
echo "<br/> ------------------------------ <br />";

foreach ($tf_formatted18 as $key => $value) {
	$score = $value * $idf_formatted[$key];
    echo "Key: $key; Value:".$score."<br />\n";
	array_push($tf_values18,$score);
}
echo "<br/> ------------------------------ <br />";

foreach ($tf_formatted19 as $key => $value) {
	$score = $value * $idf_formatted[$key];
    echo "Key: $key; Value:".$score."<br />\n";
	array_push($tf_values19,$score);
}
echo "<br/> ------------------------------ <br />";


$tf_idf = array_combine($tf_keys, $tf_values);
$tf_idf1 = array_combine($tf_keys1, $tf_values1);
$tf_idf2 = array_combine($tf_keys2, $tf_values2);
$tf_idf3 = array_combine($tf_keys3, $tf_values3);
$tf_idf4 = array_combine($tf_keys4, $tf_values4);
$tf_idf5 = array_combine($tf_keys5, $tf_values5);
$tf_idf6 = array_combine($tf_keys6, $tf_values6);
$tf_idf7 = array_combine($tf_keys7, $tf_values7);
$tf_idf8 = array_combine($tf_keys8, $tf_values8);
$tf_idf9 = array_combine($tf_keys9, $tf_values9);
$tf_idf10 = array_combine($tf_keys10, $tf_values10);
$tf_idf11 = array_combine($tf_keys11, $tf_values11);
$tf_idf12 = array_combine($tf_keys12, $tf_values12);
$tf_idf13 = array_combine($tf_keys13, $tf_values13);
$tf_idf14 = array_combine($tf_keys14, $tf_values14);
$tf_idf15 = array_combine($tf_keys15, $tf_values15);
$tf_idf16 = array_combine($tf_keys16, $tf_values16);
$tf_idf17 = array_combine($tf_keys17, $tf_values17);
$tf_idf18 = array_combine($tf_keys18, $tf_values18);
$tf_idf19 = array_combine($tf_keys19, $tf_values19);

arsort($tf_idf);
arsort($tf_idf1);
arsort($tf_idf2);
arsort($tf_idf3);
arsort($tf_idf4);
arsort($tf_idf5);
arsort($tf_idf6);
arsort($tf_idf7);
arsort($tf_idf8);
arsort($tf_idf9);
arsort($tf_idf10);
arsort($tf_idf11);
arsort($tf_idf12);
arsort($tf_idf13);
arsort($tf_idf14);
arsort($tf_idf15);
arsort($tf_idf16);
arsort($tf_idf17);
arsort($tf_idf18);
arsort($tf_idf19);

echo"<br/>";
print_r($tf_idf);

echo"<br/>";
print_r($tf_idf1);

echo"<br/>";
print_r($tf_idf2);

echo"<br/>";
print_r($tf_idf3);

echo"<br/>";
print_r($tf_idf4);

echo"<br/>";
print_r($tf_idf5);

echo"<br/>";
print_r($tf_idf6);

echo"<br/>";
print_r($tf_idf7);

echo"<br/>";
print_r($tf_idf8);

echo"<br/>";
print_r($tf_idf9);

echo"<br/>";
print_r($tf_idf10);

echo"<br/>";
print_r($tf_idf11);

echo"<br/>";
print_r($tf_idf11);

echo"<br/>";
print_r($tf_idf12);

echo"<br/>";
print_r($tf_idf13);

echo"<br/>";
print_r($tf_idf14);

echo"<br/>";
print_r($tf_idf15);

echo"<br/>";
print_r($tf_idf16);

echo"<br/>";
print_r($tf_idf17);

echo"<br/>";
print_r($tf_idf18);

echo"<br/>";
print_r($tf_idf19);

?>


