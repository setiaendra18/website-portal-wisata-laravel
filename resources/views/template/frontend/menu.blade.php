<nav id="navbar" class="navbar">
    <ul>
        <li><a href="{{route('home')}}" class="active">Beranda</a></li>
        <li class="dropdown"><a href="#"><span>Destinasi Wisata</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                @foreach ($data_kategori as $data)
                    <li><a href="{{ route('kategori-search', $data->id) }}">{{ $data->nama_kategori }}</a></li>
                @endforeach
            </ul>
        </li>
        <li><a href="{{route('event')}}">Event Wisata</a></li>
        <li><a href="#">Sesssion aktif sebagai ({{ Auth::user()->name }})</a></li>
       
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->
