<div class="col-sm-12 col-lg-4 col-xl-3 dn-smd">
    <div class="user_profile">
        <div class="media">
              <img src="{{ $image }}" class="align-self-start mr-3 rounded-circle" alt="8.jpg">
              <div class="media-body">
                <h5 class="mt-0">Hi, {{ $name }}</h5>
                <p>{{ $city }}, {{ $country }}</p>
            </div>
        </div>
    </div>
    <div class="dashbord_nav_list">
        <ul>
            <li class=" {{ request()->is('admin/candidate') ? 'active' : '' }}"><a href="{{ route("candidate.dashboard" ) }}"><span class="flaticon-dashboard"></span> Tablica rozdzielcza</a></li>
            <li class="{{ request()->is('profile') ? 'active' : '' }}"><a href="{{ route('candidate.show.profile',) }}"><span class="flaticon-profile"></span> Profil</a></li>
            <li class="{{ request()->is('applied_jobd') ? 'active' : '' }}" ><a href="{{ route('candidate.applied_jobs') }}"><span class="flaticon-paper-plane"></span> Dotyczy pracy</a></li>
            <li class="{{ request()->is('cv') ? 'active' : '' }}"><a href="{{ route('candidate.cv') }}"><span class="flaticon-analysis"></span> CV Manager</a></li>
			<li class="{{ request()->is('favorite') ? 'active' : '' }}">
                <a  href="{{ route('candidate.favorite') }}"><span class="flaticon-favorites"></span> Favourite Jobs</a>
            </li>

            <li class="{{ request()->is('candidate/change_password') ? 'active' : '' }}"><a href="{{ route('candidate.change_password') }}"><span class="flaticon-locked"></span> Change Password</a></li>
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
            <li class="{{ request()->is('admin/candidate/1') ? 'active' : '' }}"><a href="#"><span class="flaticon-rubbish-bin"></span> Delete Profile</a></li>
        </ul>
    </div>
</div>
