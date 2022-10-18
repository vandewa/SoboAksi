<?php

namespace App\Utilities;

use Illuminate\Http\JsonResponse;

class Response
{
    private $type = null;
    private $info = null;
    private $data = [];
    private $message = null;
    private $detail = null;
    private $error = null;
    private $availableType = ['validation','warning','error','success','successWithCount','paginate'];
    private $link = null;

    public function type($type)
    {
        $this->type = $type;
        return $this;
    }

    public function info($info)
    {
        $this->info = $info;
        return $this;
    }

    public function data($data)
    {
        $this->data = $data;
        return $this;
    }
    public function link($data)
    {
        $this->link = $data;
        return $this;
    }

    public function message($message)
    {
        $this->message = $message;
        return $this;
    }

    public function detail($detail)
    {
        $this->detail = $detail;
        return $this;
    }

    public function error($error)
    {
        $this->error = $error;
        return $this;
    }

    public function response()
    {
        switch($this->type) {
            case 'validation':
                return new JsonResponse([
                    'result' => false,
                    'type' => 'error',
                    'http_code' => 422,
                    'message' => $this->message,
                    'error' => $this->error,
                ], 422);
                break;
            case 'error':
                return new JsonResponse([
                    'result' => false,
                    'type' => 'error',
                    'http_code' => 400,
                    'info' => $this->info,
                    'detail' => $this->detail,
                ], 400);
                break;
            case 'success':
                return new JsonResponse([
                    'result' => true,
                    'type' => 'success',
                    'http_code' => 200,
                    'info' => $this->info,
                    'detail' => $this->detail == NULL ? '-' : $this->detail,
                    'data' => $this->data,
                ], 200);
                break;
            case 'successWithCount':
                if(gettype($this->data) == 'array') {
                    $count = count($this->data);
                } else if(gettype($this->data) == 'object') {
                    $count = $this->data->count();
                } else {
                    $count = 0;
                }

                return new JsonResponse([
                    'result' => true,
                    'type' => 'success',
                    'http_code' => 200,
                    'info' => $this->info,
                    'total_data' => $count,
                    'data' => $this->data,
                ], 200);
                break;
            case 'warning':
                return new JsonResponse([
                    'result' => true,
                    'type' => 'alert',
                    'http_code' => 400,
                    'info' => $this->info,
                    'detail' => $this->detail,
                ], 400);
                break;
            case 'paginate':
                if(gettype($this->data) == 'array') {
                    $count = count($this->data);
                } else if(gettype($this->data) == 'object') {
                    $count = $this->data->count();
                } else {
                    $count = 0;
                }

                return new JsonResponse([
                    'result' => true,
                    'type' => 'success',
                    'http_code' => 200,
                    'total_data' => $count,
                    'data' => $this->data,
                    'next_link' => $this->link
                ], 200);
                break;
        }
    }
}
