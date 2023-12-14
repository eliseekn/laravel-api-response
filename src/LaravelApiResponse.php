<?php

namespace Eliseekn\LaravelApiResponse;

use Symfony\Component\HttpFoundation\JsonResponse;

trait LaravelApiResponse
{
    public function response(string $status, string $message, int $statusCode): JsonResponse
    {
        return response()->json([
            'status' => $status,
            'message' => $message
        ], $statusCode);
    }

    public function successResponse(array|string $message, int $statusCode = 200): JsonResponse
    {
        if (is_string($message)) {
            return $this->response('success', $message, $statusCode);
        }

        return response()->json($message, $statusCode);
    }

    public function errorResponse(array|string $message, int $statusCode = 500): JsonResponse
    {
        if (is_string($message)) {
            return $this->response('error', $message, $statusCode);
        }

        return response()->json($message, $statusCode);
    }

    public function warningResponse(string $message, int $statusCode): JsonResponse
    {
        return $this->response('warning', $message, $statusCode);
    }
}
