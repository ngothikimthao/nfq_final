@extends('layout.master')
@section('precontent')
    <div class="container">
        <h2>NFQ Course</h2>
        <h4>Management Post </h4>
        <a href="{!! url('add')!!}"><button class="btn btn-success">Add</button></a>
        <br><br>
        <table class="table table-striped">
            <thead>
                <tr class="info">
                    <th>Title</th>
                    <th>Link</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr class="success">
                        <td>{{$post->title}}</td>
                        <td>{{$post->link}}</td>
                        <td>{{$post->category}}</td>
                        <td>
                            <a href=" {!! url('update',$post->id) !!}"><button class="btn btn-primary">Update</i></button></a>
                            <a href=" {!! url('delete',$post->id) !!}"><button class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div id="pagination">
            {!! $posts->links() !!}
        </div>
    </div>       
@endsection