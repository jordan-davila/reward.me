<nav class="w_p_100 m_t_45 m_b_45">
	<div class="logo"><i class="fas fa-gift m_r_10"></i>reward.me</div>
	<ul class="flex_r">
		<li><a class="{{ Request::is('home') ? 'active' : '' }}" href="{{ url('home') }}">Tasks</a></li>
		<li><a class="{{ Request::is('leaderboard') ? 'active' : '' }}" href="{{ route('leaderboard') }}">Leaderboard</a></li>
		<li class="font_grey">&#124;</li>
		<li><a href="#">About</a></li>
		<li><a href="#">Contacts</a></li>
		<li><a href="#">FAQs</a></li>
		<div class="user_icon_container">
			<div class="user_icon">{{ Auth::user()->usernameInitials() }}</div>
			<div class="username">{{ Auth::user()->username }}</div>
			<ul class="dropdown d_flex flex_c">
					<li><a href="{{ route('settings.profile') }}">settings</a></li>
					<li><a href="{{ route('stats') }}">stats</a></li>
					<li>
						<a href="{{ route('logout') }}" onclick="event.preventDefault();
									  document.getElementById('logout-form').submit();">
						 {{ __('logout') }}
						 </a>
					</li>
			
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>
				</ul>
		</div>
	</ul>
</nav>