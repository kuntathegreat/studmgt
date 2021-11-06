@extends('layouts.master')

@section('title')
  Dashboard | Funda of Web IT
@endsection

@section('content')
  <div class="row" >
          <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Number of Enrolleed Students</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <p>{{ $aboutus * 100 }}</p>
                  <img src="https://images.theconversation.com/files/360704/original/file-20200930-24-gmkk3r.jpg?ixlib=rb-1.1.0&q=20&auto=format&w=320&fit=clip&dpr=2&usm=12&cs=strip">

                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> International Awards</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <p> {{ $user }} </p>
                  <img src="https://dvis.in/templates/doon-valley19/assets/images/student1.png" >
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-header")>
                <h4 class="card-title"> On-going projects</h4>
                <img src="https://www.investopedia.com/thmb/vU8WSdsmxi3pJgqFer3cTxV08oc=/2121x1414/filters:fill(auto,1)/GettyImages-1278948452-e1fdce3baef44af28f449ab36d6717f3.jpg">
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <p>Solar powered hostels</p>
                  <p>Microsoft e-library</p>
                  <p>School Museum</p>
                  <p>Swimming Pool</p>
                  
                </div>
              </div>
            </div>
          </div>
          
        </div>

                  <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Student Management System</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  hey
                </div>
              </div>
            </div>
          </div>
@endsection