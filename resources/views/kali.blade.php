<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>kali data</title>
</head>

<body>
    <h1>kali Data</h1>
    <form action="{{ route('store_kali') }}" method="post">
        @csrf
        <label for="">Angka 1</label>
        <input type="number" name="angka1">
        <br> <br>
        <label for="">Angka 2</label>
        <input type="number" name="angka2">
        <br>
        <button type="submit">Prosses</button>
        <a href="/belajar">kembali</a>
    </form>
    <h3>Jumlah : {{ $jumlah ?? 0 }}</h3>
</body>

</html>
