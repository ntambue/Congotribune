@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.indexAd.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.index-ads.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="code_a_728_x_90">{{ trans('cruds.indexAd.fields.code_a_728_x_90') }}</label>
                <textarea class="form-control {{ $errors->has('code_a_728_x_90') ? 'is-invalid' : '' }}" name="code_a_728_x_90" id="code_a_728_x_90">{{ old('code_a_728_x_90') }}</textarea>
                @if($errors->has('code_a_728_x_90'))
                    <div class="invalid-feedback">
                        {{ $errors->first('code_a_728_x_90') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.indexAd.fields.code_a_728_x_90_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="code_b_728_x_90">{{ trans('cruds.indexAd.fields.code_b_728_x_90') }}</label>
                <textarea class="form-control {{ $errors->has('code_b_728_x_90') ? 'is-invalid' : '' }}" name="code_b_728_x_90" id="code_b_728_x_90">{{ old('code_b_728_x_90') }}</textarea>
                @if($errors->has('code_b_728_x_90'))
                    <div class="invalid-feedback">
                        {{ $errors->first('code_b_728_x_90') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.indexAd.fields.code_b_728_x_90_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="code_c_728_x_90">{{ trans('cruds.indexAd.fields.code_c_728_x_90') }}</label>
                <textarea class="form-control {{ $errors->has('code_c_728_x_90') ? 'is-invalid' : '' }}" name="code_c_728_x_90" id="code_c_728_x_90">{{ old('code_c_728_x_90') }}</textarea>
                @if($errors->has('code_c_728_x_90'))
                    <div class="invalid-feedback">
                        {{ $errors->first('code_c_728_x_90') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.indexAd.fields.code_c_728_x_90_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="code_d_728_x_90">{{ trans('cruds.indexAd.fields.code_d_728_x_90') }}</label>
                <input class="form-control {{ $errors->has('code_d_728_x_90') ? 'is-invalid' : '' }}" type="text" name="code_d_728_x_90" id="code_d_728_x_90" value="{{ old('code_d_728_x_90', '') }}">
                @if($errors->has('code_d_728_x_90'))
                    <div class="invalid-feedback">
                        {{ $errors->first('code_d_728_x_90') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.indexAd.fields.code_d_728_x_90_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection