<?php

namespace App\Services\ProductComment;

use App\Models\ProductComment;
use App\Repositories\BaseRepository;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Services\BaseService;

class ProductCommentRepository extends BaseRepository implements ProductCommentRepositoryInterface
{

    public function getModel()
    {
        // TODO: Implement getModel() method.
        return ProductComment::class;
    }
}
