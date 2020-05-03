@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.indexAd.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.index-ads.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.indexAd.fields.id') }}
                        </th>
                        <td>
                            {{ $indexAd->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.indexAd.fields.code_a_728_x_90') }}
                        </th>
                        <td>
                            {{ $indexAd->code_a_728_x_90 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.indexAd.fields.code_b_728_x_90') }}
                        </th>
                        <td>
                            {{ $indexAd->code_b_728_x_90 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.indexAd.fields.code_c_728_x_90') }}
                        </th>
                        <td>
                            {{ $indexAd->code_c_728_x_90 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.indexAd.fields.code_d_728_x_90') }}
                        </th>
                        <td>
                            {{ $indexAd->code_d_728_x_90 }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.index-ads.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection