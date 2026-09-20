<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Hasil Pengumuman</title>

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
    background: rgba(19, 19, 26, 0.708);
    box-shadow: 0 15px 50px rgba(0,0,0,0.7);
    color: white;
}

.header {
    background: linear-gradient(90deg, #083661, #006CBF);
    padding: 20px 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    text-align: left;
}

.content {
    padding: 40px;
}

.nama {
    font-size: 32px;
    font-weight: 700;
    margin: 10px 0;
}

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

.footer {
    margin-top: 30px;
    font-size: 15px;
    color: #aaa;
    line-height: 1.6;
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

@if($student->hasilDivisi->jenis_hasil === 'pilihan_1')

    <!-- HEADER -->
    <div class="header">
        <h1>SELAMAT! ANDA DITERIMA PADA DIVISI PILIHAN 1</h1>
    </div>

    <!-- CONTENT -->
    <div class="content">

        <div class="label">
            NIM
        </div>

        <div class="value">
            {{ $student->nim }}
        </div>

        <div class="nama">
            {{ strtoupper($student->nama) }}
        </div>

        <div class="info">

            <div>
                <div class="label">Divisi</div>
                <div class="value">
                    {{ $student->hasilDivisi->divisi }}
                </div>
            </div>

            <div>
                <div class="label">Keterangan</div>
                <div class="value">
                    {{ $student->hasilDivisi->keterangan }}
                </div>
            </div>

        </div>
            <div class="footer">
                Selamat! Anda dinyatakan diterima pada divisi pilihan pertama Anda.
                Semoga Anda dapat menjalankan tugas dan tanggung jawab dengan baik.
            </div>

        <a href="/" class="btn">Kembali</a>

    </div>

@else

    <!-- HEADER -->
    <div class="tidak">
        <div class="header">
            <h1>MAAF! ANDA DINYATAKAN TIDAK LOLOS PADA DIVISI PILIHAN 1</h1>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="content">

        <div class="label">
            NIM
        </div>

        <div class="value">
            {{ $student->nim }}
        </div>

        <div class="nama">
            {{ strtoupper($student->nama) }}
        </div>

        <!-- KETERANGAN PENGUMUMAN -->
        <div class="footer">
            {{ $student->hasilDivisi->keterangan_pengumuman }}
        </div>

        <!-- DETAIL HASIL -->
        <div class="info">

            <div>
                <div class="label">Divisi</div>
                <div class="value">
                    {{ $student->hasilDivisi->divisi }}
                </div>
            </div>

            <div>
                <div class="label">Keterangan</div>
                <div class="value">
                    {{ $student->hasilDivisi->keterangan }}
                </div>
            </div>

        </div>

        <div class="footer">
            Tetap semangat! Meskipun bukan di pilihan pertama, semoga Anda dapat menjalankan tugas dan tanggung jawab dengan baik.
        </div>

        <a href="/" class="btn">Kembali</a>

    </div>

@endif

</div>

</body>
</html>