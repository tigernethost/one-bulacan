<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}" dir="{{ config('backpack.base.html_direction') }}">

<head>
  @include(backpack_view('businessPortal.inc.head'))

</head>

<body class="{{ config('backpack.base.body_class') }}">

  @include(backpack_view('businessPortal.inc.main_header'))

  <div class="app-body">

    @include(backpack_view('businessPortal.inc.sidebar'))

    <main class="main pt-2">

       @includeWhen(isset($breadcrumbs), backpack_view('businessPortal.inc.breadcrumbs'))

       @yield('header')

        <div class="container-fluid animated fadeIn">

          @yield('before_content_widgets')

          @yield('content')
          
          @yield('after_content_widgets')

        </div>

    </main>

  </div><!-- ./app-body -->

  <footer class="{{ config('backpack.base.footer_class') }}">
    @include(backpack_view('businessPortal.inc.footer'))
  </footer>

  @yield('before_scripts')
  @stack('before_scripts')

  @include(backpack_view('businessPortal.inc.scripts'))

  @yield('after_scripts')
  @stack('after_scripts')
</body>
</html>