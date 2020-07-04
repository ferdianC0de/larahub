@extends('index')
@section('nav')
<li class="breadcrumb-item active">Answers</li>
@endsection
@section('content')
<div class="card">
      <div class="card-header">
        <h3 class="card-title">DataTable with default features</h3>
      </div>
    <div class="box-body">
    @foreach($question as $q)
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
        <div class="col-sm-10">
          <h3>{{$q->title}}</h3>
        </div>
      </div>
      
      <div class="form-group">
        <label for="content" class="col-sm-2 control-label">Content</label>
        <div class="col-sm-10">
          <h5>{{$q->content}}</h5>
        </div>
      </div>
    </div>
  @endforeach
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
      <th>ID</th>
        <th>Title</th>
        <th>content</th>
        <th>Created At</th>
        <th>Updated At</th>
      </tr>
      </thead>
      <tbody>
      <?php if (isset($answers)) { 
          foreach($answers as $answer){
          ?>
        <tr>
            <td>{{ $answer->id }}</td>
            <td>{{ $answer->title }}</td>
            <td>{{ $answer->content }}</td>
            <td>{{ $answer->created_at }}</td>
            <td>{{ $answer->updated_at }}</td>
        </tr>
      <?php 
    };
    } ?>
      </tbody>
      <tfoot>
      <tr>
      <th>ID</th>
        <th>Title</th>
        <th>content</th>
        <th>Created At</th>
        <th>Updated At</th>
      </tr>
      </tfoot>
    </table>
  </div>
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
@endpush
