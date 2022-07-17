<!DOCTYPE html>
<html>
<head>
	<title><?=$header;?></title>
	<style type="text/css">
	body {
		font-family: sans-serif, arial;
		font-size: 14px;
	}
	.container { border: 1px solid #e16c6c; }
	.wrapper { padding: 20px; min-height: 550px; }
	.menu {
		background-color: #be2727;
		font-size: 16px;
		font-weight: bold;
	}
	.menu ul {
		list-style: none;
		margin: 0;
		padding: 0 0 0 4px;
	}
	.menu ul li {
		display: inline-table;
		margin-left: -4px;
	}
	.menu ul li.active { background-color: #c66262; }
	.menu ul li a {
		display: block;
		text-decoration: none;
		line-height: 50px;
		padding: 0 10px;
		color: #fff;
	}
	.menu ul li a:hover { background-color: #c66262; }
	.footer {
		background-color: #e16c6c;
		color: #fff;
		padding: 10px;
	}

	table.data { border-collapse: collapse; }
	table.data th { background-color: #ffcccc; padding: 10px; }
	table.data td { padding: 5px; }

	button {
		border: 0;
		padding: 5px 10px;
		border-radius: 2px;
		cursor: pointer;
	}
	h3 { margin: 0; }
	input {
		padding: 5px;
		width: 200px;
	}
	</style>
</head>
<body>

	<div class="container">
		<div class="menu">
			<ul>
				<li class="<?=$this->uri->segment(1) == 'home' ? 'active' : null; ?>">
					<a href="<?=site_url('home');?>">Beranda</a>
				</li>
				<li class="<?=$this->uri->segment(1) == 'buku' ? 'active' : null; ?>">
					<a href="<?=site_url('buku');?>">Buku</a>
				</li>
			</ul>
		</div>

		<div class="wrapper">