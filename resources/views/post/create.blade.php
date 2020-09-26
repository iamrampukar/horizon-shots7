<!DOCTYPE html>
<html>
<head>
	<title>Post</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<form method="post" action="{{ route('post.store')}}">
			@csrf
			<div class="form-group">
				<label for="title">Title</label>
				<input name="title" type="text" class="form-control form-control-sm" id="title" placeholder="Title">
			</div>
			<div class="form-group">
				<label for="short_description">Short Description</label>
				<textarea name="short_description" class="form-control form-control-sm" id="short_description" rows="3" placeholder="Short Description"></textarea>
			</div>
			<div class="form-group">
				<label for="full_description">Full Description</label>
				<textarea name="full_description" class="form-control form-control-sm" id="full_description" rows="5" placeholder="Full Description"></textarea>
			</div>
			<button class="btn btn-sm btn-primary" type="submit" name="submit">Save</button>
			<button class="btn btn-sm btn-secondary" type="reset" name="reset">Clear</button>
		</form>
	</div>

</body>
</html>