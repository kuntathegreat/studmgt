@extends('layouts.master')

@section('title')
	Units | Department of Electrical Engineering
@endsection

@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adding Course Units</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="/save-units" method="POST">
          {{ csrf_field() }}
          <div class="modal-body">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Course Code:</label>
                <input type="text" name="course_code" class="form-control" id="recipient-name">
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Course Title:</label>
                <input type="text" name="course_title" class="form-control" id="recipient-name">
              </div>
              <div class="form-group">
                <label for="message-text" name="units" class="col-form-label">Unit:</label>
                <textarea name="description" class="form-control" id="message-text"></textarea>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
    </div>
  </div>
</div>

	<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Course and allocated units
                  <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">ADD</button>

                </h4>
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                @endif

              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th class="w-10p">
                        Id
                      </th>
                      <th class="w-10p">
                        Course Code
                      </th>
                      <th class="w-10p">
                        Course Title
                      </th>
                      <th class="w-10p">
                        Units
                      </th>
                      <th class="w-10p">
                        EDIT
                      </th>
                      <th class="w-10p">
                        DELETE
                      </th>
                    </thead>

                    <tbody>
                      @foreach ($units as $datum)
                      <tr>
                        <td>
                          {{ $datum->id }}
                        </td>
                        <td>
                          {{ $datum->course_code }}
                        </td>
                        <td>
                          {{ $datum->course_title }}
                        </td>
                        <td>
                          {{ $datum->units }}
                        </td>
                          
                        </td>
                        <td>
                          <a href="{{ url('edit-units/'.$datum->id) }}" class="btn btn-success">EDIT</a>
                        </td>
                        <td>
                          <a href="#" class="btn btn-danger">DELETE</a>
                        </td>
                      </tr>
                      @endforeach
                      
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>
@endsection