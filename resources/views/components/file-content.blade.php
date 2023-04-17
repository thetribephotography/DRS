<div>
    @if ($upload->file_type == 'pdf')
        <embed src="{{ asset('storage/' . $upload->path . '#toolbar=0') }}" type="" title="{{ $upload->title }}"
            height="500" width="800">
    @elseif ($upload->file_type == 'xlsx' || $upload->file_type == 'xls' || $upload->file_type == 'csv')
        <img class="" src="{{ asset('images/excel.png') }}" alt="">
    @elseif ($upload->file_type == 'rar' || $upload->file_type == 'zip')
        <img class="w-[41.6rem]" src="{{ asset('images/zip.jpg') }}" alt="">
    @endif

</div>
