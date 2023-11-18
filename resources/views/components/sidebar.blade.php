<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">CBT TPA</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">CBT</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>

            <li class="menu-header">Manage User</li>
            <li class="nav-item dropdown">
                <a href="{{ route('user.index') }}" class="nav-link">
                    <i class="fas fa-fire"></i><span>User</span>
                </a>
            </li>

            <li class="menu-header">Manage Question</li>
            <li class="nav-item dropdown">
                <a href="{{ route('user.index') }}" class="nav-link">
                    <i class="fas fa-fire"></i><span>Question</span>
                </a>
            </li>
        </ul>

        <div class="hide-sidebar-mini mt-4 mb-4 p-3">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> About This App
            </a>
        </div>
    </aside>
</div>
