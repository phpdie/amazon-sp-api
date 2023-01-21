<?php


namespace AmazonSpApi;


class AmaReportDocument
{
    public static function parse($url, $key, $iv, $gzip = false)
    {
        $content = openssl_decrypt(
            file_get_contents($url),
            'AES-256-CBC',
            base64_decode($key),
            OPENSSL_RAW_DATA,
            base64_decode($iv)
        );
        return $gzip ? gzdecode($content) : $content;
    }
}