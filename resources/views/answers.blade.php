@extends('index')
@section('nav')
<li class="breadcrumb-item active">Answers</li>
@endsection
@section('content')
<div class="card">
      <div class="card-header">
        <h3 class="card-title">DataTable with default features</h3>
      </div>

      <form class="form-horizontal" action="{{url('jawaban/'.$quest_id)}}" method=post>
    <div class="box-body">
      <div class="form-group">
      @csrf
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
      <button type="submit" class="btn btn-info pull-right">Create</button>
    </div>
    <!-- /.box-footer -->
  </form>

      <!-- /.card-header -->
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
      <!-- /.card-body -->
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
