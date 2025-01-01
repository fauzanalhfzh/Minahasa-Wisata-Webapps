<div>
    <h3 class="text-lg font-semibold text-gray-900 mb-3">Rekomendasi Wisata</h3>
    <div class="topics flex flex-wrap justify-start gap-2">
        @if ($categories->isEmpty())
            <p>Tidak ada kategori yang ditemukan.</p>
        @else
            @foreach ($categories as $category)
                <x-posts.category-badge :category="$category" />
            @endforeach
        @endif
    </div>
</div>
