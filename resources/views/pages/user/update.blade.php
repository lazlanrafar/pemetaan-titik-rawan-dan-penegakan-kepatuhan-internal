<!-- Modal -->
<div class="modal fade" id="formUpdate{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="formUpdateLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('user.update', $item->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="formUpdateLabel">
                        Update User
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="namalengkap">Nama Lengkap</label>
                                <input type="text" class="form-control" id="namalengkap"
                                    placeholder="Enter Nama Lengkap" name="name" value="{{ $item->name }}"
                                    required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nip">NIP</label>
                                <input type="text" class="form-control" id="nip" placeholder="Enter NIP"
                                    name="nip" value="{{ $item->nip }}" required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email-address">Email address</label>
                                <input type="email" class="form-control" id="email-address" placeholder="Enter email"
                                    name="email" value="{{ $item->email }}" required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <span class="small text-muted">- Masukan Password untuk ganti password</span>
                                <input type="password" class="form-control" id="password" placeholder="Password"
                                    name="password" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="role-select">Role</label>
                                <select class="form-control" id="role-select" name="role" required>
                                    <option value="" selected>-- pilih Role --</option>
                                    @foreach ($list_role as $role)
                                        <option value="{{ $role }}"
                                            {{ $item->role === $role ? 'selected' : '' }}>{{ $role }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" placeholder="Phone"
                                    name="phone" value="{{ $item->phone }}" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="address">Alamat</label>
                                <textarea type="text" class="form-control" id="address" name="address">{{ $item->address }}</textarea>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
