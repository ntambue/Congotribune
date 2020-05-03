@extends('layouts.admin')
@section('content')
@can('index_ad_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.index-ads.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.indexAd.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.indexAd.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-IndexAd">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.indexAd.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.indexAd.fields.code_a_728_x_90') }}
                        </th>
                        <th>
                            {{ trans('cruds.indexAd.fields.code_b_728_x_90') }}
                        </th>
                        <th>
                            {{ trans('cruds.indexAd.fields.code_c_728_x_90') }}
                        </th>
                        <th>
                            {{ trans('cruds.indexAd.fields.code_d_728_x_90') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($indexAds as $key => $indexAd)
                        <tr data-entry-id="{{ $indexAd->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $indexAd->id ?? '' }}
                            </td>
                            <td>
                                {{ $indexAd->code_a_728_x_90 ?? '' }}
                            </td>
                            <td>
                                {{ $indexAd->code_b_728_x_90 ?? '' }}
                            </td>
                            <td>
                                {{ $indexAd->code_c_728_x_90 ?? '' }}
                            </td>
                            <td>
                                {{ $indexAd->code_d_728_x_90 ?? '' }}
                            </td>
                            <td>
                                @can('index_ad_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.index-ads.show', $indexAd->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('index_ad_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.index-ads.edit', $indexAd->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('index_ad_delete')
                                    <form action="{{ route('admin.index-ads.destroy', $indexAd->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('index_ad_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.index-ads.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-IndexAd:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection