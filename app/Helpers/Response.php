<?php

namespace App\Helpers;

/**
 * Format response.
 */
class Response
{
    /**
     * Give success response.
     */
    public static function success($data = null, ?string $message = null, $code = 200)
    {
        return response()->json([
            'error' => false,
            'code' => $code,
            'message' => $message,
            'data' => $data,
        ], $code);
    }

    /**
     * Give error response.
     */
    public static function error($data = null, ?string $message = null, $code = 400)
    {
        return response()->json([
            'error' => true,
            'code' => $code,
            'message' => $message,
            'data' => $data,
        ], $code);
    }

    /**
     * Give validation error response.
     */
    public static function errorValidate($data = null, ?string $message = null, $code = 422)
    {
        return response()->json([
            'error' => true,
            'code' => $code,
            'message' => $message,
            'errors' => $data,
        ], $code);
    }

    /**
     * Handle general error with exception details.
     */
    public static function errorCatch(\Exception $e, ?string $message = null, ?int $code = 500)
    {
        if (self::isValidHttpStatusCode($e->getCode())) {
            $code = $e->getCode();
        }

        $errorResponse = [
            'error' => true,
            'code' => $code ?: 500,
            'message' => $message ?? 'Something went wrong!',
            'exception' => [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString(),
            ],
        ];

        // In development or debug mode, show full error details
        if (config('app.debug') === true) {
            return response()->json($errorResponse, $code);
        }

        // In production, show a simplified error message
        return response()->json([
            'error' => true,
            'code' => 500,
            'message' => 'Something went wrong!',
        ], 500);
    }

    /**
     * Handle validation errors or custom exceptions.
     */
    public static function handleValidationErrors($errors, $message = 'Validation failed', $code = 422)
    {
        return response()->json([
            'error' => true,
            'code' => $code,
            'message' => $message,
            'errors' => $errors,
        ], $code);
    }

    /**
     * Check if the HTTP status code is valid.
     */
    private static function isValidHttpStatusCode($code)
    {
        return is_int($code) && $code >= 100 && $code < 600;
    }
}
