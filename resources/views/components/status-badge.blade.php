<div class="inline-flex items-center gap-2 rounded-full border px-3 py-1 text-sm font-semibold shadow-sm
    @if ($type === 'TIDAK AKTIF')
        border-gray-200 bg-gray-50 text-gray-700
    @else
        border-sky-200 bg-sky-50 text-sky-700
    @endif">
    <div class="h-2.5 w-2.5 rounded-full
        @if ($type === 'TIDAK AKTIF')
            bg-gray-500
        @else
            bg-sky-500
        @endif"></div>
    {{ $type === 'TIDAK AKTIF' ? 'Tidak Aktif' : 'Aktif' }}
</div>