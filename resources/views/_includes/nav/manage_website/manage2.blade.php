<section class="hero is-link">
  <div class="hero-body">
    <div class="container">
      <div class="columns is-vcentered">
        <div class="column">
          {{-- <p class="title" style="text-shadow: 3.5px 2px 0 #fff;"> --}}
          <p class="title">
            Documentation
          </p>
          <p class="subtitle">
            Everything you need to <strong>create a website</strong> with Bulma
          </p>
        </div>
        <div class="column is-narrow">
          <div id="carboncontainer">
            <div id="carbon" class="box">

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Hero footer: will stick at the bottom -->
  <div class="hero-foot">
    <div class="container">
    <nav class="tabs is-boxed">

        <ul>
          <li class="{{Nav::isRoute('manage_website.dashboard')}}">
            <a href="{{route('manage_website.dashboard')}}" >แผงควบคุม</a>
          </li>
          <li class="{{Nav::hasSegment(['tenders', 'cate_tenders'], 2)}}">
            <a href="{{route('tenders.index')}}">ประกาศจัดซื้อจัดจ้าง</a>
          </li>
        </ul>

      </nav>
    </div>
    </div>
</section>

@if (Nav::isRoute('manage.dashboard'))
  {{-- <nav class="navbar has-shadow">
  <div class="container">
    <div class="navbar-tabs">
      <a class="navbar-item is-tab " href="https://bulma.io/documentation/layout/container/">
        Container
      </a>
      <a class="navbar-item is-tab " href="https://bulma.io/documentation/layout/level/">
        Level
      </a>
      <a class="navbar-item is-tab " href="https://bulma.io/documentation/layout/media-object/">
        Media Object
      </a>
      <a class="navbar-item is-tab is-active" href="https://bulma.io/documentation/layout/hero/">
        Hero
      </a>
      <a class="navbar-item is-tab " href="https://bulma.io/documentation/layout/section/">
        Section
      </a>
      <a class="navbar-item is-tab " href="https://bulma.io/documentation/layout/footer/">
        Footer
      </a>
      <a class="navbar-item is-tab " href="https://bulma.io/documentation/layout/tiles/">
        Tiles
      </a>
    </div>
    </div>
  </nav> --}}
@elseif (Nav::hasSegment(['tenders', 'cate_tenders'], 2))

  <nav class="navbar has-shadow">
    <div class="container">
      <div class="navbar-tabs is-success">
      <a href="{{route('tenders.index')}}" class="navbar-item is-tab {{Nav::isResource('manage-website/tenders')}}">
        ประกาศจัดซื้อจัดจ้าง
      </a>
      <a href="{{route('cate_tenders.index')}}" class="navbar-item is-tab {{Nav::isRoute('cate_tenders.index')}}">
        หมวดหมู่
      </a>
    </div>
    </div>
  </nav>

  @else

@endif
