<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Hasil SNBP</title>

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

/* overlay blur */
 .overlay {
      position: absolute;
      width: 100%;
      height: 100%;
      backdrop-filter: blur(8px);
      background: rgba(0, 0, 0, 0.325);
    }

/* card utama */
.card {
    position: relative;
      width: 700px;
      background: rgba(19, 19, 26, 0.708);
      box-shadow: 0 15px 50px rgba(0,0,0,0.7);
      color: white;
}

/* header biru */
.header {
    background: linear-gradient(90deg, #083661, #006CBF);
    padding: 20px 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    text-align: left;
}

/* konten */
.content {
    padding: 40px;
}

/* nama besar */
.nama {
    font-size: 32px;
    font-weight: 700;
    margin: 10px 0;
}

/* grid info */
.info {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    margin-top: 20px;
}

.label {
      display: block;
      margin-top: 18px;
      margin-bottom: 8px;
      color: #88ccf0;
      font-weight: 600;
      font-size: 18px;
    }

.value {
    font-size: 18px;
    font-weight: 600;
}

/* box kanan */
.side-box {
    position: absolute;
    right: 30px;
    top: 120px;
    width: 250px;
}



/* box putih */
.notice {
    background: white;
    color: black;
    padding: 15px;
    border-radius: 5px;
    font-size: 14px;
}

.notice a {
    color: #007bff;
    text-decoration: none;
}

/* footer kecil */
.footer {
    margin-top: 30px;
    font-size: 15px;
    color: #aaa;
}

.btn {
    margin-top: 20px;
    display: inline-block;
    padding: 8px 15px;
    background: white;
    color: black;
    border-radius: 20px;
    text-decoration: none;
}

/* TIDAK LOLOS */
.tidak {
    text-align: center;
    padding: 60px;
}

.tidak .header {
    background: linear-gradient(90deg, #850f0f, #480606);
    padding: 20px 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    text-align: left;
}
</style>

</head>

<body>

<div class="overlay"></div>

<div class="card">

@if($student->status_eligible)

    <!-- HEADER -->
    <div class="header">
        <h1>SELAMAT! ANDA DINYATAKAN SEBAGAI SISWA ELIGIBLE</h1>
        <img src="{{ asset('img/logo.png') }}" width="95">
    </div>

    <!-- CONTENT -->
    <div class="content">

        <div class="label">
            NISN {{ $student->nisn }}
        </div>

        <div class="nama">
            {{ strtoupper($student->nama) }}
        </div>

        <div class="info">
            <div>
                <div class="label">Tanggal Lahir</div>
                <div class="value">
                    {{ date('d/m/Y', strtotime($student->tanggal_lahir)) }}
                </div>
            </div>

            <div>
                <div class="label">Peringkat Eligible</div>
                <div class="value">
                    {{ $student->peringkat }}
                </div>
            </div>

            <div>
                <div class="label">Rata-rata Nilai</div>
                <div class="value">
                     {{ $student->nilai_rata ?? '-' }}
             </div>
</div>

        </div>

        <div class="footer">
            Status ini ditetapkan oleh pihak sekolah berdasarkan hasil rapat dewan guru.
        </div>

        <a href="/" class="btn">Kembali</a>
    </div>

@else

        <!-- HEADER -->
    <div class="header">
        <h1>MAAF! ANDA DINYATAKAN TIDAK LOLOS SEBAGAI SISWA ELIGIBLE</h1>
        <img src="{{ asset('img/logo.png') }}" width="95">
    </div>

    <!-- CONTENT -->
    <div class="content">

        <div class="label">
            NISN {{ $student->nisn }}
        </div>

        <div class="nama">
            {{ strtoupper($student->nama) }}
        </div>

        <div class="info">
            <div>
                <div class="label">Tanggal Lahir</div>
                <div class="value">
                    {{ date('d/m/Y', strtotime($student->tanggal_lahir)) }}
                </div>
            </div>

        </div>

        <div class="footer">
           Masih ada kesempatan mendaftar dan mengikuti SNBT 2026 atau seleksi mandiri PTN.
        </div>

        <a href="/" class="btn">Kembali</a>
    </div>


@endif

</div>

</body>
</html>