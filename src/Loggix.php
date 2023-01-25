<?php

namespace Italisecdir\LoggixClient;

use GuzzleHttp\Client;

class Loggix
{
    public static function debug($message){
        self::record($message, 'app', 'dbg');
    }
    public static function info($message){
        self::record($message, 'app', 'inf');
    }
    public static function notice($message){
        self::record($message, 'app', 'not');
    }
    public static function warning($message){
        self::record($message, 'app', 'wrn');
    }
    public static function error($message){
        self::record($message, 'app', 'err');
    }
    public static function critical($message){
        self::record($message, 'app', 'cri');
    }
    public static function alert($message){
        self::record($message, 'app', 'ale');
    }
    public static function record($message, $entryType=null, $severityType=null, $code=null, $module=null, $file=null, $line=null, $position=null){
        if(env('LOGGIX_ACTIVE') != true){
            return;
        }
        $token = env('LOGGIX_TOKEN');
        if($token == null){
            die("Loggix token entry LOGGIX_TOKEN is missing");
        }
        $server = env('LOGGIX_SERVER');
        if($server == null){
            die("Loggix server entry LOGGIX_SERVER is missing");
        }
        $version = env('LOGGIX_VERSION', 'v1');
        $payload = self::makePayload($entryType, $severityType, $code, $module, $file, $line, $position, $message);

        $client = new Client();
        $httpResponse = $client->post($server."/api/$version/log", ['json'=>$payload]);
        $body = $httpResponse->getBody();
        return $body;
    }
    private static function makePayload($entryType, $severityType, $code, $module, $file, $line, $position, $message){
        if($entryType == null){
            $entryType = 'app';
        }
        if($severityType == null){
            $severityType = 'err';
        }
        $payload = (object) [
            'entry_type' => $entryType,
            'severity_type' => $severityType,
            'code' => $code,
            'module' => $module,
            'file' => $file,
            'line' => $line,
            'position' => $position,
            'message' => $message,
        ];
        return $payload;
    }
}
