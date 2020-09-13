<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFeaturedProductRequest;
use App\Http\Requests\UpdateFeaturedProductRequest;
use App\Http\Resources\Admin\FeaturedProductResource;
use App\Models\FeaturedProduct;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FeaturedProductApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('featured_product_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FeaturedProductResource(FeaturedProduct::with(['product', 'profile', 'show_on_region', 'show_on_place', 'show_on_category', 'show_on_subcategory', 'created_by'])->get());
    }

    public function store(StoreFeaturedProductRequest $request)
    {
        $featuredProduct = FeaturedProduct::create($request->all());

        return (new FeaturedProductResource($featuredProduct))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(FeaturedProduct $featuredProduct)
    {
        abort_if(Gate::denies('featured_product_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FeaturedProductResource($featuredProduct->load(['product', 'profile', 'show_on_region', 'show_on_place', 'show_on_category', 'show_on_subcategory', 'created_by']));
    }

    public function update(UpdateFeaturedProductRequest $request, FeaturedProduct $featuredProduct)
    {
        $featuredProduct->update($request->all());

        return (new FeaturedProductResource($featuredProduct))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(FeaturedProduct $featuredProduct)
    {
        abort_if(Gate::denies('featured_product_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $featuredProduct->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
