@component('layouts.app', [
    'title' => $title,
])
    <section class="sidebar waves">
        <nav class="sidebar__contents">
            <div class="sidebar__logo">
                <a href="/">
                    @include('svg.logo-white')
                </a>
            </div>
            <div class="sidebar__home">
                <a href="{{ url('/') }}">Home</a>
            </div>
            {{ app('navigation')->menu()->addClass('menu--sidebar') }}
        </nav>
        <footer class="sidebar__footer">
            @auth('web')
                <form method="POST" action="{{ route('logout') }}">
                    {{ csrf_field() }}
                    <button type="submit" class="sidebar__auth" title="Log out">
                        👋
                    </button>
                </form>
            @endauth
            <a href="https://www.bubbstore.com.br" target="spatie">
                © bubb store
            </a>
        </footer>
    </section>
    <span class="sidebar__toggler js-sidebar-toggle" title="Toggle menu"></span>
    <main class="main">
        <div class="article">
            {{ $contents }}
        </div>
        <footer class="article__footer">
            <p>Spotted a typo? See something wrong? <a href="{{ $editUrl }}" target="_blank">Edit this page on GitHub</a>.</p>
        </footer>
    </main>
@endcomponent
