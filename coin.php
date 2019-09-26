<?php


$baca = "https://ugg.idkota.com/Content/Content/read?member_token=NjIwODgxMDI1MDExNzcxLS18fC0tMzAyYTJmNjMwMmQ3YmJiMTI3NmE0ZDQ5MmZjYzg1Yjg%3D&content_id=&lang=indonesian&device_id=1e00a3a999d48b9d";
//$share = "https://ugg.idkota.com/Content/Content/share?member_token=NjIwODgxMDI1MDExNzcxLS18fC0tMzAyYTJmNjMwMmQ3YmJiMTI3NmE0ZDQ5MmZjYzg1Yjg%3D&content_id=&lang=indonesian&device_id=1e00a3a999d48b9d";
$cok = "member_token=NjIwODgxMDI1MDExNzcxLS18fC0tMzAyYTJmNjMwMmQ3YmJiMTI3NmE0ZDQ5MmZjYzg1Yjg%3D&device_id=1e00a3a999d48b9d";



$headers = array();
$headers[] = "User-Agent : Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.136 Safari/537.36";
$headers[] = "Cookie : __cfduid=d50fd9244dda9904d51c70cfe4fcd204c1568535646;PHPSESSID=bgesnr0qlp4jcn9cic0h08h6qi";
$headers[] = "Cookie : PHPSESSID=bgesnr0qlp4jcn9cic0h08h6qi";


function claim($addpoint, $baca, $cok){
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL, $baca);
   curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($ch, CURLOPT_POST, 1);
   $ua = array();
   $ua[] = "User-Agent : Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.136 Safari/537.36";
   $ua[] = "Cookie : __cfduid=d50fd9244dda9904d51c70cfe4fcd204c1568535646;PHPSESSID=bgesnr0qlp4jcn9cic0h08h6qi";
   $uas[] = "Cookie : PHPSESSID=bgesnr0qlp4jcn9cic0h08h6qi"; 
//curl_setopt($ch, CURLOPT_URL, $index);
   curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
   $data["content_id"] = 1003;
   curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
   //curl_setopt($ch, CURLOPT_COOKIEJAR, "Cookie.txt");
   //curl_setopt($ch, CURLOPT_COOKIEFILE, "Cookie.txt");
   $result = curl_exec($ch);
   $hasil = json_decode($result, true);
   //var_dump($hasil);
   //while(true){$ch
   //}
   echo "Reward : ".$hasil["msg"],"\n";
// Reset(3);
//echo $hasil[0]["user"];
//print_r($hasil);77
//cecho $hasil["member_id";
}
claim($addpoint, $baca, $cok);
//var_dump($hasil);
   while (True){
   claim($addpoint, $baca, $cok);
   sleep(15);
 }

?>
