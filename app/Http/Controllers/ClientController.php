<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Requests\ClientStoreRequest;
use App\Http\Requests\ClientUpdateRequest;
use App\Services\ClientService;

class ClientController extends Controller
{
    protected $service;

    public function __construct(ClientService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        //
    }

    public function store(ClientStoreRequest $request)
    {
       return $this->service->create($request->all());
    }

    public function show($id)
    {
        //
    }

    public function update(ClientUpdateRequest $request, $id)
    {
        return $this->service->update($request->all(), $id);
    }

    public function destroy($id)
    {
        $this->service->delete($id);

        return response('', 204);
    }
}
