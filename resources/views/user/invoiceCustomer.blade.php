<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Invoice Pembelian
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  
  <!-- Custom Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet" />
  
  <!-- CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
  
  <!-- Custom Styles -->
  <style>
    body {
      font-family: 'Merriweather', serif;
      background-color: #f4f4f4;
      color: #333;
    }

    .container {
      margin-top: 40px;
    }

    .card {
      border: 1px solid #ccc;
      border-radius: 8px;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .card-header {
      background-color: #2a2a2a;
      color: white;
      text-align: center;
      padding: 20px;
      font-size: 1.5rem;
      border-top-left-radius: 8px;
      border-top-right-radius: 8px;
    }

    .card-body {
      padding: 30px;
      font-size: 1rem;
    }

    .table th,
    .table td {
      padding: 10px;
      font-size: 1.1rem;
    }

    .table th {
      background-color: #fafafa;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
      width: 100%;
      padding: 12px;
      font-size: 1.1rem;
      border-radius: 5px;
    }

    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #004085;
    }

    .alert {
      margin-top: 20px;
      padding: 12px;
      background-color: #fef9e8;
      color: #856404;
      border-radius: 5px;
      font-size: 1rem;
    }

    .back-btn {
      text-align: center;
      margin-top: 30px;
    }

    .back-btn a {
      font-size: 1.2rem;
      color: #007bff;
      text-decoration: none;
      padding: 10px 20px;
      border: 2px solid #007bff;
      border-radius: 5px;
    }

    .back-btn a:hover {
      background-color: #007bff;
      color: white;
    }

    /* Tombol meniru style .card-header */
    .btn-header-style {
      font-family: 'Merriweather', serif;
      font-size: 1rem;               /* ukuran menyelaraskan dengan body text */
      background-color: #2a2a2a;     /* sama seperti .card-header */
      color: #ffffff;                /* teks putih */
      border: none;
      padding: 10px 25px;            /* padding horizontal menyesuaikan teks */
      border-radius: 4px;
      display: inline-block;
      transition: background-color 0.2s ease;
      text-decoration: none;
    }

    .btn-header-style:hover {
      background-color: #1e1e1e;     /* lebih gelap di hover */
      text-decoration: none;
      color: #ffffff;
    }


    
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <!-- Data Diri User -->
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <span>Data Diri</span>
          </div>
          <div class="card-body">
            <p><strong>Nama:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Phone:</strong> {{ $user->phone_number }}</p>
            <p><strong>Alamat:</strong> {{ $user->address }}</p>
          </div>
        </div>
      </div>

      <!-- Invoice Pembelian -->
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <span>Invoice Pembelian</span>
          </div>
          <div class="card-body">
            <table class="table table-borderless">
                {{-- 1 produk --}}
              <tr>
                <th>Nama Produk</th>
                <td>: {{ $product->name }}</td>
              </tr>
              <tr>
                <th>Harga Satuan</th>
                <td>: Rp{{ number_format($product->harga, 0, ',', '.') }}</td>
              </tr>
              <tr>
                <th>Jumlah Beli</th>
                <td>: {{ $quantity }}</td>
              </tr>
              <tr>
                <th>Total Harga</th>
                <td>: <strong>Rp{{ number_format((float) $product->harga * (int) $quantity, 2) }}</strong></td>
              </tr>
              <tr>
                <th>Tanggal Transaksi</th>
                <td>: {{ \Carbon\Carbon::now()->format('d M Y, H:i') }}</td>
              </tr>
            </table>
            <div class="alert">
              Silakan lakukan pembayaran ke rekening yang telah ditentukan dan unggah bukti pembayaran Anda di halaman riwayat pesanan.
            </div>

            <!-- Pembayaran Button -->
            <form action="{{ route('userproduct.bayarInvoice') }}" method="POST" class="text-center mt-4">
              @csrf
              <input type="hidden" name="product_id" value="{{ $product->id }}">
              <input type="hidden" name="rekening_id" value="1">
              <input type="hidden" name="tenggat_pembayaran" value="{{ \Carbon\Carbon::now()->addDays(1)->toDateString() }}">
              <input type="hidden" name="quantity" value="{{ $quantity }}">
              @isset($is_email)
              @else
              <button type="submit" class="btn-header-style">Bayar</button>
              @endisset
            </form>
          </div>
        </div>
      </div>
      @isset($is_email)
      @else
        <div class="col-md-12 text-center mt-3">
          <a href="/" class="btn-header-style">Kembali ke Beranda</a>
        </div>
      @endisset
    </div>
  </div>

  <!-- JS Files -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
