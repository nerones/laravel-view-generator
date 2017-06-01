<li class="{{ (Request::is('/'))? 'active': '' }}" title="@lang('messages.nav.home')">
  <a href="{{ url('/') }}">
    @lang('messages.nav.home')
  </a>
</li>
