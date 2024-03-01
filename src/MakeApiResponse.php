<?php

namespace Eliseekn\LaravelApiResponse;

use Symfony\Component\HttpFoundation\JsonResponse;

trait MakeApiResponse
{
    public function response(string $status, array|string $message, int $statusCode): JsonResponse
    {
        return response()->json([
            'status' => $status,
            'message' => $message
        ], $statusCode);
    }

    public function successResponse(array|string $message, int $statusCode = 200): JsonResponse
    {
        if (is_array($message)) {
            return response()->json(array_merge(['status' => 'success'], $message), $statusCode);
        }

        return $this->response('success', $message, $statusCode);
    }

    public function errorResponse(array|string $message, int $statusCode = 500): JsonResponse
    {
        if (is_array($message)) {
            return response()->json(array_merge(['status' => 'error'], $message), $statusCode);
        }

        return $this->response('error', $message, $statusCode);
    }
}
