<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title> Assets</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link rel="stylesheet" href="/css/app.css">
</head>

<body class="font-sans">
	<div id="app">
		<header class="section py-6 mb-8" style="background: url('/images/splash.svg') 0 15px no-repeat;">
			<h1>
				<router-link to="/">
					<img alt="asset" src="/images/logo.svg">
				</router-link>
			</h1>
		</header>

		<div class="section pb-10">
			<div class="container">
				<main class="flex">
					<aside class="w-64 pt-8 flex-no-shrink">
						<div class="mb-10">
							<h5 class="uppercase font-bold mb-5 text-base">The Brand</h5>

							<ul class="list-reset">
								<li class="text-sm leading-loose"><router-link class="text-black" to="/" exact>Logo</router-link></li>
								<li class="text-sm leading-loose"><router-link class="text-black" to="/home">Logo Symbol</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" :to="{name:'homes'}">Logo Symbol by name</router-link></li>

								<li class="text-sm leading-loose"><router-link class="text-black" to="/colors">Colors</router-link></li>
							</ul>
						</div>

						<div>
							<h5 class="uppercase font-bold mb-5 text-base">Doodles</h5>

							<ul class="list-reset">
								<li class="text-sm leading-loose"><router-link class="text-black" to="/loaders-and-animations">Loaders and Animations</router-link></li>
							</ul>
						</div>
					</aside>

					<div class="primary flex-1">
						<router-view></router-view>
					</div>
				</main>
			</div>
		</div>
	</div>
	<script src="{{mix('/js/app.js')}}"></script>
    <script>
        window.myApp = @json($data);
        
    </script>
</body>
</html>