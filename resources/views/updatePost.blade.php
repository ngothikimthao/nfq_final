@extends('layout.master')
@section('precontent')
    <div class="container" style="width:30%">
        <h2>NFQ Course</h2>
        <h3>Update Post</h3>
        @if($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{!! $error !!}</li>
					@endforeach
				</ul> 
			</div>
		@endif
        <form action="{{url('update',$post['id'])}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="myEmail">Title</label>
                <input type="text" id = "title" name = "title" class="form-control" placeholder="Title"
                    value="{!! old ('title',isset($post)?$post['title']:NULL) !!}">
                <label for="link">Link</label>
                <input type="text" id="link"  name = "link" class="form-control" placeholder="Link"
                    value="{!! old ('link',isset($post)?$post['link']:NULL) !!}">
                <label for="category">Category</label>
                <input type="text" id="category"  name = "category" class="form-control" placeholder="Category"
                    value="{!! old ('category',isset($post)?$post['category']:NULL) !!}"><br>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection