<x-layouts.header>
  @yield('scripts')
</x-layouts.header>
<x-layouts.sidebar/>
<x-layouts.top-header/>
<x-layouts.blank-body>
  @yield('content')
</x-layouts.blank-body>
<x-layouts.footer/>