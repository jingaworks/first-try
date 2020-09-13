@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.region.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.regions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.region.fields.id') }}
                        </th>
                        <td>
                            {{ $region->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.region.fields.denj') }}
                        </th>
                        <td>
                            {{ $region->denj }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.region.fields.mnemonic') }}
                        </th>
                        <td>
                            {{ $region->mnemonic }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.regions.index') }}">
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
            <a class="nav-link" href="#region_places" role="tab" data-toggle="tab">
                {{ trans('cruds.place.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#region_profiles" role="tab" data-toggle="tab">
                {{ trans('cruds.profile.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#region_addresses" role="tab" data-toggle="tab">
                {{ trans('cruds.address.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#show_on_region_featured_products" role="tab" data-toggle="tab">
                {{ trans('cruds.featuredProduct.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="region_places">
            @includeIf('admin.regions.relationships.regionPlaces', ['places' => $region->regionPlaces])
        </div>
        <div class="tab-pane" role="tabpanel" id="region_profiles">
            @includeIf('admin.regions.relationships.regionProfiles', ['profiles' => $region->regionProfiles])
        </div>
        <div class="tab-pane" role="tabpanel" id="region_addresses">
            @includeIf('admin.regions.relationships.regionAddresses', ['addresses' => $region->regionAddresses])
        </div>
        <div class="tab-pane" role="tabpanel" id="show_on_region_featured_products">
            @includeIf('admin.regions.relationships.showOnRegionFeaturedProducts', ['featuredProducts' => $region->showOnRegionFeaturedProducts])
        </div>
    </div>
</div>

@endsection