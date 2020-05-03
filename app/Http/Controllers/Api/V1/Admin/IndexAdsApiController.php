<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreIndexAdRequest;
use App\Http\Requests\UpdateIndexAdRequest;
use App\Http\Resources\Admin\IndexAdResource;
use App\IndexAd;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IndexAdsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('index_ad_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new IndexAdResource(IndexAd::all());

    }

    public function store(StoreIndexAdRequest $request)
    {
        $indexAd = IndexAd::create($request->all());

        return (new IndexAdResource($indexAd))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);

    }

    public function show(IndexAd $indexAd)
    {
        abort_if(Gate::denies('index_ad_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new IndexAdResource($indexAd);

    }

    public function update(UpdateIndexAdRequest $request, IndexAd $indexAd)
    {
        $indexAd->update($request->all());

        return (new IndexAdResource($indexAd))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);

    }

    public function destroy(IndexAd $indexAd)
    {
        abort_if(Gate::denies('index_ad_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $indexAd->delete();

        return response(null, Response::HTTP_NO_CONTENT);

    }
}
