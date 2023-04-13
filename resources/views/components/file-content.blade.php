<div>
    @if ($upload->file_type == 'pdf')
        <embed src="{{ asset('storage/' . $upload->path . '#toolbar=0') }}" type="" title="{{ $upload->title }}"
            height="500" width="800">
    @elseif ($upload->file_type == 'xlsx' || $upload->file_type == 'xls' || $upload->file_type == 'csv')
        <embed src="{{ asset('storage/' . $upload->path . '#toolbar=0') }}" type="" title="{{ $upload->title }}"
            height="400" width="400">
    @endif

</div>
