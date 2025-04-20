<?php

namespace App\Traits;

trait ApiResponseTrait
{
    /**
     * Return a success JSON response
     *
     * @param array|string $data
     * @param string|null $message
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    protected function successResponse($data, string $message = null, int $code = 200)
    {
        return response()->json([
            'status' => 'success',
            'message' => $message,
            'data' => $data
        ], $code);
    }

    /**
     * Return an error JSON response
     *
     * @param string $message
     * @param int $code
     * @param array|string|null $data
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorResponse(string $message, int $code, $data = null)
    {
        return response()->json([
            'status' => 'error',
            'message' => $message,
            'data' => $data
        ], $code);
    }

    /**
     * Return a paginated response
     * 
     * @param \Illuminate\Pagination\LengthAwarePaginator $items
     * @param string|null $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function paginatedResponse($items, string $message = null)
    {
        $data = [
            'items' => $items->items(),
            'pagination' => [
                'total' => $items->total(),
                'per_page' => $items->perPage(),
                'current_page' => $items->currentPage(),
                'last_page' => $items->lastPage(),
                'from' => $items->firstItem(),
                'to' => $items->lastItem(),
            ]
        ];

        return $this->successResponse($data, $message);
    }
}
