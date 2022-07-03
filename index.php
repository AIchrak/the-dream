<?php 
//Swap button:
if(isset($_POST['swap'])){
    $b1=($_POST['cur1']);
   // $b2=($_POST['cur2']);
    $_POST['cur1']=$_POST['cur2'];
    $_POST['cur2']=$b1;
    //echo $b1;
}
?>
<!DOCTYPE html>
<html lang="eng">
  <head>
    <title>Converter</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
  <body>
  <div class="page">
  <div class="container">  
  <h1>Currency Converter:</h1>
  <div class="form">  
  <form method="post" action="">
    <legend><b>Type the amount you need to convert:</b></legend><br />
    <label for="amount">Amount:</label>
    <input type="number" name="amount"/><br /><br />
    <label for="cur1">From:</label>
    <select name="cur1" id="cur1">
    <?php 
    $countries=array('Select','EUR-Euro','GBP-British Pound', 'KRW- South Korean Won', 'TND-Tunisian Dinars', 'TRY-Turkish Pound', 'USD-American Dollar');
    $ISO=['select','EUR','GBP','KRW','TND','TRY','USD'];
    function array_fill_key($keyArray, $valueArray) {
        if(is_array($keyArray)) {
            foreach($keyArray as $key => $value) {
                $filledArray[$value] = $valueArray[$key];
            }
        }
        return $filledArray;
    }
    $CountriesIso=array_fill_key($ISO, $countries);
    foreach($CountriesIso as $keys => $values){
        echo "<option value='".$keys."'>". $values ."</option>";
    }   
    ?>
    </select>
    <input type="submit" name="swap" class="button" value="Swap" /><br />
    <label for="cur2">To:</label>
    <select name="cur2" id="cur2">
    <?php 
    foreach($CountriesIso as $keys => $values){
        echo "<option value='".$keys."'>". $values ."</option>";
    }  
    ?>
    </select>
    <br /><br />
    <input class="convert" type="submit"  name="submit" value="Convert" />
    
    </form>
    <?php 
    
    
    // switch instead of if:
        
        if(isset($_POST['submit'])){
        $amount = $_POST['amount'];
        $cur1 = $_POST['cur1'];
        $cur2 = $_POST['cur2'];
        switch($cur1){
            case "GBP":
                switch ($cur2){
                case "EUR": echo "<br/>".$amount." "."GBP". " to "."EUR". " : "."<span class='box'>"."€ ".$amount*(1.1585893)."</span>"."<br/>";break;
                case "KRW": echo "<br/>".$amount." "."GBP". " to "."KRW". " : "."<span class='box'>"."KRW ".$amount*(1560.581)."</span>"."<br/>";break;
                case "TND": echo "<br/>".$amount." "."GBP". " to "."TND". " : "."<span class='box'>"."TND ".$amount*(3.7099477)."</span>"."<br/>";break;
                case "TRY": echo "<br/>".$amount." "."GBP". " to "."TRY". " : "."<span class='box'>"."TRY ".$amount*(20.124815)."</span>"."<br/>";break;
                case "USD": echo "<br/>".$amount." "."GBP". " to "."USD". " : "."<span class='box'>"."$ ".$amount*(1.2013132)."</span>"."<br/>";break;
                }
                break;
        
        case "EUR":
            switch ($cur2){
            case "GBP": echo "<br/>".$amount." "."EUR". " to "."GBP". " : "."<span class='box'>"."£ ".$amount*(0.862986)."</span>"."<br/>";break;
            case "KRW": echo "<br/>".$amount." "."EUR". " to "."KRW". " : "."<span class='box'>"."KRW ".$amount*(1355.5735)."</span>"."<br/>";break;
            case "TND": echo "<br/>".$amount." "."EUR". " to "."TND". " : "."<span class='box'>"."TND ".$amount*(3.2290911)."</span>"."<br/>";break;
            case "TRY": echo "<br/>".$amount." "."EUR". " to "."TRY". " : "."<span class='box'>"."TRY ".$amount*(17.508617)."</span>"."<br/>";break;
            case "USD": echo "<br/>".$amount." "."EUR". " to "."USD". " : "."<span class='box'>"."$ ".$amount*(1.0456942)."</span>"."<br/>";break;
            }
            break;
        case "KRW":
            switch ($cur2){
            case "GBP": echo "<br/>".$amount." "."KRW". " to "."GBP". " : "."<span class='box'>"."£ ".$amount*(0.00063634988)."</span>"."<br/>";break;
            case "EUR": echo "<br/>".$amount." "."KRW". " to "."EUR". " : "."<span class='box'>"."€ ".$amount*(0.00073827969)."</span>"."<br/>";break;
            case "TND": echo "<br/>".$amount." "."KRW". " to "."TND". " : "."<span class='box'>"."TND ".$amount*(0.0023758684)."</span>"."<br/>";break;
            case "TRY": echo "<br/>".$amount." "."KRW". " to "."TRY". " : "."<span class='box'>"."TRY ".$amount*(0.012898665)."</span>"."<br/>";break;
            case "USD": echo "<br/>".$amount." "."KRW". " to "."USD". " : "."<span class='box'>"."$ ".$amount*(0.00076988094)."</span>"."<br/>";break;
            }
            break;
        case "TND":
            switch ($cur2){
            case "GBP": echo "<br/>".$amount." "."TND". " to "."GBP". " : "."<span class='box'>"."£ ".$amount*(0.26783886)."</span>"."<br/>";break;
            case "EUR": echo "<br/>".$amount." "."TND". " to "."EUR". " : "."<span class='box'>"."€ ".$amount*(0.31074099)."</span>"."<br/>";break;
            case "KRW": echo "<br/>".$amount." "."TND". " to "."KRW". " : "."<span class='box'>"."KRW ".$amount*(420.89873)."</span>"."<br/>";break;
            case "TRY": echo "<br/>".$amount." "."TND". " to "."TRY". " : "."<span class='box'>"."TRY ".$amount*(5.4290319)."</span>"."<br/>";break;
            case "USD": echo "<br/>".$amount." "."TND". " to "."USD". " : "."<span class='box'>"."$ ".$amount*(0.32404191)."</span>"."<br/>";break;
            }
            break;
        case "TRY":
            switch ($cur2){
            case "GBP": echo "<br/>".$amount." "."TRY". " to "."GBP". " : "."<span class='box'>"."£ ".$amount*(0.049334553)."</span>"."<br/>";break;
            case "EUR": echo "<br/>".$amount." "."TRY". " to "."EUR". " : "."<span class='box'>"."€ ".$amount*(0.057236906)."</span>"."<br/>";break;
            case "KRW": echo "<br/>".$amount." "."TRY". " to "."KRW". " : "."<span class='box'>"."KRW ".$amount*(77.527401)."</span>"."<br/>";break;
            case "TND": echo "<br/>".$amount." "."TRY". " to "."TND". " : "."<span class='box'>"."TND ".$amount*(0.1841949)."</span>"."<br/>";break;
            case "USD": echo "<br/>".$amount." "."TRY". " to "."USD". " : "."<span class='box'>"."$ ".$amount*(0.059686868)."</span>"."<br/>";break;
            }
            break;
        case "USD":
            switch ($cur2){
            case "GBP": echo "<br/>".$amount." "."USD". " to "."GBP". " : "."<span class='box'>"."£ ".$amount*(0.8265397)."</span>"."<br/>";break;
            case "EUR": echo "<br/>".$amount." "."USD". " to "."EUR". " : "."<span class='box'>"."€ ".$amount*(0.95894246)."</span>"."<br/>";break;
            case "KRW": echo "<br/>".$amount." "."USD". " to "."KRW". " : "."<span class='box'>"."KRW ".$amount*(1298.9021)."</span>"."<br/>";break;
            case "TND": echo "<br/>".$amount." "."USD". " to "."TND". " : "."<span class='box'>"."TND ".$amount*(3.0860205)."</span>"."<br/>";break;
            case "TRY": echo "<br/>".$amount." "."USD". " to "."TRY". " : "."<span class='box'>"."TRY ".$amount*(16.754104)."</span>"."<br/>";break;
            }
            break;
            default : $_POST['cur2']=0;
        }
    }        
    
    ?>
    </div>
    </div>
    <div class="image">
        <img src="https://media1.giphy.com/media/fxzFluDMZ47WnKEiKA/giphy.gif?cid=790b76110647761f03f81d1ec5e3e17c48b5e384c2aed1e5&rid=giphy.gif&ct=g" alt="gif d'un soleil">
    </div>
</div>
  </body>
</html>