echo "Toplam=".$sonuc;
break;

case "cıkarma" ;
$sonuc=$sayi1-$sayi2;
echo "Fark".$sonuc;
break;

case "carpma";
$sonuc=$sayi1*$sayi2;
echo "Carpım=".$sonuc;
break;

case "bolme";
$sonuc=$sayi1/$sayi2;
echo "Bolum=".$sonuc;
break;
 
default:
echo"Yazdıgınız islem gecersiz;
}
?>
</html>