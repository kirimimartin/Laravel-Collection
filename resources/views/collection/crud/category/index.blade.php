@extends('collection.crud.master')

@section('header')
 Category
@endsection

@section('content')

        <div class="card">
          <div class="card-header"><h3>Category table</h2></div> 
          <div class="card-body p-0">
            <table class="table table-bordered">
              <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Modify</th>
              </tr>
              @foreach($categories as $category)
              <tr>
                <td>{{$category->title}}</td>
                <td>{{$category->description}}</td>
                <td>
                  <button class="btn btn-info" data-mycatid="{{$category->id}}" data-mytitle="{{$category->title}}" data-mydesc="{{$category->description}}" data-toggle="modal" data-target="#edit">EDIT</button>
                  |<button class="btn btn-danger" data-mycatid="{{$category->id}}" data-toggle="modal" data-target="#delete">DELETE</button>
                </td>
              </tr>
              @endforeach
            </table>
          </div>
        </div>
   
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Category
</button>

<!-- Modal ADD-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title" id="myModalLabel"> Category</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <form action="{{route('category.store')}}" method="post">
      {{csrf_field()}}
        <div class="modal-body">

        @include('collection.crud.category.form')
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save </button>
        </div>

      </form>
    </div>
  </div>
</div>

<!-- Modal EDIT-->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title" id="myModalLabel">Edit Category</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <form action="{{route('category.update','test')}}" method="post">
        {{method_field('patch')}}
      {{csrf_field()}}
        <div class="modal-body">
          <input type="hidden" name="cat_id" id="cat_id">
            @include('collection.crud.category.form')
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save </button>
        </div>

      </form>
    </div>
  </div>
</div>

<!-- Modal Delete-->
<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content bg-danger">
      <div class="modal-header">
      <h4 class="modal-title" id="myModalLabel">Delete Category</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <form action="{{route('category.destroy','test')}}" method="post">
        {{method_field('delete')}}
      {{csrf_field()}}
        <div class="modal-body ">
          <p class="text-center">ARE YOU SURE!!! YOU WANT TO DELETE</p>
          <input type="hidden" name="cat_id" id="cat_id">
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-warning">DELETE </button>
        </div>

      </form>
    </div>
  </div>
</div>

@endsection

