<?php 

namespace App\Services;

use App\Repositories\Eloquent\ClientRepositoryEloquent;
use App\Models\Client;
use Illuminate\Database\Eloquent\Collection;

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

    public function delete($id):void
    {
        $this->repository->find($id)->delete();
    }

    public function findById($id): Client
    {
        return $this->repository->find($id);
    }

    public function FindByLastNumber($number):Collection
    {
        $lastNumber =  substr($number, -1);
        return $this->repository->findWhere([
            ['license_plate','LIKE','%'.$lastNumber]
        ]);
    }


}