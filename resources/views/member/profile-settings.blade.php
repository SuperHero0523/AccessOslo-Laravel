@extends('layouts.member_public') 
@section('title', $data->meta_title) 
@section('content')
<div class="wrapper-general">
  <section class="introduction">     
      <div class="container wrapper-content">
          <div class="col-xs-12">
              <div class="margin_title">
                <h1>Complete your profile</h1>
                <p>View your profile</p>
              </div>
          </div>
      </div>
  </section>
  <accessoslo-member-profile></accessoslo-member-profile>
</div>
@endsection

@section('scripts')
@include('sweet::alert')
<script src="/js/vendor/wickedpicker.js"></script>
<script src="/js/vendor/utils.js"></script>
<script src="/js/vendor/data.js"></script>
<script src="/js/vendor/intlTelInput.js"></script>
@endsection
