@extends('dashboard')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="py-2">
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								 <h3>Management Users</h3>
							</div>
							<div class="card-body">
								<form>
									<div class="form-group">
										<label>Email</label>
										<input type="email" name="email" class="form-control" value="{{ $petugas_edit->email }}">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
