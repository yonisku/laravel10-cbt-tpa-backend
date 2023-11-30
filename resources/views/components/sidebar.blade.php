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
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="fas fa-fire"></i><span>Dashboard</span>
                </a>
            </li>

            <li class="menu-header">Manage User</li>
            <li class="nav-item dropdown">
                <a href="{{ route('user.index') }}" class="nav-link">
                    <i class="fas fa-fire"></i><span>User</span>
                </a>
            </li>

            <li class="menu-header">Manage Question</li>
            <li class="nav-item dropdown">
                <a href="{{ route('question.index') }}" class="nav-link">
                    <i class="fas fa-fire"></i><span>Question</span>
                </a>
            </li>
        </ul>
    </aside>
</div>
