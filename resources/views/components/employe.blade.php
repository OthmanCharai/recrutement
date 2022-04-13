<div class="col-sm-12 col-lg-4 col-xl-3 dn-smd">
    <div class="user_profile">
        <div class="media">
              <img src="{{ $image }}" class="align-self-start mr-3 rounded-circle" alt="e1.png">
              <div class="media-body">
                <h5 class="mt-0">Hi, {{ $name }}</h5>
                <p>{{ $city }}, {{ $country }}</p>
            </div>
        </div>
    </div>
    <div class="dashbord_nav_list">
        <ul>
            <li class=" {{ request()->is('employes/dashboard') ? 'active' : '' }}"><a href="{{ route('employes.dashboard') }}"><span class="flaticon-dashboard"></span> Dashboard</a></li>
            <li class=" {{ request()->is('employes/profile') ? 'active' : '' }}"><a href="{{ route('employes.profile') }}"><span class="flaticon-profile"></span> Company Profile</a></li>
            <li class=" {{ request()->is('employes/new_job') ? 'active' : '' }}"><a href="{{ route('employes.job') }}"><span class="flaticon-resume"></span> Post a New Job</a></li>
            <li class=" {{ request()->is('employes/mange_job') ? 'active' : '' }}"><a href="{{ route('employes.manage.job') }}"><span class="flaticon-paper-plane"></span> Manage Jobs</a></li>

            <li class=" {{ request()->is('employes/mange_job') ? 'active' : '' }}"><a href="{{ route('employes.change.password') }}"><span class="flaticon-locked"></span> Settings</a></li>
            <li class="{{ request()->is('admin/candidate/1') ? 'active' : '' }}">
                <a  href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                    <span class="flaticon-logout"></span> Logout
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </a>
            </li>
        </ul>
    </div>
</div>
