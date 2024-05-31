@extends('layouts.master')

@section('namahalaman', 'order')

@section('content')

{{-- CSS --}}
<link rel='stylesheet' id='order-style-css' href="{{url('klikticket/assets/css/order.css')}}" type='text/css' media='all' />
{{-- /CSS --}}
<br> <br>
	<!-- WRAP CONTENT -->
	<div class="contact">
		<div class="container">
			<!-- Form -->
			<form id="formScript2">
				<div class="row">
					<div class="col-lg-8" id="mainContent">
						<!-- Personal Details -->
						<div class="row box first">
							<div class="box-header">
								<h3><strong>1</strong>Personal Details</h3>
								<p></p>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="form-group">
									<input id="namaCPW" class="form-control" name="namalengkap" placeholder="Nama Lengkap"
										type="text" required />
										<!-- <div class="error-txt">Nama CPW can't be blank</div> -->
								</div>
							</div>
							
							<div class="col-lg-6 col-md-12">
								<div class="form-group">
									<input id="alamat" class="form-control" name="alamat" placeholder="Alamat"
										type="text" required />
										<!-- <div class="error-txt">Alamat can't be blank</div> -->

								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="form-group">
									<input id="nomorHp" class="form-control" name="nomor_hp" placeholder="Nomor Hp"
										type="number" required />
										<!-- <div class="error-txt">Nomor Hp can't be blank</div> -->

								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="form-group">
									<input id="emailScript2" class="form-control" name="email" placeholder="Email"
										type="email" required />
										<!-- <div class="error-txt">Email can't be blank</div> -->
								</div>
							</div>
							
							<div class="col-lg-6 col-md-12">
								<div class="form-group">
									<label for="tanggal-prewedding">Pilih Tiket</label>
									<select id="paket" class="wide" name="paket" required>
										<option value="ULTIMATE EXPERIENCE">ULTIMATE EXPERIENCE</option>
										<option value="MY UNIVERSE">MY UNIVERSE</option>
										<option value="PESTIVAL">PESTIVAL</option>
									</select>
								</div>
							</div>
						</div>
						<!-- Personal Details End -->
						<!-- Message -->
						<div class="row box">
							<div class="box-header">
								<h3><strong>2</strong>Message</h3>
								<p>Message us to futher information</p>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<textarea id="inputMessage" class="form-control" name="message"
										placeholder="Enter Message" data-parsley-pattern="^[a-zA-Z0-9\s.:,!?']+$"
										required></textarea>
								</div>
							</div>
						</div>
						<!-- Message End -->
						<!-- File Uploader -->
						 <div class="row box">
							<div class="box-header">
								<h3><strong>3</strong>Attachment</h3>
								<p>Only jpg, png, pdf, max. 1Mb.</p>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="file" name="filepond[]" />
								</div>
							</div>
						</div> 
						<!-- File Uploader End -->
						<!-- Terms -->

						<!-- Terms End -->
						<!-- Submit-->
						<div class="row box">
							<div class="col-12">
								<div class="form-group">
									<button type="submit" name="submit" class="btn-form-func">
										<span>Checkout</span>
										{{-- <span class="icon"><i class="fa fa-paper-plane" aria-hidden="true"></i></span> --}}
									</button>
								</div>
							</div>
						</div>
						<!-- Submit -->
					</div>

					<div class="col-lg-4" id="sidebar">
						<!-- Contact Info Container -->
						<div id="contactInfoContainer" class="theiaStickySidebar">
							<div class="contact-box">
								<i class="icon icon-map-marker"></i>
								<h2>Address</h2>
								<a href="https://maps.app.goo.gl/AKhdBGhBmJ4VsYga6" target="_blank">Jl. Mengger Hilir
									No.31,
									Jawa Barat, 40267</a>
							</div>
							<div class="contact-box">
								<i class="icon icon-envelope"></i>
								<h2>Email</h2>
								<a href="mailto:nesphoria02@gmail.com">nesphoria02@gmail.com</a>
							</div>
							<div class="contact-box">
								<i class="icon icon-phone-call2"></i>
								<h2>Telephone</h2>
								<a
									href="https://api.whatsapp.com/send/?phone=6281398400900&text=Hallo%20kak,%20mau%20tanya%20info%20pricelist&type=phone_number&app_absent=0">+6281398400900</a>
							</div>
						</div>
						<!-- Contact Info Container End -->
					</div>
                </div>
			</form>
			<!-- Form End -->
		</div>
	</div>


	<!-- Contact End -->

@endsection