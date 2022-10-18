<?php

namespace App\Services\ProductComment;

use App\Models\ProductComment;
use App\Repositories\BaseRepository;
use App\Services\BaseService;

class ProductCommentService extends BaseService implements ProductCommentRepositoryInterface
{
    public $repository;

    public function __construct(ProductCommentRepositoryInterface $productCommentRepository)
    {
        $this->repository = $productCommentRepository;
    }
}
