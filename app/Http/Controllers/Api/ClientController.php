<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Client as ClientResource;
use App\Http\Resources\ClientCollection;
use App\Client;
use Illuminate\Http\Response;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return ClientCollection
     */
    public function index()
    {
        return new ClientCollection(Client::paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return ClientResource
     */
    public function store(Request $request)
    {
        $client = new Client();
        $client->name = $request->name;
        $client->surname = $request->surname;
        $client->cpf = $request->cpf;
        $client->birthday = $request->birthday;
        $client->url_image = $request->url_image;

        $client->save();

        return new ClientResource($client);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return ClientResource
     */
    public function show($id)
    {
        return new ClientResource(Client::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return ClientResource
     */
    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);
        $client->name = $request->name;
        $client->surname = $request->surname;
        $client->cpf = $request->cpf;
        $client->birthday = $request->birthday;
        $client->url_image = $request->url_image;
        $client->save();
        return new ClientResource($client);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
