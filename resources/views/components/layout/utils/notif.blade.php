@foreach(['success', 'warning', 'danger','primary'] as $status)
    @if(session($status))
        <div class="alert alert-{{$status}} alert-dismissible alert-alt solid fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>{{ session($status) }}</strong>
        </div>
    @endif
@endforeach

<script>
    setTimeout(() => {
        $('.alert').hide('slow')
    }, 2000);
</script>
