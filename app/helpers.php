<?php

function locale_route($name, $params = [])
{
    $locale = request()->route('locale');

    if ($locale) {
        return route("locale.$name", array_merge(['locale' => $locale], $params));
    }

    return route($name, $params);
}
