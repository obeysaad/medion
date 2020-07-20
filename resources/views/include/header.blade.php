                <nav id="nav-menu-container">
                    <ul class="nav-menu">

                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">نسجيل</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">نسجيل حساب</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logouts') }}">نسجيل خروج</a>
                            </li>
                        @endguest

                        <li><a href="{{route('about')}}" style="font-size:1.2em;">من نحن</a></li>
                        <li><a href="{{route('contact')}}" style="font-size:1.2em;">تواصل معانا</a></li>
                        <li><a href="{{route('doctor')}}" style="font-size:1.2em;">الأطباء</a></li>
                        <li><a href="{{route('clini')}}" style="font-size:1.2em;">العيادات</a></li>
                        <li class="menu-active" ><a href="{{route('land')}}" style="font-size:1.2em;">الرئيسية</a></li>


                    </ul>
                </nav>

