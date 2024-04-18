<!DOCTYPE html>
<html lang="ja" class="dark:bg-gray-900">
  @include('web.layouts._head')
  <body class="l-body @yield('page_class')" id="top">
    <div id="stalker"></div>
    @include('web.components._svg')
    @include('web.components._loading')
    <div class="l-base" id="l-base">
      @include('web.layouts._header')
      <main class="l-main">
        <!-- ! start_ページ内コンテンツ ============================== -->
        @yield('content')
        <!-- ! end_ページ内コンテンツ ============================== -->
      </main>
      @include('web.layouts._footer')
    </div>
      <?php
        $url = $_SERVER['REQUEST_URI'];
      ?>
      @if(strstr($url,'works'))
      <script src="{{asset('js/scriptWorks.js')}}"></script>
      @else
        @include('web.components.home._fv_script')
      @endif
      <script src="{{asset('js/scriptDefault.js')}}"></script>
    @include('web.components._flash')
  </body>
</html>
