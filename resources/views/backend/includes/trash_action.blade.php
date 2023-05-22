<div class="row">
    <div class="hstack gap-2">
        {!! Form::open(['route' => [$base_route.'restore', $data['id']],'data-value'=>$data['id'],'method'=>'POST', 'class'=>'restore_trash']) !!}
        <button cs-restore-route="{{ route($base_route.'restore',$data['id']) }}" data-value="{{$data['id']}}"
           class="btn btn-outline-success waves-effect waves-light" title="Restore"><i class="ri-repeat-2-fill"></i></button>
        {!! Form::close() !!}

        {!! Form::open(['route' => [$base_route.'remove-trash', $data['id']],'data-value'=>$data['id'],'method'=>'DELETE', 'class'=>'remove_trash']) !!}
            <button type="submit" class="btn btn-outline-danger waves-effect waves-light cs-remove-trash"
                    title="Remove Permanently">
                <i class="ri-delete-bin-6-line"></i></button>
        {!! Form::close() !!}

    </div>
</div>
