<!-- START SIDEBAR-->
<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
                <img src="/admin/img/admin-avatar.png" width="45px" />
            </div>
            <div class="admin-info">
                @auth
                    <?php if(auth()->user()->id_role == "1") { ?>
                    <div class="font-strong">Lentera</div>
                    <?php } ?>
                    <?php if(auth()->user()->id_role == "1") { ?>
                    <small>Administrator</small>
                    <?php } else if(auth()->user()->id_role == "2") { ?>
                    <small>Guru</small>
                    <?php } ?>
                @endauth
            </div>
        </div>
        <ul class="side-menu metismenu">
            <li>
                <a class="{{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard"><i
                        class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
            <li class="heading">MENU</li>
            <li>
                <a class="{{ Request::is('guru') ? 'active' : '' }}" href="/guru"><i
                        class="sidebar-item-icon fa fa-user-graduate"></i>
                    <span class="nav-label">Guru</span>
                </a>
            </li>
            <li>
                <a class="{{ Request::is('siswa') ? 'active' : '' }}" href="/siswa"><i
                        class="sidebar-item-icon fa fa-users"></i>
                    <span class="nav-label">Siswa</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
<!-- END SIDEBAR-->
