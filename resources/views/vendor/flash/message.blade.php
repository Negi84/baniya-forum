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
            <div class="bs-toast toast fade show bg-{{ $message['level'] }} {{ $message['important'] ? 'alert-important' : '' }}"
                role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <i class="bx bx-bell me-2"></i>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    <div class="toast-body" style="padding: 0.5rem 1rem;">
                        {!! $message['message'] !!}
                    </div>
                </div>
            </div>
        @endif
    @endforeach

</div>

{{ session()->forget('flash_notification') }}
