<li class="nav-item">
    <a href="{{ route('mahasiswas.index') }}"
       class="nav-link {{ Request::is('mahasiswas*') ? 'active' : '' }}">
        <p>Mahasiswas</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('nilais.index') }}"
       class="nav-link {{ Request::is('nilais*') ? 'active' : '' }}">
        <p>Nilais</p>
    </a>
</li>


