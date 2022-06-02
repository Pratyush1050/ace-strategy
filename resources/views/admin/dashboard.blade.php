@extends('layouts.admin.app')
@section('contents')


<div class="container-fluid">
    <div class="row min-vh-100 flex-column flex-md-row">
        @include('layouts.admin.aside_bar')
      <div class="col-md-10" id="page-content">

        <h2 class="page-title mt-5">DASHBOARD</h2>
        <section id="dash-home">
          <!-- Cards  -->
          <div class="card mt-3">
            <h4 class="mx-auto">Total Buyers</h4>
            <h1 class="number-user mx-auto">{{$buyers->count()}}</h1>
          </div>
            
          
        </section>
        <!-- Page Content -->
        <main id="lectures-page">
          <h2 class="dashboard-page-title">Recent Contract Buyers</h2>
          
          <section id="table-all">
            <div class="container-fluid ">
              <div class="card mb-4">
                <div class="card-header">
                  <i class="fas fa-table me-1"></i>
                  ALL CONTRACT BUYERS 
                </div>
                <div class="card-body">
                  <table id="datatablesSimple" class="table-hover">
                    <thead>
                      <tr>
                        <th>S.N.</th>
                        <th>Full Name</th>
                        <th>Email Address</th>
                        <th>Country</th>
                        <th>Contact Number</th>
                        <th>Join Date</th>
                      </tr>
                    </thead>
                      <tbody>
                    @forelse ($buyers as $i=>$buyer)
                    <tr>
                      <td>{{$i+1}}</td>
                      <td>{{$buyer->firstname}} {{$buyer->lastname}}</td>
                      <td>{{$buyer->email}}</td>
                      <td class="country_name">{{$buyer->country}}</td>
                      <td>{{$buyer->contact_number}}</td>
                      <td>{{$buyer->created_at->format('Y-m-d')}}</td>
                    </tr>
                  @empty
                    <tr>
                      <td colspan="7" class="text-center"> 
                          No Contract Buyers To Show
                      </td>
                    </tr>
                  @endforelse    
                      
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </section>
          
          


        </main>
      </div>
    </div>
  </div>
@endsection
