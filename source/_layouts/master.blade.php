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
             <a href="https://www.miomio.in/"><img src="https://user-images.githubusercontent.com/88181976/155880011-a84c2722-64da-4112-b3b3-3a7c4dba9041.png" alt="MIOMIO" width="55" height="55">&nbsp
           <img src="https://user-images.githubusercontent.com/88181976/155539273-650e05e9-765a-49ca-aa19-2788e14fc856.png" alt="MIOMIO" width="55" height="55"></a>
          </nav>
        </header>

        <article>
            <section>
                @yield('content')
            </section>
        </article>

        <footer>
         <small><center>
             <a href="https://www.instagram.com/miomio.in">Instagram</a>
             &nbsp&nbsp
             <a href="https://www.miomio.in/contact/">Contact us</a>
             <br>
             &copy; MIOMIO
        </center></small>
        </footer>
    </section>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @includeWhen($page->production, '_partials.analytics')
    @include('_partials.cms.identity_redirect')
</body>
</html>
