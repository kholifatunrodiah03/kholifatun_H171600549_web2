<!DOCTYPE html>
<html>
<head>
	<title>pengumuman</title>
</head>
<body>
<table border="1">
	<tr>
		<td>id</td>
		<td>judul</td>
		<td>isi</td>
		<td>user_id</td>
	</tr>
	@foreach($pengumuman as $item)
	<tr>
		<td>{!! $item->id !!}</td>
		<td>{!! $item->judul !!}</td>
		<td>{!! $item->isi !!}</td>
		<td>{!! $item->users_id !!}</td>
	</tr>
	@endforeach
</table>
</body>
</html>