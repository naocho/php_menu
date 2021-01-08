<header>
    <div class="login-style">
      <div>
        <a class="prof"> プロフィール </a>
      </div>
      
        <div class="login-center">
            @if (Route::has('login'))
                    @auth
                    <a href="{{ url('/home') }}" class="login-right">マイページ</a>
                    <a href={{ route('logout') }} onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();" class="login-right">
                              ログアウト
                    </a>
                    <a class="login-right" href="{{ url('Images/index') }}">投稿</a>
                    
                    <form id='logout-form' action={{ route('logout')}} method="POST" style="display: none;">
                    
                    @csrf
                    
                    @else
                        <a class="login-right" href="{{ route('login') }}">ログイン</a>
                        @if (Route::has('register'))
                            <a class="login-right2" href="{{ route('register') }}">新規登録</a>
                        @endif
                    @endauth
            @endif
        </div> 
  </header>