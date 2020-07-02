@extends('index')
@section('nav')
<li class="breadcrumb-item active">Questions</li>
@endsection
@section('content')
<div class="card">
      <div class="card-header">
        <h3 class="card-title">DataTable with default features</h3>
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
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
          <?php if (isset($questions)) { 
              foreach($questions as $question){
              ?>
            <tr>
                <td>{{ $question->id }}</td>
                <td>{{ $question->title }}</td>
                <td>{{ $question->content }}</td>
                <td>{{ $question->created_at }}</td>
                <td>{{ $question->updated_at }}</td>
                <td><a href="{{url('jawaban/'.$question->id)}}">Lihat Jawaban</a></td>
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
            <th>Action</th>
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
