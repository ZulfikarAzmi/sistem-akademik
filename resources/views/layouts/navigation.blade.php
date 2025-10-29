<!-- Navigation Links -->
<div class="hidden sm:flex sm:items-center sm:space-x-1 ms-10">
    <a href="{{ route('dashboard.admin') }}"
        class="px-4 py-2.5 rounded-lg text-sm font-medium transition-all duration-200 relative
        {{ request()->routeIs('dashboard.admin') ? 'bg-indigo-50 text-indigo-700 font-semibold' : 'text-gray-600 hover:bg-gray-50 hover:text-indigo-600' }}">
        @if(request()->routeIs('dashboard.admin'))
        <span class="absolute -left-1 top-1/2 transform -translate-y-1/2 w-1 h-6 bg-indigo-600 rounded-full"></span>
        @endif
        <i class="fas fa-chart-pie mr-2 text-xs opacity-70"></i>
        Dashboard
    </a>
    
    <a href="{{ url('dashboard/mahasiswa') }}"
        class="px-4 py-2.5 rounded-lg text-sm font-medium transition-all duration-200 relative
        {{ request()->is('dashboard/mahasiswa*') ? 'bg-indigo-50 text-indigo-700 font-semibold' : 'text-gray-600 hover:bg-gray-50 hover:text-indigo-600' }}">
        @if(request()->is('dashboard/mahasiswa*'))
        <span class="absolute -left-1 top-1/2 transform -translate-y-1/2 w-1 h-6 bg-indigo-600 rounded-full"></span>
        @endif
        <i class="fas fa-user-graduate mr-2 text-xs opacity-70"></i>
        Mahasiswa
    </a>
    
    <a href="{{ url('dashboard/prodi') }}"
        class="px-4 py-2.5 rounded-lg text-sm font-medium transition-all duration-200 relative
        {{ request()->is('dashboard/prodi*') ? 'bg-indigo-50 text-indigo-700 font-semibold' : 'text-gray-600 hover:bg-gray-50 hover:text-indigo-600' }}">
        @if(request()->is('dashboard/prodi*'))
        <span class="absolute -left-1 top-1/2 transform -translate-y-1/2 w-1 h-6 bg-indigo-600 rounded-full"></span>
        @endif
        <i class="fas fa-graduation-cap mr-2 text-xs opacity-70"></i>
        Prodi
    </a>
    
    <a href="{{ url('dashboard/dosen') }}"
        class="px-4 py-2.5 rounded-lg text-sm font-medium transition-all duration-200 relative
        {{ request()->is('dashboard/dosen*') ? 'bg-indigo-50 text-indigo-700 font-semibold' : 'text-gray-600 hover:bg-gray-50 hover:text-indigo-600' }}">
        @if(request()->is('dashboard/dosen*'))
        <span class="absolute -left-1 top-1/2 transform -translate-y-1/2 w-1 h-6 bg-indigo-600 rounded-full"></span>
        @endif
        <i class="fas fa-chalkboard-teacher mr-2 text-xs opacity-70"></i>
        Dosen
    </a>
    
    <a href="{{ url('dashboard/mata-kuliah') }}"
        class="px-4 py-2.5 rounded-lg text-sm font-medium transition-all duration-200 relative
        {{ request()->is('dashboard/mata-kuliah*') ? 'bg-indigo-50 text-indigo-700 font-semibold' : 'text-gray-600 hover:bg-gray-50 hover:text-indigo-600' }}">
        @if(request()->is('dashboard/mata-kuliah*'))
        <span class="absolute -left-1 top-1/2 transform -translate-y-1/2 w-1 h-6 bg-indigo-600 rounded-full"></span>
        @endif
        <i class="fas fa-book-open mr-2 text-xs opacity-70"></i>
        Mata Kuliah
    </a>
</div>