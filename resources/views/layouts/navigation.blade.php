<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        {{_('dashboard')}}
    </x-nav-link> 

    <x-nav-link :href="route('projects.index')" :active="request()->routeIs('projects.index')">
        {{_('Proyectos')}}
    </x-nav-link> 

</div>