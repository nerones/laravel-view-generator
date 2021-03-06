<div id="main-menu">
  <nav class="navbar navbar-default">
    <div class="">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                                                                                       aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{url('/')}}" title="@lang('link.home')">
            <img src="{{asset('images/logo.png')}}" alt="@lang('messages.sitename')" />
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            @include('layouts.partial.menu')
          </ul>
        </div>
      </div>
    </div>
  </nav>
</div>
