<div class="box_container toggle_opacity">
	<div class="box">
		<div class="d_flex m_b_20">
			<span>"</span>
			<h1>A clear conscience is more valuable than wealth. <i>-unknown</i></h1>
		</div>
		<p class="m_b_20">Your honesty is important. Remember, these good habits are for your own benefit. If you have completeded this habit then click on “I’m honest”. Thank you.</p>
		<form id="add_point_form" class="d_flex flex_ja_center" action="{{ route('task.track') }}" method="POST">
		    @csrf
		    <input type="hidden" id="task_id" name="task_id" value="">
			<button class="cancel m_r_10">Sorry I lied</button>
			<button type="submit">I'm Honest</button>
		</form>
	</div>
</div>