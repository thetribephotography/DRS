<div>
    @if ($upload->file_type == 'pdf')
        <embed src="{{ asset('storage/' . $upload->path . '#toolbar=0') }}" type="" title="{{ $upload->title }}"
            height="800" width="800">
    @endif
</div>
