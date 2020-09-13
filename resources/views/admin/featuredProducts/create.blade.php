@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.featuredProduct.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.featured-products.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="form-check {{ $errors->has('active') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="active" value="0">
                    <input class="form-check-input" type="checkbox" name="active" id="active" value="1" {{ old('active', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="active">{{ trans('cruds.featuredProduct.fields.active') }}</label>
                </div>
                @if($errors->has('active'))
                    <div class="invalid-feedback">
                        {{ $errors->first('active') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.featuredProduct.fields.active_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="product_id">{{ trans('cruds.featuredProduct.fields.product') }}</label>
                <select class="form-control select2 {{ $errors->has('product') ? 'is-invalid' : '' }}" name="product_id" id="product_id">
                    @foreach($products as $id => $product)
                        <option value="{{ $id }}" {{ old('product_id') == $id ? 'selected' : '' }}>{{ $product }}</option>
                    @endforeach
                </select>
                @if($errors->has('product'))
                    <div class="invalid-feedback">
                        {{ $errors->first('product') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.featuredProduct.fields.product_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="profile_id">{{ trans('cruds.featuredProduct.fields.profile') }}</label>
                <select class="form-control select2 {{ $errors->has('profile') ? 'is-invalid' : '' }}" name="profile_id" id="profile_id">
                    @foreach($profiles as $id => $profile)
                        <option value="{{ $id }}" {{ old('profile_id') == $id ? 'selected' : '' }}>{{ $profile }}</option>
                    @endforeach
                </select>
                @if($errors->has('profile'))
                    <div class="invalid-feedback">
                        {{ $errors->first('profile') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.featuredProduct.fields.profile_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="show_on_region_id">{{ trans('cruds.featuredProduct.fields.show_on_region') }}</label>
                <select class="form-control select2 {{ $errors->has('show_on_region') ? 'is-invalid' : '' }}" name="show_on_region_id" id="show_on_region_id">
                    @foreach($show_on_regions as $id => $show_on_region)
                        <option value="{{ $id }}" {{ old('show_on_region_id') == $id ? 'selected' : '' }}>{{ $show_on_region }}</option>
                    @endforeach
                </select>
                @if($errors->has('show_on_region'))
                    <div class="invalid-feedback">
                        {{ $errors->first('show_on_region') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.featuredProduct.fields.show_on_region_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="show_on_place_id">{{ trans('cruds.featuredProduct.fields.show_on_place') }}</label>
                <select class="form-control select2 {{ $errors->has('show_on_place') ? 'is-invalid' : '' }}" name="show_on_place_id" id="show_on_place_id">
                    @foreach($show_on_places as $id => $show_on_place)
                        <option value="{{ $id }}" {{ old('show_on_place_id') == $id ? 'selected' : '' }}>{{ $show_on_place }}</option>
                    @endforeach
                </select>
                @if($errors->has('show_on_place'))
                    <div class="invalid-feedback">
                        {{ $errors->first('show_on_place') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.featuredProduct.fields.show_on_place_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="show_on_category_id">{{ trans('cruds.featuredProduct.fields.show_on_category') }}</label>
                <select class="form-control select2 {{ $errors->has('show_on_category') ? 'is-invalid' : '' }}" name="show_on_category_id" id="show_on_category_id">
                    @foreach($show_on_categories as $id => $show_on_category)
                        <option value="{{ $id }}" {{ old('show_on_category_id') == $id ? 'selected' : '' }}>{{ $show_on_category }}</option>
                    @endforeach
                </select>
                @if($errors->has('show_on_category'))
                    <div class="invalid-feedback">
                        {{ $errors->first('show_on_category') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.featuredProduct.fields.show_on_category_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="show_on_subcategory_id">{{ trans('cruds.featuredProduct.fields.show_on_subcategory') }}</label>
                <select class="form-control select2 {{ $errors->has('show_on_subcategory') ? 'is-invalid' : '' }}" name="show_on_subcategory_id" id="show_on_subcategory_id">
                    @foreach($show_on_subcategories as $id => $show_on_subcategory)
                        <option value="{{ $id }}" {{ old('show_on_subcategory_id') == $id ? 'selected' : '' }}>{{ $show_on_subcategory }}</option>
                    @endforeach
                </select>
                @if($errors->has('show_on_subcategory'))
                    <div class="invalid-feedback">
                        {{ $errors->first('show_on_subcategory') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.featuredProduct.fields.show_on_subcategory_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="views">{{ trans('cruds.featuredProduct.fields.views') }}</label>
                <input class="form-control {{ $errors->has('views') ? 'is-invalid' : '' }}" type="number" name="views" id="views" value="{{ old('views', '0') }}" step="1">
                @if($errors->has('views'))
                    <div class="invalid-feedback">
                        {{ $errors->first('views') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.featuredProduct.fields.views_helper') }}</span>
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
