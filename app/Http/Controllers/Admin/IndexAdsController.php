<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyIndexAdRequest;
use App\Http\Requests\StoreIndexAdRequest;
use App\Http\Requests\UpdateIndexAdRequest;
use App\IndexAd;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IndexAdsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('index_ad_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $indexAds = IndexAd::all();

        return view('admin.indexAds.index', compact('indexAds'));
    }

    public function create()
    {
        abort_if(Gate::denies('index_ad_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.indexAds.create');
    }

    public function store(StoreIndexAdRequest $request)
    {
        $indexAd = IndexAd::create($request->all());

        return redirect()->route('admin.index-ads.index');

    }

    public function edit(IndexAd $indexAd)
    {
        abort_if(Gate::denies('index_ad_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.indexAds.edit', compact('indexAd'));
    }

    public function update(UpdateIndexAdRequest $request, IndexAd $indexAd)
    {
        $indexAd->update($request->all());

        return redirect()->route('admin.index-ads.index');

    }

    public function show(IndexAd $indexAd)
    {
        abort_if(Gate::denies('index_ad_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.indexAds.show', compact('indexAd'));
    }

    public function destroy(IndexAd $indexAd)
    {
        abort_if(Gate::denies('index_ad_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $indexAd->delete();

        return back();

    }

    public function massDestroy(MassDestroyIndexAdRequest $request)
    {
        IndexAd::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);

    }
}
