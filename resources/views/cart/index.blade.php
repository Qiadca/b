@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Alışveriş Sepeti</h1>
        @if ($cartItems->isEmpty())
            <p>Sepetinizde ürün bulunmamaktadır.</p>
        @else
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Ürün</th>
                        <th>Fiyat</th>
                        <th>Adet</th>
                        <th>Toplam</th>
                        <th>İşlem</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cartItems as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ number_format($item->price, 2) }} TL</td>
                            <td>{{ $item->qty }}</td>
                            <td>{{ number_format($item->subtotal, 2) }} TL</td>
                            <td>
                                <form action="{{ route('cart.remove', $item->rowId) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Kaldır</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-end">
                <h3>Toplam: {{ Cart::total() }} TL</h3>
            </div>
            <div class="d-flex justify-content-end mt-3">
                <a href="{{ route('checkout.index') }}" class="btn btn-primary">Ödeme Yap</a>
            </div>
        @endif
    </div>
@endsection
