<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{ asset('images/64572.png')}}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
                    <div class="email">{{ Auth::user()->email }}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="fa fa-chevron-down" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"></i>
                        <ul class="dropdown-menu pull-right">
                        @if(Auth::user()->role === '3')
                        <li><a href="{{ route('profile.index') }}"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                        @endif
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="material-icons">input</i>{{ __('Logout') }}>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="{{ url('/home')}}">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    @if(Auth::user()->role === '1' || Auth::user()->role === '2')
                    <li>
                        <a href="{{ url('/app/dashboard')}}">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/app/transaksi')}}">
                            <i class="material-icons">payment</i>
                            <span>Transaksi</span>
                        </a>
                    </li>
                    @if(Auth::user()->role === '1')
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Kelola Data</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{ route('petugas.index')}}">
                                    <span>Data Petugas</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('siswa.index')}}">
                                    <span>Data Siswa</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('kelas.index')}}">
                                    <span>Data Kelas</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('report') }}">
                            <i class="material-icons">event</i>
                            <span>Report</span>
                        </a>
                    </li>
                    @endif
                    @endif
                    <li>
                        <a href="{{ route('help')}}">
                            <i class="material-icons">error</i>
                            <span>Help</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
        </aside>
        <!-- #END# Left Sidebar -->