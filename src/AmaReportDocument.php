<?php

namespace AmazonSpApi;

class AmaReportDocument
{
    public function parse(string $url, bool $gzip = false): string
    {
        $reportContent = file_get_contents($url);
        return $gzip ? gzdecode($reportContent) : $reportContent;
    }

    public function download(string $reportContent, $filename = 'document.xls', callable $func = null): void
    {
        header("Content-Type: application/vnd.ms-excel; charset=utf-8");
        header("Content-Disposition: attachment; filename=$filename");
        header("Pragma: no-cache");
        header("Expires: 0");
        if ($func) {
            $reportContent = $func($reportContent);
        }
        echo $reportContent;
    }

    public function toArray($result, $clearNullLine = true, $nl = '换行符', $tab = '制表符')
    {
        $temp = str_replace(array("\r", "\n"), $nl, $result);
        $temp = rtrim($temp, $nl);
        $temp = str_replace(array("\t"), $tab, $temp);
        $t = [];
        $arr = explode($nl, $temp);
        $keyArr = [];
        foreach ($arr as $k => $r) {
            if ($k === 0) {
                $keyArr = explode($tab, $r);
            } else {
                if ($clearNullLine && empty($r)) continue;
                $value_arr = explode($tab, $r);
                $l_key = count($keyArr);//键的个数
                $l_value = count($value_arr);//值的个数
                if ($l_key < $l_value) {
                    $value_arr = array_slice($value_arr, 0, $l_key);
                } else if ($l_key > $l_value) {
                    $value_arr = array_pad($value_arr, $l_key, '');
                }
                $t[] = array_combine($keyArr, $value_arr);
            }
        }
        return $t;
    }
}