@extends('layouts.admin.app')
@section('contents')
<div class="container-fluid">
    <div class="row min-vh-100 flex-column flex-md-row">
        @include('layouts.admin.aside_bar')
      <div class="col-md-10" id="page-content">

        <!-- Page Content -->
        <main id="lectures-page">
          <h2 class="dashboard-page-title">All Contract Buyers</h2>
          <div class="mx-4 mb-5">
              <form action="{{route('admin.buyers.search')}}" method="GET">
                <div class="row">
                  <div class="col">
                    <label for="start_date" class="form-label">Start Date</label>
                    <input type="date" name="start_date" id="start_date" class="form-control" onchange="evaluateDate()" >
                  </div>
                  <div class="col">
                    <label for="end_date" class="form-label">End Date</label>
                    <input type="date" name="end_date" id="end_date" class="form-control"  onchange="evaluateDate()" >
                  </div>
                </div>
                  <button class="btn btn-primary px-4 py-2 my-4" id="search_submit">Search</button>
              </form>

              <form action="{{ route('admin.buyers.download')}}" method="POST">
                @csrf
                <input type="hidden" id="startDateDownload" name="start_date">
                <input type="hidden" id="endDateDownload" name="end_date">
                <button class="btn btn-success px-4 py-2" id="download_submit">
                  <i class="fas fa-file-download me-2"></i>
                  Download
                </button>
              </form>

          </div>
          <section id="table-all">
            <div class="container-fluid ">
              <div class="card mb-4">
                <div class="card-header">
                  <i class="fas fa-table me-1"></i>
                  ALL Contract Buyers
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
                        <th>Actions</th>
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
                          <td>
                            <form action="{{route('admin.buyers.delete', $buyer->id)}}" method="POST">
                              @method('DELETE')
                              @csrf
                              <button class="btn btn-danger">Delete</button>
                            </form>
                          </td>
                        </tr>
                      @empty
                        <tr>
                          <td colspan="7" class="text-center"> No Contract Buyers To Show</td>
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
@section('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function(){
      var startDate = getUrlParameter('start_date');
      var endDate = getUrlParameter('end_date');
      // set the hidden inputs
      document.getElementById('startDateDownload').value = startDate;
      document.getElementById('endDateDownload').value = endDate;
      if(startDate)
      {
        $('#start_date').val(startDate);
      }
      if(endDate)
      {
        $('#end_date').val(endDate);
      }
    })
      function getUrlParameter(sParam) {
        var sPageURL = window.location.search.substring(1),
                sURLVariables = sPageURL.split('&'),
                sParameterName,
                i;

            for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split('=');

                if (sParameterName[0] === sParam) {
                    return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
                }
            }
            return false;        
      };
</script>
<script>
  const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 3000,
                  timerProgressBar: true,
                  didOpen: (toast) => {
                      toast.addEventListener('mouseenter', Swal.stopTimer)
                      toast.addEventListener('mouseleave', Swal.resumeTimer)
                  }
              });
  let endDateInput = document.getElementById('end_date');
  let startDateInput = document.getElementById('start_date');
  let submitBtn = document.getElementById('search_submit');

  function evaluateDate()
  {
      let endDateInputVal = endDateInput.value;
      let startDateInputVal = startDateInput.value;
      //set the hiddent input values
      document.getElementById('startDateDownload').value = startDateInputVal;
      document.getElementById('endDateDownload').value = endDateInputVal;

      if(endDateInputVal < startDateInputVal && endDateInputVal){
          Toast.fire({
                  icon: 'error',
                  title: 'End date should be later than start date'
              })
          
          submitBtn.disabled = true;
      }else{
          submitBtn.disabled = false;  
      }
  }
</script>
@endsection