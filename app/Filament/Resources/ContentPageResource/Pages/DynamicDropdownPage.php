<?php

namespace App\Filament\Resources\ContentPageResource\Pages;

use App\Filament\Resources\ContentPageResource;
use Filament\Resources\Pages\Page;

class DynamicDropdownPage extends Page
{
    protected static string $resource = ContentPageResource::class;
    protected static string $view = 'filament.resources.content-page-resource.pages.dynamic-dropdown-page';


}
