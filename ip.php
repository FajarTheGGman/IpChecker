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

#Copyright© 2019 by Fajar Firdaus
}
