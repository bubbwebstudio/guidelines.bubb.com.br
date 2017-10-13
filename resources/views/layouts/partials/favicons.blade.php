<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="/manifest.json">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#007593">
<meta name="theme-color" content="#007593">

<meta property="og:image" content="@yield('ogImage')"/>
<meta property="og:title" content="@yield('ogTitle')"/>
<meta property="og:description" content="@yield('description')"/>
<meta property="og:url" content="{{ Request::getUri() }}"/>
