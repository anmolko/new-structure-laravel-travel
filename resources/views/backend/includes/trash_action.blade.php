<div class="row">
    <div class="hstack gap-2">
        <button cs-restore-route="{{ route($base_route.'restore',$data['id']) }}" data-value="{{$data['id']}}"
           class="btn btn-outline-success waves-effect waves-light" title="Restore"><i class="ri-repeat-2-fill"></i></button>
        <a class="btn btn-outline-danger waves-effect waves-light cs-remove-trash" title="Remove Permanently"
           cs-delete-route="{{ route($base_route.'remove-trash',$data['id']) }}" data-value="{{$data['id']}}">
            <i class="ri-delete-bin-6-line"></i></a>
    </div>
</div>
