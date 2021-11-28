<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        @yield('title')
        {{ !empty($__env->yieldContent('title')) ? ' | ' : '' }}
        {{ $page->site->title }}
    </title>

    @include('_partials.head.favicon')
    @include('_partials.head.meta')
    @include('_partials.cms.identity_widget')

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>
<body>
    <section>
        <header>
            <nav>
            <a href="https://www.gokks.com/"><img src="https://user-images.githubusercontent.com/88181976/143770537-bb16c15e-d1f8-4558-b571-42d88c4cefd3.png" alt="GOKKS" width="75" height="75"></a>
            </nav>
        </header>

        <article>
            <section>
                @yield('content')
            </section>
        </article>

        <footer>
             <small><center>
             <a href="https://www.gokks.com/about/">About</a> &nbsp &nbsp <a href="https://www.gokks.com/contact/">Contact</a> &nbsp &nbsp <a href="https://www.instagram.com/gokks.official/">Instagram</a><br>
             
             <a href="https://www.gokks.com/"><img src="https://user-images.githubusercontent.com/88181976/143770961-4d736bb1-1896-4311-9e31-5ee095e81317.png" alt="GOKKS" width="50" height="50"></a>
             </center></small>
        </footer>
    </section>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @includeWhen($page->production, '_partials.analytics')
    @include('_partials.cms.identity_redirect')
</body>
</html>
