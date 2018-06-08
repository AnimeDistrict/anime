<?php 
class IP
{
    function get_ip_address() {
     // check for shared internet/ISP IP
     if (!empty($_SERVER['HTTP_CLIENT_IP']) && validate_ip($_SERVER['HTTP_CLIENT_IP'])) {
         return $_SERVER['HTTP_CLIENT_IP'];
     }
     // check for IPs passing through proxies
     if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
         // check if multiple ips exist in var
         if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',') !== false) {
             $iplist = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
             foreach ($iplist as $ip) {
                 if (validate_ip($ip))
                     return $ip;
             }
         } else {
             if (validate_ip($_SERVER['HTTP_X_FORWARDED_FOR']))
                 return $_SERVER['HTTP_X_FORWARDED_FOR'];
         }
     }
     if (!empty($_SERVER['HTTP_X_FORWARDED']) && validate_ip($_SERVER['HTTP_X_FORWARDED']))
         return $_SERVER['HTTP_X_FORWARDED'];
     if (!empty($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']) && validate_ip($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']))
         return $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
     if (!empty($_SERVER['HTTP_FORWARDED_FOR']) && validate_ip($_SERVER['HTTP_FORWARDED_FOR']))
         return $_SERVER['HTTP_FORWARDED_FOR'];
     if (!empty($_SERVER['HTTP_FORWARDED']) && validate_ip($_SERVER['HTTP_FORWARDED']))
         return $_SERVER['HTTP_FORWARDED'];
     // return unreliable ip since all else failed
     return $_SERVER['REMOTE_ADDR'];
    }
    /**
     * Ensures an ip address is both a valid IP and does not fall within
     * a private network range.
     */

    function validate_ip($ip) {
        if (strtolower($ip) === 'unknown')
            return false;
        // generate ipv4 network address
        $ip = ip2long($ip);
        // if the ip is set and not equivalent to 255.255.255.255
        if ($ip !== false && $ip !== -1) {
            // make sure to get unsigned long representation of ip
            // due to discrepancies between 32 and 64 bit OSes and
            // signed numbers (ints default to signed in PHP)
            $ip = sprintf('%u', $ip);
            // do private network range checking
            if ($ip >= 0 && $ip <= 50331647) return false;
            if ($ip >= 167772160 && $ip <= 184549375) return false;
            if ($ip >= 2130706432 && $ip <= 2147483647) return false;
            if ($ip >= 2851995648 && $ip <= 2852061183) return false;
            if ($ip >= 2886729728 && $ip <= 2887778303) return false;
            if ($ip >= 3221225984 && $ip <= 3221226239) return false;
            if ($ip >= 3232235520 && $ip <= 3232301055) return false;
            if ($ip >= 4294967040) return false;
        }
        return true;
    }

    /**Getting IP Address Information like
    *    "Country"
    *    "Country Code"
    *    "State"
    *    "City"
    *    "Address"
    */
    function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
        $output = NULL;
        if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
            $ip = $_SERVER["REMOTE_ADDR"];
            if ($deep_detect) {
                if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
                    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
                    $ip = $_SERVER['HTTP_CLIENT_IP'];
            }
        }
        $purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
        $support    = array("country", "countrycode", "state", "region", "city", "location", "address");
        $continents = array(
            "AF" => "Africa",
            "AN" => "Antarctica",
            "AS" => "Asia",
            "EU" => "Europe",
            "OC" => "Australia (Oceania)",
            "NA" => "North America",
            "SA" => "South America"
        );
        if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
            $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
            if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
                switch ($purpose) {
                    case "location":
                        $output = array(
                            "city"           => @$ipdat->geoplugin_city,
                            "state"          => @$ipdat->geoplugin_regionName,
                            "country"        => @$ipdat->geoplugin_countryName,
                            "country_code"   => @$ipdat->geoplugin_countryCode,
                            "continent"      => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
                            "continent_code" => @$ipdat->geoplugin_continentCode
                        );
                        break;
                    case "address":
                        $address = array($ipdat->geoplugin_countryName);
                        if (@strlen($ipdat->geoplugin_regionName) >= 1)
                            $address[] = $ipdat->geoplugin_regionName;
                        if (@strlen($ipdat->geoplugin_city) >= 1)
                            $address[] = $ipdat->geoplugin_city;
                        $output = implode(", ", array_reverse($address));
                        break;
                    case "city":
                        $output = @$ipdat->geoplugin_city;
                        break;
                    case "state":
                        $output = @$ipdat->geoplugin_regionName;
                        break;
                    case "region":
                        $output = @$ipdat->geoplugin_regionName;
                        break;
                    case "country":
                        $output = @$ipdat->geoplugin_countryName;
                        break;
                    case "countrycode":
                        $output = @$ipdat->geoplugin_countryCode;
                        break;
                }
            }
        }
        return $output;
    }
}

?>