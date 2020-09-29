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
		<div class="row">
			<div class="col-md-7">
				<form method="post" action="{{ route('post.image-upload')}}" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="uploadImage">Upload Image:</label>
						<input type="file" class="form-control-file form-control-sm" multiple="multiple" name="img_url[]" id="fileUpload">
					</div>
					<input type="hidden" name="post_id" value="{{ request()->route('id') }}">
					<button class="btn btn-sm btn-primary" type="submit" name="submit">Save</button>
					<button class="btn btn-sm btn-secondary" type="reset" name="reset">Clear</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>