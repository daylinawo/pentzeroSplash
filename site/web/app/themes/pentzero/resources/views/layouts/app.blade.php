<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>
    <div class="wrap" role="document">
      <div class="content">
         <div id="barba-wrapper">
            <div class="barba-container">
              <main class="main">
                @yield('content')
              </main>            
            </div>
        </div>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
    </div>
    @php(do_action('get_footer'))
    @include('partials.footer')
    @php(wp_footer())
  </body>
</html>
