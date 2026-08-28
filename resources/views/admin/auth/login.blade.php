@extends('admin.layouts.app', ['guest' => true])

@section('content')
<form class="auth-card" method="POST" action="{{ route('admin.login.submit') }}" id="loginForm">
  @csrf
  <div class="auth-brand">
    <div class="brand-mark">J</div>
    <div><strong>JezdanTech</strong><span>ERP CONSOLE</span></div>
  </div>
  <h1 class="auth-title">Sign in to your console</h1>
  <p class="auth-sub">Manage clients, projects, finances and operations.</p>

  <div class="auth-err" id="loginErr">{{ $errors->first('email') ?: '' }}</div>

  <div class="field">
    <label class="field-label" for="email">Email address</label>
    <input class="input" type="email" id="email" name="email" value="{{ old('email', 'admin@jezdantech.co.tz') }}" required autofocus>
  </div>
  <div class="field">
    <label class="field-label" for="password">Password</label>
    <div class="input-wrap">
      <input class="input" type="password" id="password" name="password" value="password" required>
      <button type="button" class="inp-eye" onclick="togglePw()" aria-label="Toggle password">
        <svg id="eyeIcon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7-10-7-10-7z"/><circle cx="12" cy="12" r="3"/></svg>
      </button>
    </div>
  </div>
  <div class="auth-row">
    <label style="display:flex;align-items:center;gap:8px"><input type="checkbox" class="checkbox" name="remember"> Remember me</label>
    <a href="#">Forgot password?</a>
  </div>
  <button type="submit" class="btn btn-accent" style="width:100%;height:46px;font-size:14.5px">Sign in</button>

  <div class="auth-demo">
    <b>Demo access:</b> admin@jezdantech.co.tz &nbsp;/&nbsp; password — values are prefilled above.
  </div>
</form>
@endsection

@section('app_scripts')
function togglePw(){
  const i=document.getElementById('password');
  i.type=(i.type==='password')?'text':'password';
}
@endsection
