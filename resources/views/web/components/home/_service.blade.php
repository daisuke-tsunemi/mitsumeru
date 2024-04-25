<section class="pService p-section">
  <div class="p-section__head">
    <div class="l-container">
      <h2 class="p-section__head--title c-txt__xl">サービスについて</h2>
    </div>
  </div>
  <div class="p-section__body">
    <div class="l-container">
      <div class="l-grid--4 u-gap24">
        <?php
          function serviceList(){
          return [
            ['img' => '/img/content/service_icon_1.png',
              'title' => '山田',
              'description' => 'サービスについてサービスについてサービスについてサービスについてサービスについて'
            ],
            ['img' => '/img/content/service_icon_2.png',
              'title' => '山田',
              'description' => 'サービスについてサービスについてサービスについてサービスについてサービスについて'
            ],
            ['img' => '/img/content/service_icon_3.png',
              'title' => '山田',
              'description' => 'サービスについてサービスについてサービスについてサービスについてサービスについて'
            ],
            ['img' => '/img/content/service_icon_4.png',
              'title' => '山田',
              'description' => 'サービスについてサービスについてサービスについてサービスについてサービスについて'
            ],
            ['img' => '/img/content/service_icon_5.png',
              'title' => '山田',
              'description' => 'サービスについてサービスについてサービスについてサービスについてサービスについて'
            ],
            ['img' => '/img/content/service_icon_6.png',
              'title' => '山田',
              'description' => 'サービスについてサービスについてサービスについてサービスについてサービスについて'
            ],
            ['img' => '/img/content/service_icon_7.png',
              'title' => '山田',
              'description' => 'サービスについてサービスについてサービスについてサービスについてサービスについて'
            ],
            ['img' => '/img/content/service_icon_8.png',
              'title' => '山田',
              'description' => 'サービスについてサービスについてサービスについてサービスについてサービスについて'
            ],
          ];
          }
        ?>
        @php($serviceList = serviceList())
        @foreach($serviceList as $service)
        <div class="l-grid--item bg-fff">
          <div class="l-grid--item__body">
            <div class="u-align">
              <div class="pService__img" style="flex:0 0 50px">
                <img src="{{ $service['img'] }}" alt="{{ $service['title'] }}のアイコン" width="50" height="50">
              </div>
              <div class="pService__text">
                <h3 class="c-txt__md">{{ $service['title'] }}</h3>
              </div>
              <p class="c-txt__sm">{{ $service['description'] }}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <div class="p-section__foot" style="background:url(../img/bg/bg_service.webp) no-repeat center;height:10rem">
  </div>
</section>