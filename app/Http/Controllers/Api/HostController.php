<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Host as HostResource;
use App\Http\Resources\HostCollection;
use App\Host;

class HostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new HostCollection(Host::paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $host = new Host();
        $host->company_name = $request->company_name;
        $host->commercial_name = $request->commercial_name;
        $host->cnpj = $request->cnpj;
        $host->url_image = $request->url_image;

        $host->save();

        return new HostResource($host);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new HostResource(Host::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $host = Host::findOrFail($id);
        $host->company_name = $request->company_name;
        $host->commercial_name = $request->commercial_name;
        $host->cnpj = $request->cnpj;
        $host->url_image = $request->url_image;

        $host->save();

        return new HostResource($host);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
