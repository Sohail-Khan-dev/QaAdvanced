<?php

namespace App\Http\Controllers;

use App\Models\TopicName;
use App\Models\BlogDetails;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\LearningCategory;
use App\Traits\CrudOperations;
use App\Traits\ApiResponseTrait;
use App\Traits\BlogOperationsTrait;

class BlogDetailsController extends Controller
{
    use CrudOperations, ApiResponseTrait, BlogOperationsTrait;

    public function getBlogDetail($category_id = null)
    {
        return $this->getBlogsByCategory($category_id);
    }

    public function storeBlog(Request $request)
    {
        return $this->createBlog($request);
    }
    public function updateBlog(Request $request)
    {
        return $this->modifyBlog($request);
    }

    public function updateCategory(Request $request)
    {
        return $this->modifyCategory($request);
    }

    public function updateTopic(Request $request)
    {
        $data = [
            'name' => $request->name,
            'description' => $request->slug,
            'topic_id' => Str::slug($request->name),
            'learning_category_id' => $request->category_id
        ];

        return $this->updateRecord($request, TopicName::class, $request->id, $data, 'topic');
    }

    public function storeCategory(Request $request)
    {
        return $this->createCategory($request);
    }

    public function getCategories()
    {
        return $this->getAllCategories();
    }

    public function storeTopic(Request $request)
    {
        return $this->createTopic($request);
    }

    public function getTopic($id = null)
    {
        return $this->getAllTopics();
    }
    public function deleteCategory($id)
    {
        return $this->deleteRecord(LearningCategory::class, $id, 'category');
    }

    public function deleteTopic($id)
    {
        return $this->deleteRecord(TopicName::class, $id, 'topic');
    }

    public function deleteBlog($id)
    {
        return $this->removeBlog($id);
    }

    public function show($id)
    {
        return $this->getRecordById(BlogDetails::class, $id, 'blog');
    }
}
