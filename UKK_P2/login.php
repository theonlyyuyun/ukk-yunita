<div class="row mt-3">
  <div class="col-md-4 offset-md-4">
    <div class="card">
      <div class="card-header">LOGIN</div>
      <form action="config/aksi_login.php" method="POST">
        <div class="card-body">
          <div class="mb-3">
            <label class="form-label">Username</label>
            <input
              type="text"
              class="form-control"
              name="username"
              placeholder="Masukkan Usename"
              required
            />
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input
              type="password"
              class="form-control"
              name="password"
              placeholder="Masukkan Password"
              required
            />
          </div>
          <div class="mb-3">
            <label class="form-label">Login Sebagai</label>
            <select class="form-control" name="level">
              <option value="masyarakat">Masyarakat</option>
              <option value="petugas">Petugas</option>
            </select>
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" name="kirim" class="btn btn-primary">LOGIN</button>
          <a href="index.php?page=registrasi.php" class="m-3">Belum Punya Akun? Login Disini</a>
        </div>
      </form>
    </div>
  </div>
</div>
