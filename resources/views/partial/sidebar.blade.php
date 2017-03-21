<!-- menu profile quick info -->
<div class="profile">
  <div class="profile_pic">
  	@php
		$user = Auth::user();
        $username = $user->username;
        $userId = $user->id;
        $path_to_users = "users";

        $user_profile_img = 'users/'.$username.$userId.'/'.$username.'image001.jpg';

		echo '<img src="'.$user_profile_img.'" class="img-circle profile_img">'
	@endphp
  </div>
  <div class="profile_info">
	<span>Welcome,</span>
	<h2>{{ Auth::user()->name }}</h2>
  </div>
</div>
<!-- /menu profile quick info -->

<br />

<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
	<h3>Menu</h3>
	<ul class="nav side-menu">
	@php
		//temporary user right permision solution
		//need to transfer to route later
		//link reference to use route permision http://josephralph.co.uk/laravel-5-simple-route-access-control/

		$user_perm = App\Models\UsersPermision::where('id_user',$userId)
											  ->where('id_permision', 1)
											  ->get()->first();

	@endphp
	@if ($user_perm)
	    <li><a href="{{ url('/home') }}"><i class="fa fa-home"></i>Home</a></li>
	@endif
		@php
			$user_perm = App\Models\UsersPermision::where('id_user',$userId)
												  ->where('id_permision', 2)
												  ->get()->first();
		@endphp
		@if ($user_perm)
			<li><a><i class="fa fa-folder-open-o"></i> Administration <span class="fa fa-chevron-down"></span></a>
				<ul class="nav child_menu">
				  <li><a href="{{ url('user_browse') }}">User Management</a></li>
				  <li><a href="{{ url('docno_browse') }}">Document No Management</a></li>
				</ul>
			</li>
		@endif
		  </li>
		@php
			$user_perm = App\Models\UsersPermision::where('id_user',$userId)
												  ->where('id_permision', 3)
												  ->get()->first();

		@endphp
		@if ($user_perm)
		  	<li><a><i class="fa fa-edit"></i> Master Setup <span class="fa fa-chevron-down"></span></a>
				<ul class="nav child_menu">
			  		<li><a href="{{ url('city_browse') }}">City</a></li>
			  		<li><a href="{{ url('country_browse') }}">Country</a></li>
			  		<li><a href="{{ url('branch_browse') }}">Branch</a></li>
			  		<li><a href="{{ url('paymenttype_browse') }}">Payment Type</a></li>
				  	<li><a href="{{ url('paymentmode_browse') }}">Payment Mode</a></li>
				  	<li><a href="{{ url('marriedstatus_browse') }}">Married Status</a></li>
				  	<li><a href="{{ url('sponsor_browse') }}">Sponsor</a></li>
				  	<li><a href="{{ url('relation_browse') }}">Relation</a></li>
				</ul>
		  	</li>
		  @endif
		@php
			$user_perm = App\Models\UsersPermision::where('id_user',$userId)
												  ->where('id_permision', 4)
												  ->get()->first();
		@endphp
	  @if ($user_perm)
	  <li><a><i class="fa fa-users"></i> Customer <span class="fa fa-chevron-down"></span></a>
		<ul class="nav child_menu">
		  <li><a href="{{ url('cust_entry_browse') }}">Customer Entry</a></li>
		</ul>
	  </li>
	  @endif
		@php
			$user_perm = App\Models\UsersPermision::where('id_user',$userId)
												  ->where('id_permision', 5)
												  ->get()->first();
		@endphp
	  @if ($user_perm)
	  <li><a><i class="fa fa-bar-chart-o"></i> Reports <span class="fa fa-chevron-down"></span></a>
		<ul class="nav child_menu">
		  <li><a href="{{ url('gen_rpt?rpt=sales') }}">Sales Report</a></li>
		  <li><a href="{{ url('gen_rpt?rpt=customer_list') }}">Customer Listing</a></li>
		  <li><a href="{{ url('gen_rpt?rpt=sponsor_list') }}">Sponsor Listing</a></li>
		</ul>
	  </li>
	  @endif
	</ul>
  </div>

</div>
<!-- /sidebar menu -->

<!-- /menu footer buttons -->
<div class="sidebar-footer hidden-small">
  <!--<a data-toggle="tooltip" data-placement="top" title="Settings">
	<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
  </a>
  <a data-toggle="tooltip" data-placement="top" title="FullScreen">
	<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
  </a>
  <a data-toggle="tooltip" data-placement="top" title="Lock">
	<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
  </a>-->
 	<a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" data-toggle="tooltip" data-placement="top" title="Logout">
		<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
  	</a> 
	<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
		{{ csrf_field() }}
	</form>
</div>
<!-- /menu footer buttons -->
