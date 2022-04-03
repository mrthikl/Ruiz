<?php

namespace App\View\Components\home;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\View\Component;

class header extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $list_categories = Category::where('category_status', '0')->orderby('category_id', 'desc')->get();
        $list_brands = Brand::where('brand_status', '0')->orderby('brand_name')->get();
        return view('components.home.header', compact('list_categories', 'list_brands'));
    }
}
