@extends('layouts/contentNavbarLayout')

@section('title', 'Tables - Basic Tables')

@section('content')
	<h4 class="mb-4 py-3">
		<span class="text-muted fw-light">User Management /</span> Role Changer
	</h4>

	<!-- Basic Bootstrap Table -->
	<div class="card">
		<h5 class="card-header">Notification Types
			<a href="#" class="btn btn-primary float-end">
				<i class="menu-icon tf-icons bx bx bxs-plus-circle"></i> Tambah
			</a>
		</h5>
		<div class="table-responsive text-nowrap">
			<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>name</th>
						<th>Actions</th> <!-- Added this column for actions -->
					</tr>
				</thead>
				<tbody class="table-border-bottom-0">
					@if ($notificationTypes->isEmpty())
						<tr>
							<td colspan="3" class="text-center">Tidak ada data notif type</td>
						</tr>
					@else
						@foreach ($notificationTypes as $notif)
							<tr>
								<td>{{ $notif->id }}</td> <!-- Added this column for ID -->
								<td>{{ $notif->name }}</td>
								<td>
									<a href="" class="btn btn-sm btn-outline-success" data-bs-toggle="modal"
										data-bs-target="#modalKirimPesan">Kirim Pesan</a>
									<a href="" class="btn btn-sm btn-outline-warning" data-bs-toggle="modal"
										data-bs-target="#modalDetail">Detail</a>
									<a href="" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal"
										data-bs-target="#modalDeleteUser">Hapus</a>
								</td>
							</tr>
						@endforeach
					@endif
				</tbody>
			</table>
		</div>
	</div>
@endsection

{{-- Modal --}}
{{-- <form action="{{ route('changeRole', ['users' => $user->id]) }}" method="POST"
									class="modal fade" id="modalKirimPesan" tabindex="-1" aria-hidden="true">
									@csrf
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="modalCenterTitle">Modal title</h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<div class="row g-2 mb-3">
													<div class="col mb-0">
														<label for="userId" class="form-label">User</label>
														<input id="userId" class="form-control" type="text"
															value="{{ $user->id }} | {{ $user->email }}" readonly>
													</div>
												</div>
												<div class="row g-2 mb-3">
													<div class="col mb-0">
														<label for="notifType" class="form-label">Notification Type</label>
														<select id="notifType" class="form-select" name="notif_type">
															@forelse ($notifTypes as $notifType)
																<option value="{{ $notifType->id }}">{{ $notifType->name }}</option>
															@empty
																<option disabled>Belum ada notification type</option>
															@endforelse
														</select>
													</div>
												</div>
												<div class="row g-2 mb-3">
													<div class="col mb-0">
														<label for="title" class="form-label">Title</label>
														<input id="title" class="form-control" type="text" name="title">
													</div>
												</div>
												<div class="row g-2 mb-3">
													<div class="col mb-0">
														<label for="description" class="form-label">Description</label>
														<textarea id="description" class="form-control" name="description"></textarea>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-outline-secondary"
													data-bs-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-primary">Save changes</button>
											</div>
										</div>
									</div>
								</form> --}}
