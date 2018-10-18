<?php

if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER) && !empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',') > 0) {
        $addr = explode(",", $_SERVER['HTTP_X_FORWARDED_FOR']);
        return trim($addr[0]);
    } else {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
$ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("http://ip-api.com/json/{$ip}"), true);

//echo"<pre>";
//print_r($details);

$arr_ip2 = array('195.123.219.111','195.123.216.8');
$k = array_rand($arr_ip2);
$v = $arr_ip2[$k];
$message = $v;



$isp1 = "Emirates Telecommunications Corporation";
$isp2 = "Emirates Integrated Telecommunications Company PJS";
$isp3 = "#Gramenn Phone";
$isp4 = "#Banglalink";
$isp5 = "#teletalk";
$isp6 = "Md Abul Kashem t/a Spark Net";


if (!empty($details)) {
    if ($details['status'] == "success") {
        if ($details['isp'] == $isp2) {
            $arr_ip2 = array('195.123.219.168','195.123.216.68','195.123.219.43','195.123.216.86','5.34.180.162','195.123.218.39');
            $k = array_rand($arr_ip2);
            $v = $arr_ip2[$k];
            $message = $v;
        } 
        else if ($details['isp'] == $isp1) {
            $arr_ip1 = array('195.123.219.111','195.123.216.8');
            $k = array_rand($arr_ip1);
            $v = $arr_ip1[$k];
            $message = $v;
        }
        else if ($details['isp'] == $isp3)
        {
            $arr_ip1 = array('195.123.218.39');
            $k = array_rand($arr_ip1);
            $v = $arr_ip1[$k];
            $message = $v;
        }
        else if ($details['isp'] == $isp4)
        {
            $arr_ip1 = array('195.123.218.39');
            $k = array_rand($arr_ip1);
            $v = $arr_ip1[$k];
            $message = $v;
        }
        else if ($details['isp'] == $isp5)
        {
            $arr_ip1 = array('195.123.218.39');
            $k = array_rand($arr_ip1);
            $v = $arr_ip1[$k];
            $message = $v;
        }
        else if ($details['isp'] == $isp6)
        {
            $arr_ip1 = array('195.123.219.111');
            $k = array_rand($arr_ip1);
            $v = $arr_ip1[$k];
            $message = $v;
        }
    }
}

echo $message;