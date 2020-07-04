@extends('index')
@section('nav')
<li class="breadcrumb-item active">Questions</li>
@endsection
@section('content')
<div class="box box-info">
<a href="{{url('pertanyaan/')}}"><button class="btn btn-dark">Kembali</button></a>
  <div class="box-header with-border">
    <h3 class="box-title">Horizontal Form</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  @if(isset($question))
  <form class="form-horizontal" action="{{url('pertanyaan/'.$question[0]->id)}}" method=post>
  {{ method_field('PUT') }}
  @csrf
  @else
  <form class="form-horizontal" action="{{url('pertanyaan/store')}}" method=post>
  @csrf
  @endif
    <div class="box-body">
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Title</label>

        <div class="col-sm-10">
          <input type="text" class="form-control" id="title" name="title" placeholder="Title">
        </div>
      </div>
      
      <div class="form-group">
        <label for="content" class="col-sm-2 control-label">Content</label>

        <div class="col-sm-10">
          <textarea class="form-control" id="content" name="content">
          </textarea>
        </div>
      </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
    @if(isset($question))
    <button type="submit" class="btn btn-info pull-right">Update</button>
    @else
    <button type="submit" class="btn btn-info pull-right">Create</button>
    @endif
    </div>
    <!-- /.box-footer -->
  </form>
</div>
@endsection
@push('scripts')
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
<script>
  <?php 
if (isset($question)) {
  foreach ($question as $q) {
   ?>
   document.getElementById('title').value = '{{$q->title}}';
   document.getElementById('content').value = '{{$q->content}}';
    <?php
  }
} 
?>
</script>
@endpush
