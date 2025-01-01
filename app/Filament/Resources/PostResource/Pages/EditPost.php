<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Cache;

class EditPost extends EditRecord
{
    protected static string $resource = PostResource::class;

    protected function afterCreate(): void
    {
        // Hapus cache setelah postingan baru dibuat
        Cache::forget('alamPosts');
        Cache::forget('buatanPosts');
        Cache::forget('budayaPosts');
        info('Cache cleared after editing a post');
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
