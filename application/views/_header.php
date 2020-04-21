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
	.wrapper { padding: 20px; }
	.menu {
		background-color: #e16c6c;
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
	table.data th { background-color: #f7ff9b; }
	table.data th, table.data td { padding: 5px; }

	.btn { cursor: pointer; }
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