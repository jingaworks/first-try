@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.featuredProduct.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.featured-products.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.featuredProduct.fields.id') }}
                        </th>
                        <td>
                            {{ $featuredProduct->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.featuredProduct.fields.active') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $featuredProduct->active ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.featuredProduct.fields.product') }}
                        </th>
                        <td>
                            {{ $featuredProduct->product->title ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.featuredProduct.fields.profile') }}
                        </th>
                        <td>
                            {{ $featuredProduct->profile->username ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.featuredProduct.fields.show_on_region') }}
                        </th>
                        <td>
                            {{ $featuredProduct->show_on_region->denj ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.featuredProduct.fields.show_on_place') }}
                        </th>
                        <td>
                            {{ $featuredProduct->show_on_place->denloc ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.featuredProduct.fields.show_on_category') }}
                        </th>
                        <td>
                            {{ $featuredProduct->show_on_category->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.featuredProduct.fields.show_on_subcategory') }}
                        </th>
                        <td>
                            {{ $featuredProduct->show_on_subcategory->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.featuredProduct.fields.views') }}
                        </th>
                        <td>
                            {{ $featuredProduct->views }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.featured-products.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
