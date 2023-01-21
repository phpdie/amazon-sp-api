<?php

namespace AmazonSpApi\Api;

use AmazonSpApi\AmaRequest;

class Reports
{
    private AmaRequest $instance;

    public function __construct(AmaRequest $instance)
    {
        $this->instance = $instance;
    }

    public function getReports(array $param)
    {
        $path = '/reports/2021-06-30/reports';
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }

    public function createReport(array $body)
    {
        $path = '/reports/2021-06-30/reports';
        return $this->instance->sendRequest($path, [], $body, 'POST');
    }

    public function getReport(array $param)
    {
        $reportId = $param['reportId'];
        $path = '/reports/2021-06-30/reports/{reportId}';
        $path = str_replace('{reportId}', $reportId, $path);
        return $this->instance->sendRequest($path, [], [], 'GET');
    }

    public function cancelReport(array $param)
    {
        $reportId = $param['reportId'];
        $path = '/reports/2021-06-30/reports/{reportId}';
        $path = str_replace('{reportId}', $reportId, $path);
        return $this->instance->sendRequest($path, [], [], 'DELETE');
    }

    public function getReportDocument(array $param)
    {
        $reportDocumentId = $param['reportDocumentId'];
        $path = '/reports/2021-06-30/documents/{reportDocumentId}';
        $path = str_replace('{reportDocumentId}', $reportDocumentId, $path);
        return $this->instance->sendRequest($path, [], [], 'GET');
    }

    public function getReportSchedules(array $param)
    {
        $path = '/reports/2021-06-30/schedules';
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }

    public function getReportSchedule(array $param)
    {
        $reportScheduleId = $param['reportScheduleId'];
        $path = '/reports/2021-06-30/schedules/{reportScheduleId}';
        $path = str_replace('{reportScheduleId}', $reportScheduleId, $path);
        return $this->instance->sendRequest($path, [], [], 'GET');
    }

    public function createReportSchedule(array $body)
    {
        $path = '/reports/2021-06-30/schedules';
        return $this->instance->sendRequest($path, [], $body, 'POST');
    }

    public function cancelReportSchedule(array $param)
    {
        $reportScheduleId = $param['reportScheduleId'];
        $path = '/reports/2021-06-30/schedules/{reportScheduleId}';
        $path = str_replace('{reportScheduleId}', $reportScheduleId, $path);
        return $this->instance->sendRequest($path, [], [], 'DELETE');
    }
}