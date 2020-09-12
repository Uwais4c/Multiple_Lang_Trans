


<?php
 ini_set('max_execution_time', 120);
 require_once ('vendor/autoload.php');
 use \Statickidz\GoogleTranslate;
 $sourcelanguages = array("en", "es", "de", "ar", "zh", "jw", "ru");
 $targetlanguages = array("es", "de", "ar", "zh", "jw", "ru", "en");
 $text = $_POST["sometext"];
 for ($i = 0; $i < count($targetlanguages); $i++) {
// Changes the source Languages everytime

    $source = $sourcelanguages[$i];
// Changes the Target languague

     $target = $targetlanguages[$i];

     $trans = new GoogleTranslate();
     $result = $trans->translate($source, $target, $text);
//Changes our text to current text
$text = $result;
  
 }

 echo $result;

?>