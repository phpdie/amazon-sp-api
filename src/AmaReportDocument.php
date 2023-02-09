<?php

namespace AmazonSpApi;

class AmaReportDocument
{
    public static function parse(string $url, string $key = '', string $iv = '', bool $gzip = false)
    {
        if (empty($key) && empty($iv)) {
            $content = file_get_contents($url);
        } else {
            $content = openssl_decrypt(
                file_get_contents($url),
                'AES-256-CBC',
                base64_decode($key),
                OPENSSL_RAW_DATA,
                base64_decode($iv)
            );
        }
        return $gzip ? gzdecode($content) : $content;
    }

    public static function download(string $url, $filename = 'document.xls', string $key = '', string $iv = '', bool $gzip = false)
    {
        $data = self::parse($url, $key, $iv, $gzip);
        header("Content-Type: application/vnd.ms-excel; charset=utf-8");
        header("Content-Disposition: attachment; filename=$filename");
        header("Pragma: no-cache");
        header("Expires: 0");
        echo $data;
    }
}