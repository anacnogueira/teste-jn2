<?php 

namespace App\Services;

use App\Repositories\Eloquent\ClientRepositoryEloquent;
use App\Models\Client;

class ClientService
{
    protected $repository;

    public  function __construct(ClientRepositoryEloquent $repository)
	{
		$this->repository = $repository;
	}

    public function create(array $data): Client
    {
        return $this->repository->create($data);
    }

    public function update(array $data, $id): Client
    {
        return $this->repository->update($data, $id);
    }


}