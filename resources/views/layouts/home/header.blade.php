<header class="p_r_45 p_l_45">
    @include('layouts.home.nav')
    <section class="w_p_100 d_flex flex_j_between m_b_35">
        <h1 class="m_b_0">{{ $data['title'] }}</h1>
        <div class="points_container d_flex flex_r">
            <div class="daily_points m_r_20">
                <i class="far fa-gem"></i>
                Daily: {{ Auth::user()->points->daily }}
            </div>
            <div class="daily_points m_r_20">&#124;</div>
            <div class="total_points">
                <i class="far fa-gem"></i>
                Total: {{ Auth::user()->points->total }}
            </div>
        </div>
    </section>
</header>