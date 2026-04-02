<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Pengumuman Siswa Eligibel</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      height: 100vh;
      background: url('{{ asset("img/backround.png") }}') center/cover no-repeat;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .overlay {
      position: absolute;
      width: 100%;
      height: 100%;
      backdrop-filter: blur(8px);
      background: rgba(0, 0, 0, 0.325);
    }

    .card {
      position: relative;
      width: 700px;
      padding: 40px;
      background: rgba(19, 19, 26, 0.708);
      box-shadow: 0 15px 50px rgba(0,0,0,0.7);
      color: rgba(255, 255, 255, 0.49);
    }

    .header {
      display: flex;
      align-items: center;
      gap: 20px;
    }

    .logo {
      width: 90px;
      margin-bottom: 20px;
    }


    .subtitle {
      color: #b0b0b0;
      margin-bottom: 30px;
      font-size: 18px;
    }

    label {
      display: block;
      margin-top: 15px;
      margin-bottom: 8px;
      color: #88ccf0;
      font-weight: 600;
    }

    input {
      width: 100%;
      font-size: 18px;
      padding: 12px;
      border-radius: 6px;
      border: none;
      background: rgba(255,255,255,0.1);
      color: white;
      outline: none;
    }

    input:focus {
      background: rgba(255,255,255,0.2);
    }

    .date-group {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .date-group input {
      flex: 1;
      text-align: center;
    }

    .action {
      margin-top: 30px;
    }

    h1 {
      font-weight: 700;
      color: white;
      text-align: center;
    }
    button {
      width: 100%;
      padding: 12px;
      border-radius: 25px;
      border: none;
      background: #008acf;
      color: white;
      font-weight: 600;
      cursor: pointer;
    }

    button:hover {
      background: #0c5687;
    }
  </style>
</head>
<body>

<div class="overlay"></div>

<div class="card">

    <div class="header">
        <img src="{{ asset('img/logo.png') }}" class="logo">

        <h1>
            PENGUMUMAN SISWA ELIGIBLE <br>
            SMA NEGERI 1 GUNUNGSITOLI
        </h1>
    </div>

    <p class="subtitle">
        Masukkan NISN dan Tanggal Lahir.
    </p>

    <!-- FORM MULAI -->
    <form method="POST" action="/check">
        @csrf

        <label>NISN</label>
        <input type="text" name="nisn" placeholder="Nomor Induk Siswa Nasional">

        <label>Tanggal Lahir</label>
        <div class="date-group">
            <input type="text" name="tanggal" placeholder="Tanggal">
            <span>/</span>
            <input type="text" name="bulan" placeholder="Bulan">
            <span>/</span>
            <input type="text" name="tahun" placeholder="Tahun">
        </div>

        <div class="action">
            <button type="submit">Lihat Hasil Seleksi</button>
        </div>
    </form>
    <!-- FORM SELESAI -->

</div>

</body>
</html>