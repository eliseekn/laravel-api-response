<?php

namespace Eliseekn\LaravelApiResponse;

use Illuminate\Http\JsonResponse;

trait MakeApiResponse
{
    public function jsonResponse(array $message, int $statusCode = 200): JsonResponse
    {
        return new JsonResponse($message, $statusCode);
    }

    public function successJsonResponse(array|string $message, int $statusCode = 200): JsonResponse
    {
        if (is_array($message)) {
            return new JsonResponse(array_merge(['status' => 'sucess'], $message), $statusCode);
        }

        return new JsonResponse([
            'status' => 'sucess',
            'message' => $message,
        ], $statusCode);
    }

    public function errorJsonResponse(array|string $message, int $statusCode = 500): JsonResponse
    {
        if (is_array($message)) {
            return new JsonResponse(array_merge(['status' => 'error'], $message), $statusCode);
        }

        return new JsonResponse([
            'status' => 'error',
            'message' => $message,
        ], $statusCode);
    }
}
