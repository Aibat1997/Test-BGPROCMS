<aside class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li> 
                    <a class="waves-effect waves-dark" href="/admin/programms" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Программы</span></a>
                </li>
                <li> 
                    <a class="waves-effect waves-dark" href="/admin/news" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Новости</span></a>
                </li>
                <li> 
                    <a class="waves-effect waves-dark" href="/admin/users" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Пользователи</span></a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="sidebar-footer">
        <a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
        <a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
        <a href="{{ route('logout') }}" class="link" data-toggle="tooltip" title="Logout" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <i class="mdi mdi-power"></i>
        </a> 

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</aside>