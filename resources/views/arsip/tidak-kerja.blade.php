       <!DOCTYPE html>
<html>

<head>
    <title>Surat Keterangan Tidak Masuk Kerja</title>
</head>

<body>
    <!-- KOP SURAT -->
    <table border="0" align="center" style="margin-top: 10px;" width=84%>
        <tr>
            <td width=14%><img src="{{ public_path('images/logo.png') }}" alt="" width="85" height="85">
            </td>
            <td>
                <center>
                    <font size="3">PEMERINTAH KABUPATEN GARUT</font> <br>
                    <font size="3">KECAMATAN CIKAJANG</font> <br>
                    <font size="5"><b>DESA MARGAMULYA</b></font> <br>
                    <font size="3"><i>Jl.Raya Cikandang, Cikajang - Garut Kode Pos 44171</i></font>
                </center>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <hr style="border: 2px; border-top:5px double">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <br>
                <center>
                    <font size="3"><u><b>SURAT KETERANGAN TIDAK MASUK KERJA</b></u></font><br>
                    {{-- <hr width="180" style="border-width: thin; margin-top: 0px;"> --}}
                    <font size="3">NO SURAT : {{ $ajuan->nosurat }}</font>
                </center>
                <br>
            </td>
        </tr>
    </table>

    <table border="0" align="center" width=83%>
        <!-- KETERANGAN -->
        <tr>
            <td>
                <p style="text-align: justify;">
                    Yang bertanda tangan di bawah ini, Kepala Desa Margamulya Kecamatan Cikajang Kabupaten Garut , menerangkan dengan sebenarnya bahwa :
                </p>
            </td>
        </tr>
    </table>

    <table border="0" align="center" width=83% >
        <!-- IDENTITAS PENGAJU -->
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td style="text-transform: uppercase;"><b>{{ $ajuan->user->nama }}</b></td>
        </tr>
        <tr>
            <td>No Induk Kependudukan</td>
            <td>:</td>
            <td>{{ $ajuan->user->nik }}</td>
        </tr>
        <tr>
            <td>No Kartu Keluarga</td>
            <td>:</td>
            <td>{{ $ajuan->user->no_kk }}</td>
        </tr>
        <tr>
            <td>Tempat, tanggal lahir</td>
            <td>:</td>
            <td>{{ $ajuan->user->ttl }}</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>{{ $ajuan->user->jk }}</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td>{{ $ajuan->user->agama }}</td>
        </tr>
        <tr>
            <td>Pendidikan</td>
            <td>:</td>
            <td>{{ $ajuan->user->pendidikan }}</td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>:</td>
            <td>{{ $ajuan->user->pekerjaan }}</td>
        </tr>
        <tr>
            <td>Status Perkawinan</td>
            <td>:</td>
            <td>{{ $ajuan->user->status }}</td>
        </tr>
        <tr>
            <td>Nama Orang Tua</td>
            <td>:</td>
            <td style="text-transform: uppercase;">{{ $ajuan->user->ayah }} / {{ $ajuan->user->ibu }}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>{{ $ajuan->user->alamat }}</td>
        </tr>
    </table>

    <table border="0" align="center" width=83%>
        <!-- KETERANGAN -->
        <tr>
            <td>
                <p style="text-align: justify;">
                    Orang tersebut diatas adalah benar-benar warga Desa Margamulya yang Cikajang kesempatan Garut tidak dapat masuk kerja sebagaimana mestinya dikarenakan: <b style="text-transform: uppercase;"><i>{{ $ajuan->tidakKerja->alasan }}</i></b>. Maka dari itu pihak perusahaan kiranya dapat memberi izin kepadanya pada:
                </p>
            </td>
        </tr>
    </table>

    <table border="0" align="center" width=83%>
        <tr>
            <td width=32%>Hari</td>
            <td width=2%>:</td>
            <td >{{ $ajuan->tidakKerja->hari }}</td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td>:</td>
            <td>{{ $ajuan->tidakKerja->tanggal }}</td>
        </tr>
    </table>
    <table border="0" align="center" width=83%>
        <tr>
            <td>
                <p style="text-align: justify;">Demikian Surat Keterangan ini kami buat dengan sebenarnya dan agar dipergunakan sebagaimana mestinya.</p>
            </td>
        </tr>
    </table>

    <br><br>

    {{-- TTD --}}
    <table border="0" align="center" width=83%>
        <tr>
            <td style="text-align: right; position:relative">
                Margamulya, Cikajang $ajuan-Garutupdated_at->format('d F Y') }} <br>
                Kepala Desa Margamulya <br>Cikajang src=Garut public_path('storage/ttdcap/'.$ajuan->ttd.'') }}" alt="" height="132" align="right" style="position:absolute; top:10; right: 4 "> <br><br><br><br>
                <p style="position:absolute; right:-80">{{ $ajuan->kades }}</p>
            </td>
        </tr>
    </table>

</body>

</html>