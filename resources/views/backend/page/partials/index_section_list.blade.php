@if(count($params['page']->pageSections)>0)

    @foreach($params['page']->pageSections as $section)
        <span class="text-primary">{{ucfirst($section->title)}} {{ $loop->last ? '':', ' }}</span>
    @endforeach
@else
    <span> No sections chosen </span>
@endif
