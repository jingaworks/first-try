@extends('layouts.admin')
@section('content')
@can('featured_product_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.featured-products.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.featuredProduct.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.featuredProduct.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-FeaturedProduct">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.featuredProduct.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.featuredProduct.fields.active') }}
                    </th>
                    <th>
                        {{ trans('cruds.featuredProduct.fields.product') }}
                    </th>
                    <th>
                        {{ trans('cruds.featuredProduct.fields.profile') }}
                    </th>
                    <th>
                        {{ trans('cruds.featuredProduct.fields.show_on_region') }}
                    </th>
                    <th>
                        {{ trans('cruds.featuredProduct.fields.show_on_place') }}
                    </th>
                    <th>
                        {{ trans('cruds.featuredProduct.fields.show_on_category') }}
                    </th>
                    <th>
                        {{ trans('cruds.featuredProduct.fields.show_on_subcategory') }}
                    </th>
                    <th>
                        {{ trans('cruds.featuredProduct.fields.views') }}
                    </th>
                    <th>
                        &nbsp;
                    </th>
                </tr>
            </thead>
        </table>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('featured_product_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.featured-products.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
          return entry.id
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

  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('admin.featured-products.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'active', name: 'active' },
{ data: 'product_title', name: 'product.title' },
{ data: 'profile_username', name: 'profile.username' },
{ data: 'show_on_region_denj', name: 'show_on_region.denj' },
{ data: 'show_on_place_denloc', name: 'show_on_place.denloc' },
{ data: 'show_on_category_name', name: 'show_on_category.name' },
{ data: 'show_on_subcategory_name', name: 'show_on_subcategory.name' },
{ data: 'views', name: 'views' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 5, 'asc' ]],
    pageLength: 50,
  };
  let table = $('.datatable-FeaturedProduct').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection
