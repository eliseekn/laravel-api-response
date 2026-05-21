<?php

namespace Eliseekn\LaravelApiResponse;

use App\Enums\HttpResponseStatus;
use Illuminate\Http\JsonResponse;

trait MakeApiResponse
{
    public function response(string $status, array|string $message, int $statusCode): JsonResponse
    {
        return new JsonResponse([
            'status' => $status,
            'message' => $message,
        ], $statusCode);
    }

    public function successResponse(array|string $message, int $statusCode = 200): JsonResponse
    {
        if (is_array($message)) {
            return new JsonResponse(array_merge(['status' => HttpResponseStatus::SUCCESS], $message), $statusCode);
        }

        return $this->response(HttpResponseStatus::SUCCESS, $message, $statusCode);
    }

    public function errorResponse(array|string $message, int $statusCode = 500): JsonResponse
    {
        if (is_array($message)) {
            return new JsonResponse(array_merge(['status' => HttpResponseStatus::ERROR], $message), $statusCode);
        }

        return $this->response(HttpResponseStatus::ERROR, $message, $statusCode);
    }
}
