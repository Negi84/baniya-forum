
<div class="flas-message" style="position: fixed;
left: 3rem;
z-index: 9999;
bottom: 2rem;
width: 20rem;">
@foreach (session('flash_notification', collect())->toArray() as $message)
@if ($message['overlay'])
    @include('flash::modal', [
        'modalClass' => 'flash-modal',
        'title' => $message['title'],
        'body' => $message['message'],
    ])
@else
    <div class="alert
                alert-{{ $message['level'] }}
                {{ $message['important'] ? 'alert-important' : '' }}"
        role="alert">
        <button type="button" class="close closebtn" data-dismiss="alert" aria-hidden="true"
            onclick="this.parentElement.style.display='none';">&times;</button>
        {!! $message['message'] !!}
    </div>
@endif
@endforeach

</div>

{{ session()->forget('flash_notification') }}
