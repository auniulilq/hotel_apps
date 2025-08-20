<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>kurang data</title>
</head>

<body>
    <h1>kurang Data</h1>
    <form action="{{ route('store_kurang') }}" method="post">
        @csrf
        <label for="">Angka 1</label>
        <input type="number" name="angka1">
        <br> <br>
        <label for="">Angka 2</label>
        <input type="number" name="angka2">
        <br>
        <button type="submit">Prosses</button>
        <a href="{{ url()->previous() }}">kembali</a>
    </form>
    <h3>Jumlah : {{ $jumlah ?? 0 }}</h3>
</body>

</html>
