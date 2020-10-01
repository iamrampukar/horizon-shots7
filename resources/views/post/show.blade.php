
<!DOCTYPE html>
<html>
<head>
	<title>Post</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<table class="table table-bordered table-sm">
			<thead>
				<tr>
					<th colspan="2"></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th>Title</th>
					<td>{{ $post->title }}</td>
				</tr>
				<tr>
					<th>Short Description</th>
					<td>{!! $post->short_description !!}</td>
				</tr>
				<tr>
					<th>Short Description</th>
					<td>{!! $post->full_description !!}</td>
				</tr>
				<tr>
					<td colspan="2">
						<a href="{{ route('post.index') }}" class="btn btn-primary btn-sm">Back</a>
						<a href="{{ route('post.edit',$post->id) }}" class="btn btn-secondary btn-sm">Edit</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>


