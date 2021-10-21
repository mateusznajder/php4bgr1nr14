<?php
echo "dzień-miesiąc-rok:".date('d-m-Y').'<br>';
echo "dzień-miesiąc-rok:".date('d-m-y').'<br>';
echo "dzień-miesiąc-rok:".date('d-M-y').'<br>';
echo "dzień-miesiąc-rok:".date('d-F-y').'<br>';

setlocale(LC_ALL, 'polish');
echo strftime('%d %B %Y').'<br>';
echo date('G:i:s').'<br>';
echo date('G:i:S').'<br>';
echo date('H:i:s').'<hr>';

 ?>

 <script>
  setTimeout(function(){
    window.location.reload();
  },1000)
 </script>

<?php
//getdate()
$data=getdate();
//echo $date warning
echo"<pre>";
  print_r($data);
echo"</pre>";

echo $data['wday'],'<br>'; //4
echo $data['yday']; //293
echo date('L'); //0 - rok nie jest przestępny

//mktime()
$today=mktime(0,0,0,date('m'),date('d'),date('y'));
echo $today.'<br>';


//lata od 1 stycznia 1970
$year=$today/(60*60*24*365);
echo (int)$year,'<br>';

//poprzedni rok
$lastyear=mktime(0,0,0,date('m'),date('d'),date('y')-1);
$year=$lastyear/(60*60*24*365);
echo (int)$year,'<br>'

 ?>
