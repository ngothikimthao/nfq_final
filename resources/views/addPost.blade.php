@extends('layout.master')
@section('precontent')
    <div class="container" style="width:30%">   
        <h2>NFQ Course</h2>
        <h3>Add Post</h3>
        @if($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{!! $error !!}</li>
					@endforeach
				</ul> 
			</div>
		@endif
        <form action="{{url('add')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="myEmail">Title</label>
                <input type="text" id="title" name="title" class="form-control" placeholder="Title">
                <label for="link">Link</label>
                <input type="text" id="link"  name="link" class="form-control" placeholder="Link">
                <label for="category">Category</label>
                <input type="text" id="category"  name="category" class="form-control" placeholder="Category"><br>
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </form>
    </div>
@endsection