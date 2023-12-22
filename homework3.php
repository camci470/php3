<pre class="lead" style="font-family: Akrobat">
<?php
error_reporting(E_ALL);
$sayi = $_POST['sayi'];

function num($sayi)
{
    $enyakin1=$sayi + 1;
    $enyakin2=$sayi - 1;
    $message = '';

    if ($sayi == '') {
        $message = "<p style='color: red; font-weight: bold;font-size: 20px'>" . "Sayı Alanı Boş olamaz. Lütfen bir sayı girin" . "</p>";
    } elseif ($sayi % 3 == 0) {
        $message = "<p style='color:green; font-weight: bold;font-size: 20px'>" . "$sayi sayısının 3'e bölümünün sonucu " . $sayi / 3. . "</p>";
    } elseif (($sayi + 1) % 3 == 0) {
        $message = "<p style='color: red; font-weight: bold;font-size: 20px'>" . "$sayi sayısı 3'e Bölünemez. 3'e bölünebilecek en yakın sayı " . "$enyakin1" . "</p>";
    } else{
        $message = "<p style='color: red; font-weight: bold;font-size: 20px'>" . "$sayi sayısı 3'e Bölünemez. 3'e bölünebilecek en yakın sayı " . "$enyakin2" . "</p>";
    }

    echo "<a href='index.php' style='text-decoration: none;font-weight: bold;font-size: 20px'>Anasayfaya Dön</a>";
    return $message;
}


echo num($sayi);

?>

</pre>


<!--if ($_POST['sayi']==""){-->
<!--echo "<p style='color: red'>"."Sayı Alanı Boş Olamaz."."</p>";-->
<!--}-->
<!--elseif ($_POST['sayi']%3==0){-->
<!--echo "<p style='color: green'>"."Girilen sayı 3'e bölünebilir."."</p>";-->
<!--}elseif ($_POST['sayi']%3==1) {-->
<!--echo "<p style='color: red'>" . "Girilen sayı 3'e bölünemez." . "</p>";-->
<!--}else{-->
<!--echo "<p style='color: red'>"."Tanımsız Değer."."</p>";-->
<!--}-->
