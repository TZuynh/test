<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\BaseRepository;

/**
 * The repository for the User Model
 */
class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    /**
     * {@inheritdoc}
     */
    protected $model;

    /**
     * {@inheritdoc}
     */
    public function __construct(User $model)
    {
        $this->model = $model;
        parent::__construct($model);
    }

    public function create($data)
    {
        return $this->model->create($data);
    }

    public function abc()
    {

    }
}
