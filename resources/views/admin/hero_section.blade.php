@extends('layouts.admin.app')
@section('contents')
<div class="container-fluid">
    <div class="row min-vh-100 flex-column flex-md-row">
        @include('layouts.admin.aside_bar')
      <div class="col-md-10" id="page-content">

        <!-- Page Content -->
        <main id="referral-page">
          <h2 class="dashboard-page-title">Hero Section</h2>
          <!-- Form  -->
          <div class="container-fluid mb-5" id="admin-form">
            <div class="card" id="create-form">
              <div class="card-body">
                <h5 class="card-title">Hero Section Text Update</h5>

                <form action="{{ route('admin.hero-section.store') }}" method="POST">
                    @csrf
                  <div class="row bottom">
                    <div class=" bottom-left">
                      <label for="valid-referral" class="mb-3"
                        >Update Title</label
                      >
                      <input
                        type="text"
                        name="title"
                        id="title"
                        class="form-control"
                        placeholder="Title"
                        value="{{old('title',$heroSection->title)}}"
                      />
                      <label for="valid-referral" class="mb-3"
                        >Update Sub Heading</label
                      >
                      <input
                        type="text"
                        name="sub_title"
                        id="sub_title"
                        class="form-control"
                        placeholder="Sub Title"
                        value="{{old('sub_title',$heroSection->sub_title)}}"
                      />
                    
                      <label for="valid-referral" class="mb-3"
                        >Update Contracts Remaining</label
                      >
                      <input
                        type="text"
                        name="contract_title"
                        id="contract_title"
                        class="form-control"
                        placeholder="Contract Title"
                        value="{{old('contract_title',$heroSection->contract_title)}}"
                      />
                    </div>
                  </div>

                  <span class="personal-info-save-button"
                    ><button type="submit" class="btn btn-outline-dark">
                      Save Changes
                    </button></span
                  >
                </form>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
  </div>
@endsection