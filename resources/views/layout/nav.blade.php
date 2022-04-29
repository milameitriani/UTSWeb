<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <li class="{{request()-> is('/') ? 'active' : ''}}"><a href="/"><i class="fa fa-home"></i> <span>HOME</span></a></li>
        @if (auth()->user()->level==1)
        <li class="{{request()-> is('info') ? 'active' : ''}}"><a href="/info"><i class="fa fa-group"></i> <span>INFO</span></a></li>
        <li class="{{request()-> is('data penduduk') ? 'active' : ''}}"><a href="/datapenduduk"><i class="fa fa-desktop"></i> <span>DATA PENDUDUK</span></a></li>
        <li class="{{request()-> is('data barang') ? 'active' : ''}}"><a href="/databarang"><i class="fa fa-desktop"></i> <span>DATA BARANG</span></a></li>
        <li class="{{request()-> is('data peminjaman') ? 'active' : ''}}"><a href="/datapeminjaman"><i class="fa fa-desktop"></i> <span>DATA PEMINJAMAN</span></a></li>

        
        
        @elseif (auth()->user()->level==2)
        <li class="{{request()-> is('info') ? 'active' : ''}}"><a href="/info"><i class="fa fa-group"></i> <span>INFO</span></a></li>
        <li class="{{request()-> is('data barang') ? 'active' : ''}}"><a href="/databarang"><i class="fa fa-desktop"></i> <span>DATA BARANG</span></a></li>
        <li class="{{request()-> is('data peminjaman') ? 'active' : ''}}"><a href="/datapeminjaman"><i class="fa fa-desktop"></i> <span>DATA PEMINJAMAN</span></a></li>
        <li class="{{request()-> is('data pengembalian') ? 'active' : ''}}"><a href="/datapengembalian"><i class="fa fa-desktop"></i> <span>DATA PENGEMBALIAN</span></a></li>
        @endif