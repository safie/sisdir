<aside class="menu">
    <p class="menu-label">
        
    </p>
    <ul class="menu-list">
        <li><a> Dashboard</a></li>
        <li><a href="{{ url('/seksyen') }}">Seksyen</a>
            <ul>
                <li><a href="{{ url('/seksyen/create') }}">Cipta Seksyen Baru</a></li>
            </ul> 
        </li> 
        <li><a href="{{ url('/unit') }}">Unit</a>
            <ul>
                <li><a href="{{ url('/unit/create') }}">Cipta Unit Baru</a></li>
            </ul> 
        </li>
        <li><a>Staf</a>
            <ul>
                <li><a href="{{ url('/') }}">Cipta Staf Baru</a></li>
            </ul> 
        </li>

    </ul>
</aside>