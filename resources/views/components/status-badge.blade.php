<div class="inline-flex items-center gap-2 rounded-full border px-3 py-1 text-sm font-semibold shadow-sm
    @if ($type === 'Tidak Aktif')
        border-gray-200 bg-gray-50 text-gray-700
    @else
        border-sky-200 bg-sky-50 text-sky-700
    @endif">
    <div class="h-2.5 w-2.5 rounded-full
        @if ($type === 'Tidak Aktif')
            bg-gray-500
        @else
            bg-sky-500
        @endif"></div>
    {{ $type === 'Tidak Aktif' ? 'Tidak Aktif' : 'Aktif' }}
</div>