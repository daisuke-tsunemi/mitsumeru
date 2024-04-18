<div class="l-frame">
  <div class="p-frame">
    @isset($head)
      <div class="p-frame__head">
      </div>
    @endisset
    <div class="p-frame__body">
      <div class="l-grid--2">
        <div class="l-grid--item left">
          <div class="l-grid--item__head">
            <h1 class="c-txt__lg">@yield('title')</h1>
          </div>
          <div class="l-grid--item__body"></div>
          <div class="l-grid--item__foot"></div>
        </div>
        <div class="l-grid--item right">
          <div class="l-grid--item__head"></div>
          <div class="l-grid--item__body"></div>
          <div class="l-grid--item__foot"></div>
        </div>
      </div>
    @isset($body)
        {{ $body ?: '' }}
    @endisset
    </div>
    @isset($foot)
      <div class="p-frame__foot">
        {{ $foot ?: '' }}
      </div>
    @endisset
  </div>
</div>
