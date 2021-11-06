@extends('layouts.master')

@section('title')
	Course Units
@endsection

@section('content')



	<div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title"> Courses</h4>

                <form action="/units-update/{{ $courseUnit->id }}" method="POST">
                  {{ csrf_field() }}
                  {{ method_field('PUT') }}
                  <div class="modal-body">
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Course Code:</label>
                        <input type="text" name="course_code" class="form-control" value="{{ $courseUnit->course_code }}">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Course Title:</label>
                        <input type="text" name="course_title" class="form-control" value="{{ $courseUnit->course_title }}">
                      </div>
                      <div class="form-group">
                        <label for="message-text" name="course_unit" class="col-form-label">Units:</label>
                        <textarea name="course_unit" class="form-control">{{ $courseUnit->course_unit }}</textarea>
                      </div>
                  </div>
                  <div class="modal-footer">
                    <a href=" {{ url('units') }}" class="btn btn-secondary" >Back</a>
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                  </div>
                </form>              

            </div>
          </div>
        </div>
  </div>

        </div>
@endsection