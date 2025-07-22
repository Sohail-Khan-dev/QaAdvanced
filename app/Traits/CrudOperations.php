<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

trait CrudOperations
{
    /**
     * Get all records of the model
     * 
     * @param string|null $orderBy
     * @param string $direction
     * @return \Illuminate\Http\JsonResponse
     */
    protected function getAllRecords($modelClass, $orderBy = 'created_at', $direction = 'desc')
    {
        $records = $modelClass::orderBy($orderBy, $direction)->get();
        return response()->json($records);
    }

    /**
     * Store a new record
     * 
     * @param Request $request
     * @param string $modelClass
     * @param array $data
     * @param string $responseKey
     * @return \Illuminate\Http\JsonResponse
     */
    protected function storeRecord(Request $request, $modelClass, array $data, $responseKey)
    {
        $record = new $modelClass();
        
        foreach ($data as $key => $value) {
            $record->$key = $value;
        }
        
        $record->save();
        
        $allRecords = $modelClass::orderBy('created_at', 'desc')->get();
        
        return response()->json([
            $responseKey.'s' => $allRecords,
            'message' => ucfirst($responseKey).' saved successfully',
            $responseKey => $record
        ]);
    }

    /**
     * Update an existing record
     * 
     * @param Request $request
     * @param string $modelClass
     * @param int $id
     * @param array $data
     * @param string $responseKey
     * @return \Illuminate\Http\JsonResponse
     */
    protected function updateRecord(Request $request, $modelClass, $id, array $data, $responseKey)
    {
        $record = $modelClass::find($id);
        
        if (!$record) {
            return response()->json(['error' => ucfirst($responseKey).' not found'], 404);
        }
        
        foreach ($data as $key => $value) {
            $record->$key = $value;
        }
        
        $record->save();
        
        $allRecords = $modelClass::orderBy('created_at', 'desc')->get();
        
        return response()->json([
            $responseKey.'s' => $allRecords,
            'message' => ucfirst($responseKey).' updated successfully',
            $responseKey => $record
        ]);
    }

    /**
     * Delete a record
     * 
     * @param string $modelClass
     * @param int $id
     * @param string $responseKey
     * @return \Illuminate\Http\JsonResponse
     */
    protected function deleteRecord($modelClass, $id, $responseKey)
    {
        $record = $modelClass::find($id);
        
        if (!$record) {
            return response()->json(['error' => ucfirst($responseKey).' not found'], 404);
        }
        
        $record->delete();
        
        $allRecords = $modelClass::orderBy('created_at', 'desc')->get();
        
        return response()->json([
            $responseKey.'s' => $allRecords,
            'message' => ucfirst($responseKey).' deleted successfully'
        ], 200);
    }

    /**
     * Get a specific record by ID
     * 
     * @param string $modelClass
     * @param int $id
     * @param string $responseKey
     * @return \Illuminate\Http\JsonResponse
     */
    protected function getRecordById($modelClass, $id, $responseKey)
    {
        $record = $modelClass::find($id);
        
        if (!$record) {
            return response()->json(['error' => ucfirst($responseKey).' not found'], 404);
        }
        
        return response()->json([
            $responseKey => $record
        ]);
    }

    /**
     * Get records with relationships
     * 
     * @param string $modelClass
     * @param array $relations
     * @param string $responseKey
     * @return \Illuminate\Http\JsonResponse
     */
    protected function getRecordsWithRelations($modelClass, array $relations, $responseKey)
    {
        $records = $modelClass::with($relations)->get();
        
        return response()->json([
            $responseKey.'s' => $records
        ]);
    }
}
