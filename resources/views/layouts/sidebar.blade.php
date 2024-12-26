<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            Dashboard <span> UI</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">Sensor</li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#emails" role="button" aria-expanded="false"
                    aria-controls="emails">
                    <i class="link-icon" data-feather="pie-chart"></i>
                    <span class="link-title">Sensor</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="emails">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('MQ135') }}" class="nav-link {{ Request::is('MQ135') ? 'active' : '' }}">MQ-135</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('PHMeter') }}" class="nav-link">Ph Sensor</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('Turbidity') }}" class="nav-link">Turbidity Sensor</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('TDS') }}" class="nav-link">TDS Sensor</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('Temperature') }}" class="nav-link">Temperature Sensor</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
