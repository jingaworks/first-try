@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.subcategory.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.subcategories.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.subcategory.fields.id') }}
                        </th>
                        <td>
                            {{ $subcategory->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subcategory.fields.name') }}
                        </th>
                        <td>
                            {{ $subcategory->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subcategory.fields.category') }}
                        </th>
                        <td>
                            {{ $subcategory->category->name ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.subcategories.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#subcategory_products" role="tab" data-toggle="tab">
                {{ trans('cruds.product.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#show_on_subcategory_featured_products" role="tab" data-toggle="tab">
                {{ trans('cruds.featuredProduct.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="subcategory_products">
            @includeIf('admin.subcategories.relationships.subcategoryProducts', ['products' => $subcategory->subcategoryProducts])
        </div>
        <div class="tab-pane" role="tabpanel" id="show_on_subcategory_featured_products">
            @includeIf('admin.subcategories.relationships.showOnSubcategoryFeaturedProducts', ['featuredProducts' => $subcategory->showOnSubcategoryFeaturedProducts])
        </div>
    </div>
</div>

@endsection