<?php

namespace Aberbin96\NovaPromocodes\Filters;

use Laravel\Nova\Filters\Filter;
use Illuminate\Http\Request;

class MultiUse extends Filter
{
    public function name()
    {
        return __('MultiUse');
    }

    /**
     * Apply the filter to the given query.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param mixed $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function apply(Request $request, $query, $value)
    {
        if(is_bool($value)) return $query->where('multi_use', $value);
        return $query;
    }

    /**
     * Get the filter's available options.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function options(Request $request)
    {
        return [
            'Yes' => true,
            'No' => false,
        ];
    }
}
