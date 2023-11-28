<header class="navbar-expand-md">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar">
            <div class="container-xl" style="text-align: center;">
                <ul class="navbar-nav">
                    <li class="nav-item @yield('home')">
                        <a class="nav-link" href="{{route('home')}}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Home
                            </span>
                        </a>
                    </li>
                    <li class="nav-item @yield('deposit')">
                        <a class="nav-link" href="{{route('deposit')}}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cloud-upload" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7h-1" />
                                    <path d="M9 15l3 -3l3 3" />
                                    <path d="M12 12l0 9" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Deposit
                            </span>
                        </a>
                    </li>
                    <li class="nav-item @yield('withdraw')">
                        <a class="nav-link" href="{{route('withdraw')}}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cloud-download" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M19 18a3.5 3.5 0 0 0 0 -7h-1a5 4.5 0 0 0 -11 -2a4.6 4.4 0 0 0 -2.1 8.4" />
                                    <path d="M12 13l0 9" />
                                    <path d="M9 19l3 3l3 -3" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Withdraw
                            </span>
                        </a>
                    </li>
                    <li class="nav-item @yield('transfer')">
                        <a class="nav-link" href="{{route('transfer')}}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrows-transfer-down" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M17 3v6" />
                                    <path d="M10 18l-3 3l-3 -3" />
                                    <path d="M7 21v-18" />
                                    <path d="M20 6l-3 -3l-3 3" />
                                    <path d="M17 21v-2" />
                                    <path d="M17 15v-2" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Transfer
                            </span>
                        </a>
                    </li>
                    <li class="nav-item @yield('statement')">
                        <a class="nav-link" href="{{route('statement')}}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clipboard-text" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                                    <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                    <path d="M9 12h6" />
                                    <path d="M9 16h6" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Statement
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('logout')}}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                                    <path d="M9 12h12l-3 -3" />
                                    <path d="M18 15l3 -3" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Logout
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>