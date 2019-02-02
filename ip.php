<?php
system("apt-get install figlet -y");
echo "
[=======================]
Coder : Fajar Firdaus
FB : Fajar Firdaus
YT : iTech7732
IG : fajar_firdaus_7
[=======================]
";
$file = file_get_contents("https://api.myip.com");
$ex = explode("<br>",$file);
foreach ($ex as $key) {
$js = json_decode($key,true);
print_r($js);

#Dear Tukang Recode :
#[=============Baca Hadist ini=============]
#Lelaki yang mencuri dan wanita yang mencuri,potonglah tangan
#keduanya (sebagai) pembalasan bagi apa yang mereka kerjakan dan
#sebagai siksaan dari Allah.
#Dan Allah Maha Perkasa lagi Maha Bijaksana.
#Maka barangsiapa bertaubat (di antara pencuri-pencuri itu)
#sesudah melakukan kejahatan itu dan memperbaiki diri,
#maka sesungguhnya Allah menerima taubatnya.
#Sesungguhnya Allah Maha Pengampun lagi Maha Penyayang.”

#(QS. Al-Maidah: 38-39)
}
