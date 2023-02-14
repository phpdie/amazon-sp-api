<?php

namespace AmazonSpApi;

class AmaReportDocument
{
    public static function parse(string $url, bool $gzip = false, string $key = '', string $iv = '')
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

    public static function download(string $data, $filename = 'document.xls', callable $func = null)
    {
        header("Content-Type: application/vnd.ms-excel; charset=utf-8");
        header("Content-Disposition: attachment; filename=$filename");
        header("Pragma: no-cache");
        header("Expires: 0");
        if ($func) {
            $data = $func($data);
        }
        echo $data;
    }
}