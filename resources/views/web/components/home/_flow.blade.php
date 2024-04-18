<section class="pFlow p-section">
  <div class="l-container">
    <div class="p-section__head">
      <h2 class="p-section__head--title c-txt__xl">ご利用の流れ</h2>
    </div>
    <div class="p-section__body">
      <div class="l-grid--4 u-gap40" align='center'>
        <?php
          function flowList(){
          return [
            ['img' => '/public/img/content/flow_1.webp', 'title' => 'Flow1', 'content' => 'content1contentcontentcontent'],
            ['img' => '/public/img/content/flow_2.webp', 'title' => 'Flow2', 'content' => 'content2contentcontentcontent'],
            ['img' => '/public/img/content/flow_3.webp', 'title' => 'Flow3', 'content' => 'content3contentcontentcontent'],
            ['img' => '/public/img/content/flow_4.webp', 'title' => 'Flow4', 'content' => 'content4contentcontentcontent'],
            ['img' => '/public/img/content/flow_5.webp', 'title' => 'Flow5', 'content' => 'content5contentcontentcontent'],
            ['img' => '/public/img/content/flow_6.webp', 'title' => 'Flow6', 'content' => 'content6contentcontentcontent'],
            ['img' => '/public/img/content/flow_7.webp', 'title' => 'Flow7', 'content' => 'content7contentcontentcontent'],
          ];
          }
        ?>
        @php($flowList = flowList())
          @foreach($flowList as $flow)
          <div class="l-grid--item align-center" align='center'>
            <img src="{{ $flow['img'] }}" alt="{{ $flow['title'] }}のイメージ" class="img--circle bg-fff" width="120" height="120">
            <h3 class="c-txt__md">{{ $flow['title'] }}</h3>
            <p class="c-txt__sm">{{ $flow['content'] }}</p>
          </div>
        @endforeach
      </div>
    </div>
    <div class="p-section__foot" align='center'>
      <a href="#contact" class="c-btn lg">お問い合わせへ</a>
    </div>
  </div>
</section>