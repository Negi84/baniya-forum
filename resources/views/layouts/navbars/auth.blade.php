<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{ asset('assets/img/logo-small.png') }}">
            </div>
        </a>
        <a href="javascript:void(0)" class="simple-text logo-normal">
            Creative Tim
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ $elementActive == 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'dashboard') }}">
                    <i class="nc-icon nc-bank"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'membership' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'membership') }}">
                    <i class="nc-icon nc-tile-56"></i>
                    <p>Membership</p>
                </a>
            </li>
        </ul>
    </div>
</div>
