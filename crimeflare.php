<?php @ini_set('display_errors', 0);

if(!empty($_GET['url'])){
     $url = urldecode($_GET['url']); 
    }
    elseif(!empty($argv[1])){ 
        $url = $argv[1]; 
    }else{
         die("
       __     
    __(  )_   CloudFlare Bypass Hostname
 __(       )_   Author: @zidansec
(____________)  Site  : https://go.zidansec.me

-------------------------------[ Notes ]---------------------------------------

This tool can help you to see the real IP behind CloudFlare protected websites.

 - How do I run it?
 - Command: php crimeplare.php exemple.com
 
         \n"); 
        }

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://api.xploit.my.id/v1/crimeflare.php?url=".htmlspecialchars(addslashes($url)).""); 
curl_setopt($ch, CURLOPT_POST, 1); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
$exec = curl_exec($ch);
curl_close ($ch);

$alert = "
       __     
    __(  )_   CloudFlare Bypass Hostname
 __(       )_   Author: @zidansec
(____________)  Site  : https://go.zidansec.me

-------------------------------[ ALERT ]---------------------------------------
";

$logo = "
    >=>                                        >=======>  >=>                              
 >=>   >=>          >>                         >=>        >=>                              
>=>        >> >==>     >===>>=>>==>    >==>    >=>        >=>    >=> >=>  >> >==>   >==>   
>=>         >=>    >=>  >=>  >>  >=> >>   >=>  >=====>    >=>  >=>   >=>   >=>    >>   >=> 
>=>         >=>    >=>  >=>  >>  >=> >>===>>=> >=>        >=> >=>    >=>   >=>    >>===>>=>
 >=>   >=>  >=>    >=>  >=>  >>  >=> >>        >=>        >=>  >=>   >=>   >=>    >>       
   >===>   >==>    >=> >==>  >>  >=>  >====>   >=>       >==>   >==>>>==> >==>     >====>
   ";

if(!empty($exec)) {
    $cloudflare = gethostbyname(htmlspecialchars(addslashes($url)));
    preg_match('/(\d*\.\d*\.\d*\.\d*)/', $exec, $ip);
    if(empty($ip[1])){
        exit("$alert
    - Tidak dapat mendeteksi alamat IP dari (".htmlspecialchars(addslashes($url)).")
        \n"); 
    }
    $get = json_decode(file_get_contents("http://ipinfo.io/$ip[1]/json"));
    print_r ("$logo
        Website Target : $url
        CloudFlare IP  : $cloudflare
        --------------------------------------------------------------------------------
        Real IP        : $get->ip
        Hostname       : $get->hostname
        Organization   : $get->org
        City           : $get->city
        Country        : $get->country
        Postal Code    : $get->postal
        Location       : $get->loc
        Time Zone      : $get->timezone
        \n");
    } else {
        echo "$alert
    - Sepertinya ada masalah pada jaringan anda!\n
        \n";
    }
    
?>
