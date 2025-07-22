<?php

namespace App\Traits;

trait ModelOperationsTrait
{
    /**
     * Create a new record with the given data
     *
     * @param array $data
     * @return static
     */
    public static function createRecord(array $data)
    {
        return static::create($data);
    }

    /**
     * Update a record with the given data
     *
     * @param int $id
     * @param array $data
     * @return static|null
     */
    public static function updateRecord($id, array $data)
    {
        $record = static::find($id);
        
        if (!$record) {
            return null;
        }
        
        $record->update($data);
        return $record;
    }

    /**
     * Delete a record by ID
     *
     * @param int $id
     * @return bool|null
     */
    public static function deleteRecord($id)
    {
        $record = static::find($id);
        
        if (!$record) {
            return null;
        }
        
        return $record->delete();
    }

    /**
     * Get all records ordered by a specific column
     *
     * @param string $orderBy
     * @param string $direction
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function getAllRecords($orderBy = 'created_at', $direction = 'desc')
    {
        return static::orderBy($orderBy, $direction)->get();
    }

    /**
     * Get a record by ID with optional relationships
     *
     * @param int $id
     * @param array $relations
     * @return static|null
     */
    public static function getRecordById($id, array $relations = [])
    {
        $query = static::query();
        
        if (!empty($relations)) {
            $query->with($relations);
        }
        
        return $query->find($id);
    }

    /**
     * Get records by a specific field value
     *
     * @param string $field
     * @param mixed $value
     * @param array $relations
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function getRecordsByField($field, $value, array $relations = [])
    {
        $query = static::query();
        
        if (!empty($relations)) {
            $query->with($relations);
        }
        
        return $query->where($field, $value)->get();
    }
}
