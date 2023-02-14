<?php

namespace AmazonSpApi;

class AmaReportDocument
{
    public static function parse(string $url, bool $gzip = false)
    {
        $report_content = file_get_contents($url);
        return $gzip ? gzdecode($report_content) : $report_content;
    }

    public static function download(string $report_content, $filename = 'document.xls', callable $func = null)
    {
        header("Content-Type: application/vnd.ms-excel; charset=utf-8");
        header("Content-Disposition: attachment; filename=$filename");
        header("Pragma: no-cache");
        header("Expires: 0");
        if ($func) {
            $report_content = $func($report_content);
        }
        echo $report_content;
    }
}