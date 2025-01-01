<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Cache;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;

    protected function afterCreate(): void
    {
        // Hapus cache setelah postingan baru dibuat
        Cache::forget('alamPosts');
        Cache::forget('buatanPosts');
        Cache::forget('budayaPosts');
        info('Cache cleared after creating a post');
    }
}
