@extends('layouts.admin') {{-- atau layout yang kamu pakai --}}

@section('tittle', 'Dashboard')

@section('content')
<div class="row justify-content-center my-4">
  @if(Auth::check() && Auth::user()->role === 'admin')
    {{-- Total Produk --}}
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-0 shadow-sm rounded-3 h-100">
        <div class="card-body text-center p-4">
          <div class="mb-3">
            <div class="icon-shape bg-warning text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
              <i class="nc-icon nc-box display-6"></i>
            </div>
          </div>
          <p class="card-category text-muted mb-2">Total Produk</p>
          <h3 class="fw-bold mb-0">{{ $totalProduct ?? 0 }}</h3>
        </div>
      </div>
    </div>

    {{-- Total Order --}}
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-0 shadow-sm rounded-3 h-100">
        <div class="card-body text-center p-4">
          <div class="mb-3">
            <div class="icon-shape bg-success text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
              <i class="nc-icon nc-cart-simple display-6"></i>
            </div>
          </div>
          <p class="card-category text-muted mb-2">Total Order</p>
          <h3 class="fw-bold mb-0">{{ $totalOrder ?? 0 }}</h3>
        </div>
      </div>
    </div>
  @else
    <div class="col-12 text-center">
      <p class="text-danger fw-bold fs-4">Anda tidak memiliki akses ke halaman ini.</p>
    </div>
  @endif
</div>
@endsection
