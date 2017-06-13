@extends('layouts.atasbawah')

@section('content')
<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
				<h1>Pendaftaran SMP Negeri 1 Zimbawe</h1> <!-- Iki dinggo judul blog e -->
				<hr>
				<p style="text-align: justify"></p> <!-- nek iki konten e -->
			</div>
		</div>
		<div class="content">
        <div class="row">
             <form action="" method="post" role="form" class="form contactForm">
             	<div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-10"><p>NIK</p></div>                        	
                        <div class="col-md-10">
                        	<input type="text" name="nik" class="form-control input-md" placeholder="Sesuai dengan KK" required >
                        </div>
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-5"><p>Nama Lengkap</p></div>  
                        <div class="col-md-5"><p>Nama Panggilan</p></div>
                        <br>                           	
                        <div class="col-md-5">
                        	<input type="text" name="namalengkap" class="form-control input-md" placeholder="Nama Lengkap" required >
                        </div>
                        <div class="col-md-5">
                        	<input type="text" name="namapanggilan" class="form-control input-md" placeholder="Nama Panggilan" required >
                        </div>
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-5"><p>Jenis Kelamin</p><br></div>                        	
                        <div class="col-md-5">
                        	<select name="jenkel">
							<option value="Laki-laki">Laki-laki</option>
							<option value="Perempuan">Perempuan</option>
							</select>
                        </div>
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-5"><p>Agama</p><br></div>                        	
                        <div class="col-md-5">
                        	<select name="agama">
							<option value="Islam">Islam</option>
							<option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
							</select>
                        </div>
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-5"><p>Tempat Lahir</p></div>  
                        <div class="col-md-5"><p>Tanggal Lahir</p></div>
                        <br>                            
                        <div class="col-md-4">
                            <input type="text" name="tempatlahir" class="form-control input-md" placeholder="Tempat Lahir" required >
                        </div>
                        <div class="col-md-1 col-xs-2">
                            @for($i=1; $i<=31; $i++)
                            <select name="tgl">
                                <option value="{{ $i }}">{{ $i }}</option>
                            </select>
                            @endfor
                        </div>
                        <div class="col-md-1 col-xs-4">
                            @for($i=1; $i<=31; $i++)
                            <select name="tgl">
                                <option value="{{ $i }}">{{ $i }}</option>
                            </select>
                            @endfor
                        </div>
                        <div class="col-md-1 col-xs-2">
                            <select name="bln">
                                <option value="Januari">Januari</option>
                                <option value="Februari">Februari</option>
                                <option value="Maret">Maret</option>
                                <option value="April">April</option>
                                <option value="Mei">Mei</option>
                                <option value="Juni">Juni</option>
                                <option value="Juli">Juli</option>
                                <option value="Agustus">Agustus</option>
                                <option value="September">September</option>
                                <option value="Oktober">Oktober</option>
                                <option value="November">November</option>
                                <option value="Desember">Desember</option>
                            </select>
                        </div>
                        <div class="col-md-1 col-xs-4">
                            @for($thn=2017; $thn>=1990; $i--)
                            <select name="thn">
                                <option value="{{ $thn }}">{{ $thn }}</option>
                            </select>
                            @endfor
                        </div>
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-10"><p>Anak ke-</p></div>  
                        <br>                          
                        <div class="col-md-10">
                            <input style="width:20%;" type="text" name="anakke" class="form-control input-md" placeholder="" required > dari <input style="width:20%;" type="text" name="anakke" class="form-control input-md" placeholder="Tempat Lahir" required > bersaudara
                        </div>
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-10"><p>Alamat Rumah</p></div>  
                        <br>                          
                        <div class="col-md-6">
                            <input " type="text" name="alamat" class="form-control input-md" placeholder="Alamat" required >
                        </div>
                        <div class="col-md-4">
                            <input " type="text" name="kodepos" class="form-control input-md" placeholder="Alamat" required >
                        </div>
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-10"><p>Nomor Handphone orang tua</p></div>  
                        <br>                          
                        <div class="col-md-6">
                            <input " type="text" name="no_hp_ayah" class="form-control input-md" placeholder="Nomor handphone ayah" required >
                        </div>
                        <div class="col-md-4">
                            <input " type="text" name="no_hp_ibu" class="form-control input-md" placeholder="Nomor handphone ibu" required >
                        </div>
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-10"><p>Sekolah Asal</p></div>  
                        <div class="col-md-10"><input " type="text" name="sek_asal" class="form-control input-md" placeholder="Nama sekolah asal" required ></div>  
                        <br>                          
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-10"><p>Alamat Sekolah Asal</p></div>  
                        <div class="col-md-10"><input " type="text" name="alamat_sek_asal" class="form-control input-md" placeholder="Alamat sekolah asal" required ></div>  
                        <br>                          
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-5"><p>Golongan darah</p><br></div>                            
                        <div class="col-md-5">
                            <select name="gol">
                            <option value="Belum Ada">Belum Ada</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="O">O</option>
                            <option value="AB">AB</option>
                            </select>
                        </div>
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-5"><p>Bahasa sehari-hari</p><br></div>                            
                        <div class="col-md-5">
                            <select name="bahasa">
                            <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                            <option value="Bahasa Jawa">Bahasa Jawa</option>
                            <option value="Bahasa Inggris">Bahasa Inggris</option>
                            <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-10"><p>Tinggi dan berat badan</p></div>  
                        <br>
                        <div class="col-md-5">
                            <input type="text" name="tinggi" class="form-control input-md" placeholder="Tinggi badan" required >
                        </div>
                        <div class="col-md-5">
                            <input type="text" name="berat" class="form-control input-md" placeholder="Berat badan" required >
                        </div>
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-10"><p>Data orang tua</p></div>  
                        <br>
                        <div class="col-md-5">
                            <input type="text" name="nama_ayah" class="form-control input-md" placeholder="Nama Ayah" required >
                        </div>
                        <div class="col-md-5">
                            <input type="text" name="nama_ibu" class="form-control input-md" placeholder="Nama Ibu" required >
                        </div>
                        <div class="col-md-5">
                            <input type="text" name="no_hp_ayah" class="form-control input-md" placeholder="Nomor Handphone Ayah" required >
                        </div>
                        <div class="col-md-5">
                            <input type="text" name="no_hp_ibu" class="form-control input-md" placeholder="Nomor Handphone Ibu" required >
                        </div>
                        <div class="col-md-5">
                            <input type="text" name="pendidikan_ayah" class="form-control input-md" placeholder="Pendidikan terakhir Ayah" required >
                        </div>
                        <div class="col-md-5">
                            <input type="text" name="pendidikan_ibu" class="form-control input-md" placeholder="Pendidikan terakhir Ayah" required >
                        </div>
                        <div class="col-md-5">
                            <input type="text" name="pekerjaan ayah" class="form-control input-md" placeholder=" Pekerjaan Ayah" required >
                        </div>
                        <div class="col-md-5">
                            <input type="text" name="pekerjaan ibu" class="form-control input-md" placeholder=" Pekerjaan Ibu" required >
                        </div>
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-10"><p>Data orang tua</p></div>  
                        <br>
                        <div class="col-md-5">
                            <select name="gaji_ayah" class="form-control input-md">
                            <option value="Tidak Bekerja">Tidak Bekerja</option>
                            <option value="0 - 2 Juta">0 - 2 Juta</option>
                            <option value="2 Juta - 5 Juta">2 Juta - 5 Juta</option>
                            <option value="5 Juta Keatas">5 Juta Keatas</option>
                            </select>
                        </div>
                        <div class="col-md-5">
                            <select name="gaji_ibu" class="form-control input-md">
                            <option value="Tidak Bekerja">Tidak Bekerja</option>
                            <option value="0 - 2 Juta">0 - 2 Juta</option>
                            <option value="2 Juta - 5 Juta">2 Juta - 5 Juta</option>
                            <option value="5 Juta Keatas">5 Juta Keatas</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="submit">
                    <button class="btn btn-default" type="submit">Send Now</button>
                </div>
            </form>
        </div>
		</div>
	</div>
</section>
@endsection