@extends('layouts.app')
@section('dashboard')

<header>


	<nav class="top-nav">
		<div class="container">
			<div class="nav-wrapper">
				<a class="page-title">Titulo</a>
				<a href="{{ url('/logout') }}">Logout</a>	
			</div>
		</div>
		<a href="{{ url('/logout') }}">Logout</a>
	</nav>

	<div class="container">
		<a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only">
			<i class="material-icons">menu</i>
		</a>
	</div>
	

	<ul id="nav-mobile" class="side-nav fixed" style="transform: translateX(0%);">

		<li>
			<div class="userView">
				<div class="background">
					<img src="{{ asset('assets/img/background.jpg') }}">
				</div>
				<img class="circle" src="{{ asset('assets/img/avatar.jpg') }}">
				<span class="white-text name">Escola aqui</span>
				<span class="white-text email">{{ Auth::user()->name }}</span>
			</div>
		</li>

		<li class="no-padding">
			<ul class="collapsible collapsible-accordion">
				<li class="bold"><a class="collapsible-header  waves-effect">Caroursel 1</a>
					<div class="collapsible-body">
						<ul>
							<li><a href="color.html">A - Item</a></li>
							<li><a href="grid.html">B - Item</a></li>
							<li><a href="helpers.html">C - Item</a></li>
						</ul>
					</div>
				</li>
				<li class="bold"><a class="collapsible-header  waves-effect">Caroursel 2</a>
					<div class="collapsible-body">
						<ul>
							<li><a href="badges.html">I. item</a></li>
							<li><a href="buttons.html">III . Item</a></li>
							<li><a href="breadcrumbs.html">III. Item</a></li>
							<li><a href="cards.html">IV. Item</a></li>

						</ul>
					</div>
				</li>
			</ul>
		</li>
		<li class="bold"><a href="#">Link</a></li>
		<li class="bold"><a href="#">Link</a></li>
		<li class="bold"><a href="#">Link</a></li>
	</ul>

</header>

<main>
	<div class="container">
		@yield('content')
	</div>

</main>

<footer class="page-footer">
	<div class="container">
		<div class="row">
			<div class="col l4 s12">

			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			© materialize frame work
			<a class="grey-text text-lighten-4 right" href="#">License</a>
		</div>
	</div>
</footer>

@stop