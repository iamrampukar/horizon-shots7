
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
		<a href="{{route('post.create')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></a>
		@php
		$indx = 1;
		@endphp
		<table class="table table-bordered table-sm">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Image Action</th>
					<th scope="col">Title</th>
					<th scope="col">Short Description</th>
					<th scope="col">Full Description</th>
					<th scope="col"></th>
				</tr>
			</thead>
			<tbody>
				@foreach($posts as $post)
				<tr>
					<td>{{ $indx++ }}</td>
					<td>
						<form action="{{ route('photo.delete',$post->id) }}" method="POST">
						<a href="{{ route('photo.create',$post->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-cloud-upload"></i></a>
						<a href="{{ route('photo.list',$post->id) }}" class="btn btn-dark btn-sm"><i class="fa fa-list"></i></a>
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
						</form>
					</td>
					<td>{{ $post->title }}</td>
					<td>{!! $post->short_description !!}</td>

					<td>{!! $post->full_description !!}</td>
					<td>
						<form action="{{ route('post.destroy',$post->id) }}" method="POST">
							<a href="{{ route('post.show',$post->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
							<a href="{{ route('post.edit',$post->id) }}" class="btn btn-dark btn-sm"><i class="fa fa-edit"></i></i></a>
							<a href="{{ route('post.image.create',$post->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-cloud-upload"></i></a>
							<a href="{{ route('post.image.list',$post->id) }}" class="btn btn-dark btn-sm"><i class="fa fa-list"></i></a>
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</body>
</html>


