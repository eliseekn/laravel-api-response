<?php

namespace Eliseekn\LaravelApiResponse;

use App\Enums\HttpResponseStatus;
use Illuminate\Http\JsonResponse;

trait MakeApiResponse
{
    public function jsonResponse(array $message, int $statusCode): JsonResponse
    {
        return new JsonResponse($message, $statusCode);
    }

    public function successJsonResponse(array|string $message, int $statusCode = 200): JsonResponse
    {
        if (is_array($message)) {
            return new JsonResponse(array_merge(['status' => HttpResponseStatus::SUCCESS], $message), $statusCode);
        }

        return new JsonResponse([
            'status' => HttpResponseStatus::SUCCESS,
            'message' => $message,
        ], $statusCode);
    }

    public function errorJsonResponse(array|string $message, int $statusCode = 500): JsonResponse
    {
        if (is_array($message)) {
            return new JsonResponse(array_merge(['status' => HttpResponseStatus::ERROR], $message), $statusCode);
        }

        return new JsonResponse([
            'status' => HttpResponseStatus::ERROR,
            'message' => $message,
        ], $statusCode);
    }
}
