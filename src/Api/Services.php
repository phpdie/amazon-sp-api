<?php

namespace AmazonSpApi\Api;

use AmazonSpApi\BaseModel;

class Services extends BaseModel
{
    public function getServiceJobByServiceJobId(array $param)
    {
        $serviceJobId = $param['serviceJobId'];
        $path = '/service/v1/serviceJobs/{serviceJobId}';
        $path = str_replace('{serviceJobId}', $serviceJobId, $path);
        return $this->instance->sendRequest($path, [], [], 'GET');
    }

    public function cancelServiceJobByServiceJobId(array $param)
    {
        $serviceJobId = $param['serviceJobId'];
        $path = '/service/v1/serviceJobs/{serviceJobId}/cancellations';
        $path = str_replace('{serviceJobId}', $serviceJobId, $path);
        unset($param['serviceJobId']);
        return $this->instance->sendRequest($path, $param, [], 'PUT');
    }

    public function completeServiceJobByServiceJobId(array $param)
    {
        $serviceJobId = $param['serviceJobId'];
        $path = '/service/v1/serviceJobs/{serviceJobId}/completions';
        $path = str_replace('{serviceJobId}', $serviceJobId, $path);
        return $this->instance->sendRequest($path, [], [], 'PUT');
    }

    public function getServiceJobs(array $param)
    {
        $path = '/service/v1/serviceJobs';
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }

    public function addAppointmentForServiceJobByServiceJobId(array $param, array $body)
    {
        $serviceJobId = $param['serviceJobId'];
        $path = '/service/v1/serviceJobs/{serviceJobId}/appointments';
        $path = str_replace('{serviceJobId}', $serviceJobId, $path);
        return $this->instance->sendRequest($path, [], $body, 'POST');
    }

    public function rescheduleAppointmentForServiceJobByServiceJobId(array $param, array $body)
    {
        $serviceJobId = $param['serviceJobId'];
        $appointmentId = $param['appointmentId'];
        $path = '/service/v1/serviceJobs/{serviceJobId}/appointments/{appointmentId}';
        $path = str_replace(['{serviceJobId}', '{appointmentId}'], [$serviceJobId, $appointmentId], $path);
        return $this->instance->sendRequest($path, [], $body, 'POST');
    }

    public function assignAppointmentResources(array $param, array $body)
    {
        $serviceJobId = $param['serviceJobId'];
        $appointmentId = $param['appointmentId'];
        $path = '/service/v1/serviceJobs/{serviceJobId}/appointments/{appointmentId}/resources';
        $path = str_replace(['{serviceJobId}', '{appointmentId}'], [$serviceJobId, $appointmentId], $path);
        return $this->instance->sendRequest($path, [], $body, 'PUT');
    }

    public function setAppointmentFulfillmentData(array $param, array $body)
    {
        $serviceJobId = $param['serviceJobId'];
        $appointmentId = $param['appointmentId'];
        $path = '/service/v1/serviceJobs/{serviceJobId}/appointments/{appointmentId}/fulfillment';
        $path = str_replace(['{serviceJobId}', '{appointmentId}'], [$serviceJobId, $appointmentId], $path);
        return $this->instance->sendRequest($path, [], $body, 'PUT');
    }

    public function getRangeSlotCapacity(array $param, array $body)
    {
        $resourceId = $param['resourceId'];
        $path = '/service/v1/serviceResources/{resourceId}/capacity/range';
        $path = str_replace('{resourceId}', $resourceId, $path);
        unset($param['resourceId']);
        return $this->instance->sendRequest($path, $param, $body, 'POST');
    }

    public function getFixedSlotCapacity(array $param, array $body)
    {
        $resourceId = $param['resourceId'];
        $path = '/service/v1/serviceResources/{resourceId}/capacity/fixed';
        $path = str_replace('{resourceId}', $resourceId, $path);
        unset($param['resourceId']);
        return $this->instance->sendRequest($path, $param, $body, 'POST');
    }

    public function updateSchedule(array $param, array $body)
    {
        $resourceId = $param['resourceId'];
        $path = '/service/v1/serviceResources/{resourceId}/schedules';
        $path = str_replace('{resourceId}', $resourceId, $path);
        unset($param['resourceId']);
        return $this->instance->sendRequest($path, $param, $body, 'PUT');
    }

    public function createReservation(array $param, array $body)
    {
        $path = '/service/v1/reservation';
        return $this->instance->sendRequest($path, $param, $body, 'POST');
    }

    public function updateReservation(array $param, array $body)
    {
        $reservationId = $param['reservationId'];
        $path = '/service/v1/reservation/{reservationId}';
        $path = str_replace('{reservationId}', $reservationId, $path);
        unset($param['reservationId']);
        return $this->instance->sendRequest($path, $param, $body, 'PUT');
    }

    public function cancelReservation(array $param)
    {
        $reservationId = $param['reservationId'];
        $path = '/service/v1/reservation/{reservationId}';
        $path = str_replace('{reservationId}', $reservationId, $path);
        unset($param['reservationId']);
        return $this->instance->sendRequest($path, $param, [], 'DELETE');
    }

    public function getAppointmmentSlotsByJobId(array $param)
    {
        $serviceJobId = $param['serviceJobId'];
        $path = '/service/v1/serviceJobs/{serviceJobId}/appointmentSlots';
        $path = str_replace('{serviceJobId}', $serviceJobId, $path);
        unset($param['serviceJobId']);
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }

    public function getAppointmentSlots(array $param)
    {
        $path = '/service/v1/appointmentSlots';
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }

    public function createServiceDocumentUploadDestination(array $body)
    {
        $path = '/service/v1/documents';
        return $this->instance->sendRequest($path, [], $body, 'POST');
    }
}