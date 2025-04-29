@extends('layouts.user')

@section('content')
<div class="container py-4">

    <h1 class="mb-4">Keranjang Belanja</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(!empty($order) && $order->orderProducts->count() > 0)
        <div class="table-responsive mb-4">
            <table class="table table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Produk</th>
                        <th>Harga Satuan</th>
                        <th>Jumlah</th>
                        <th>Subtotal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($order->orderProducts as $item)
                        <tr>
                            <td>{{ $item->product->name }}</td>
                            <td>Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>Rp {{ number_format($item->subtotal, 0, ',', '.') }}</td>
                            <td>
                                <form action="{{ route('cart.remove', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus produk ini dari keranjang?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="bi bi-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-between align-items-center">
            <h4>Total: <strong>Rp {{ number_format($order->total_harga, 0, ',', '.') }}</strong></h4>

            <form action="{{ route('invoice') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-success px-4">
                    <i class="bi bi-bag-check me-2"></i>Checkout
                </button>
            </form>
        </div>
    @else
        <div class="alert alert-info">
            Keranjang Anda masih kosong. Yuk, <a href="{{ route('produk.index') }}">belanja sekarang</a>!
        </div>
    @endif

</div>
@endsection
