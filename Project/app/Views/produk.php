<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="container-fluid py-2">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Products</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Categories</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">stock</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">price</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
  <?php foreach ($produk as $p): ?>
    <tr>
      <td>
        <div class="d-flex px-2 py-1">
          <div class="d-flex flex-column justify-content-center">
            <h6 class="mb-0 text-sm"><?= $p['nama'] ?></h6>
            <p class="text-xs text-secondary mb-0"><?= $p['seri'] ?></p>
          </div>
        </div>
      </td>
      <td>
        <p class="text-xs font-weight-bold mb-0"><?= $p['kategori'] ?></p>
      </td>
      <td class="align-middle text-center text-sm">
        <span class="badge badge-sm bg-gradient-success"><?= $p['stok'] ?></span>
      </td>
      <td class="align-middle text-center">
        <span class="text-secondary text-xs font-weight-bold"><?= number_format($p['harga'], 0, ',', '.') ?></span>
      </td>
      <td class="align-middle">
        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit produk">
          Edit
        </a>
      </td>
    </tr>
  <?php endforeach; ?>
</tbody>


                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?= $this->endSection() ?>