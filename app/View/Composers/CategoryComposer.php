<?php

namespace App\View\Composers;
// app/View/Composers/CategoryComposer.php

use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Support\Facades\Cache;
use App\Models\Course;

class CategoryComposer
{
    public function compose(View $view)
    {
        $categories = Cache::remember('distinct_categories', 60*24, function() {
            return Course::select('category')
                ->distinct()
                ->get()
                ->pluck('category')
                ->toArray();
        });
        $categories = collect($categories);
        $view->with('categories', $categories);
    }
}

;
?>
