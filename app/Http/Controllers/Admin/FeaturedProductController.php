<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyFeaturedProductRequest;
use App\Http\Requests\StoreFeaturedProductRequest;
use App\Http\Requests\UpdateFeaturedProductRequest;
use App\Models\Category;
use App\Models\FeaturedProduct;
use App\Models\Place;
use App\Models\Product;
use App\Models\Profile;
use App\Models\Region;
use App\Models\Subcategory;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class FeaturedProductController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('featured_product_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = FeaturedProduct::with(['product', 'profile', 'show_on_region', 'show_on_place', 'show_on_category', 'show_on_subcategory', 'created_by'])->select(sprintf('%s.*', (new FeaturedProduct)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'featured_product_show';
                $editGate      = 'featured_product_edit';
                $deleteGate    = 'featured_product_delete';
                $crudRoutePart = 'featured-products';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            });
            $table->editColumn('active', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->active ? 'checked' : null) . '>';
            });
            $table->addColumn('product_title', function ($row) {
                return $row->product ? $row->product->title : '';
            });

            $table->addColumn('profile_username', function ($row) {
                return $row->profile ? $row->profile->username : '';
            });

            $table->addColumn('show_on_region_denj', function ($row) {
                return $row->show_on_region ? $row->show_on_region->denj : '';
            });

            $table->addColumn('show_on_place_denloc', function ($row) {
                return $row->show_on_place ? $row->show_on_place->denloc : '';
            });

            $table->addColumn('show_on_category_name', function ($row) {
                return $row->show_on_category ? $row->show_on_category->name : '';
            });

            $table->addColumn('show_on_subcategory_name', function ($row) {
                return $row->show_on_subcategory ? $row->show_on_subcategory->name : '';
            });

            $table->editColumn('views', function ($row) {
                return $row->views ? $row->views : "";
            });

            $table->rawColumns(['actions', 'placeholder', 'active', 'product', 'profile', 'show_on_region', 'show_on_place', 'show_on_category', 'show_on_subcategory']);

            return $table->make(true);
        }

        return view('admin.featuredProducts.index');
    }

    public function create()
    {
        abort_if(Gate::denies('featured_product_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $products = Product::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $profiles = Profile::all()->pluck('username', 'id')->prepend(trans('global.pleaseSelect'), '');

        $show_on_regions = Region::all()->pluck('denj', 'id')->prepend(trans('global.pleaseSelect'), '');

        $show_on_places = Place::all()->pluck('denloc', 'id')->prepend(trans('global.pleaseSelect'), '');

        $show_on_categories = Category::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $show_on_subcategories = Subcategory::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.featuredProducts.create', compact('products', 'profiles', 'show_on_regions', 'show_on_places', 'show_on_categories', 'show_on_subcategories'));
    }

    public function store(StoreFeaturedProductRequest $request)
    {
        $featuredProduct = FeaturedProduct::create($request->all());

        return redirect()->route('admin.featured-products.index');
    }

    public function edit(FeaturedProduct $featuredProduct)
    {
        abort_if(Gate::denies('featured_product_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $products = Product::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $profiles = Profile::all()->pluck('username', 'id')->prepend(trans('global.pleaseSelect'), '');

        $show_on_regions = Region::all()->pluck('denj', 'id')->prepend(trans('global.pleaseSelect'), '');

        $show_on_places = Place::all()->pluck('denloc', 'id')->prepend(trans('global.pleaseSelect'), '');

        $show_on_categories = Category::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $show_on_subcategories = Subcategory::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $featuredProduct->load('product', 'profile', 'show_on_region', 'show_on_place', 'show_on_category', 'show_on_subcategory', 'created_by');

        return view('admin.featuredProducts.edit', compact('products', 'profiles', 'show_on_regions', 'show_on_places', 'show_on_categories', 'show_on_subcategories', 'featuredProduct'));
    }

    public function update(UpdateFeaturedProductRequest $request, FeaturedProduct $featuredProduct)
    {
        $featuredProduct->update($request->all());

        return redirect()->route('admin.featured-products.index');
    }

    public function show(FeaturedProduct $featuredProduct)
    {
        abort_if(Gate::denies('featured_product_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $featuredProduct->load('product', 'profile', 'show_on_region', 'show_on_place', 'show_on_category', 'show_on_subcategory', 'created_by');

        return view('admin.featuredProducts.show', compact('featuredProduct'));
    }

    public function destroy(FeaturedProduct $featuredProduct)
    {
        abort_if(Gate::denies('featured_product_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $featuredProduct->delete();

        return back();
    }

    public function massDestroy(MassDestroyFeaturedProductRequest $request)
    {
        FeaturedProduct::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
