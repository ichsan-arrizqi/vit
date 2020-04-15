<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/bootstrap.css') }}">
    <title>Covid 19 ichsan</title>
</head>
<body>
    <script type="text/javascript" src="{{ asset('assets/js/popper.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.js') }}"></script>
        <div class="container">
        <h1></h1>
        <div class="card">
            <div class="card-header bg-danger text-white">
                <center><h2>SURVEY COVID-19</h2><center><a href="/data"><input class="btn btn-success" type="button" value="Lihat Data"></a>
            </div>
            
            <form action="/kirim" method="post">
                {{ csrf_field() }}
            <div class="card-body">
                <table>
                    <tr>
                        <td>nama</td>
                        <td>
                            <input type="text" name="nama" placeholder="nama">
                            @if($errors->has('nama'))
					            {{ $errors->first('nama') }}
				            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>umur</td>
                        <td><input type="number" name="umur" placeholder="umur">@if($errors->has('umur'))
					        {{ $errors->first('umur') }}
				        @endif</td>
                        
                    </tr>
                </table>
            </div>
            <div class="footer">
            
            </div>
        </div>
        <table class="table">

            <thead class="thead-dark">
                <tr>
                    <th>NO</th>
                    <th>KETERANGAN</th>
                    <th>IYA</th>
                    <th>TIDAK</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><b>A</b></td>
                    <td colspan="3" align="center"><b>POTENSI TERTULAR DI LUAR RUMAH : </b></td>
                </tr>
                <tr>
                <div class="custom-control custom-radio">
                    <td>1</td>
                    <td>saya pergi keluar rumah</td>
                    <td><input type="radio"  name="keluar" value="1"></td>
                    <td><input type="radio" name="keluar" value="0"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>saya menggunakan trasnportasi umum:online,angkot,bus,taksi dan kereta api</td>
                    <td><input type="radio" name="kendaraan" value="1"></td>
                    <td><input type="radio" name="kendaraan" value="0"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>saya tidak memakai masker pada saat berkumpul dengan orang lain</td>
                    <td><input type="radio" name="masker" value="1"></td>
                    <td><input type="radio" name="masker" value="0"></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>saya berjabat tangan dengan orang lain</td>
                    <td><input type="radio" name="berjabat" value="1"></td>
                    <td><input type="radio" name="berjabat" value="0"></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>saya tidak membersihkan tangan dengan hand sanitizer/tissue basah sebelum pegang kemudi mobil / motor</td>
                    <td><input type="radio" name="sabun" value="1"></td>
                    <td><input type="radio" name="sabun" value="0"></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>saya menyentuh benda/uang yang juga di sentuh orang lain</td>
                    <td><input type="radio" name="uang" value="1"></td>
                    <td><input type="radio" name="uang" value="0"></td>
                </tr>
                    <td>7</td>
                    <td>saya tidak menjaga jarak 1,5 meter dengan orang lain ketika:belanja,bekerja,belajar,ibadah</td>
                    <td><input type="radio" name="jarak" value="1"></td>
                    <td><input type="radio" name="jarak" value="0"></td>
                <tr>
                <tr>
                    <td>8</td>
                    <td>saya makan diluar rumah(warung/restaurant)</td>
                    <td><input type="radio" name="makan" value="1"></td>
                    <td><input type="radio" name="makan" value="0"></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>saya tidak minum hangat dan cuci tangan dengan sabun setelah tiba di tujuan</td>
                    <td><input type="radio" name="tujuan" value="1"></td>
                    <td><input type="radio" name="tujuan" value="0"></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>saya berada di wilayah kelurahan tempat pasien tertular</td>
                    <td><input type="radio" name="pasien" value="1"></td>
                    <td><input type="radio" name="pasien" value="0"></td>
                </tr>
                <tr>
                    <td><b>B</b></td>
                    <td colspan="3" align="center"><b>POTENSI TERTULAR DI DALAM RUMAH : </b></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>saya tidak pasang hand sanitizer di depan pintu masuk,untuk bersihkan tangan sebelum pegang gagang pintu masuk</td>
                    <td><input type="radio" name="pintu" value="1"></td>
                    <td><input type="radio" name="pintu" value="0"></td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>saya tidak mencuci tangan dengan sabun setelah tiba di rumah</td>
                    <td><input type="radio" name="setelah" value="1"></td>
                    <td><input type="radio" name="setelah" value="0"></td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>saya tidak menyediakan tissue basah/antiseptic bagi keluarga di rumah</td>
                    <td><input type="radio" name="tissue" value="1"></td>
                    <td><input type="radio" name="tissue" value="0"></td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>saya tidak segera merendam pakaian bekas pakai di luar kedalam air panas/sabun</td>
                    <td><input type="radio" name="rendam" value="1"></td>
                    <td><input type="radio" name="rendam" value="0"></td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>saya tidak segera mandi dan keramas setelah saya tiba di rumah</td>
                    <td><input type="radio" name="keramas" value="1"></td>
                    <td><input type="radio" name="keramas" value="0"></td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>saya tidak mensosiallisasikan check list penilain resiko  pribadi ini kepada keluarga di rumah</td>
                    <td><input type="radio" name="sosial" value="1"></td>
                    <td><input type="radio" name="sosial" value="0"></td>
                </tr>
                <tr>
                    <td><b>C</b></td>
                    <td colspan="3" align="center"><b>DAYA TAHAN TUBUH(imunitas)</b></td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>saya dalam sehari tidak kena cahaya matahari minimal 15 menit</td>
                    <td><input type="radio" name="cahaya" value="1"></td>
                    <td><input type="radio" name="cahaya" value="0"></td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>saya tidak jalan kaki/berolahraga minimal 15 menit</td>
                    <td><input type="radio" name="olahraga" value="1"></td>
                    <td><input type="radio" name="olahraga" value="0"></td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>saya jarang minum vitamin C & E,dan kurang tidur</td>
                    <td><input type="radio" name="vitamin" value="1"></td>
                    <td><input type="radio" name="vitamin" value="0"></td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>usia saya diatas 60 tahun</td>
                    <td><input type="radio" name="usia" value="1"></td>
                    <td><input type="radio" name="usia" value="0"></td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>saya mempunyai penyakit : jantung/diabetes/gangguan pernafasan</td>
                    <td><input type="radio" name="penyakit" value="1"></td>
                    <td><input type="radio" name="penyakit" value="0"></td>
                </tr>
                </div>
                
                <tr>
                    <td colspan="4" align="center"><input value="Kirim" class="btn btn-info" type="submit"><br><p style="color : red">please check again what hasn't been filled yet</p></td>
                </tr>
            </form>
            </tbody>
        </table>
        </div>
        <footer>
            &copy;<a href="https://github.com/ichsan-arrizqi">GitHub : Ichsan-arrizqi</a>
        </footer>
</body>
</html>