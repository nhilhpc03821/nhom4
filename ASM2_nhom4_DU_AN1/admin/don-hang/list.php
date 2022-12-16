<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Danh Sách Đơn hàng</h1>
      <div class="card mb-4">
        <div class="card-body">

          <div class="row mb10">
            <table id="don_hang" class="table table-bordered">
              <thead>
                <tr>
                  <th>Tên khách hàng</th>
                  <th>Mã Phòng</th>
                  <th>Số lượng khách</th>
                  <th>Số lượng phòng</th>
                  <th>Giá</th>
                  <th>Email</th>
                  <th>Số điện thoại</th>
                  <th>Ngày đặt</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>

                <?php
                if (!empty($don_hang)) :
                  foreach ($don_hang as $dh) : ?>
                    <tr>
                      <td><?= $dh['ten_khach_hang'] ?></td>
                      <td><?= $dh['ma_hh'] ?></td>
                      <td><?= $dh['so_nguoi'] ?></td>
                      <td><?= $dh['so_luong_phong'] ?></td>
                      <td style="color: #ff00dd; font-weight: 700;"><?= number_format($dh['gia'] * $dh['so_luong_phong'], 3, ',', '.') ?></td>
                      <td><?= $dh['email'] ?></td>
                      <td>0<?= $dh['so_dien_thoai'] ?></td>
                      <td><?= $dh['ngay_dat_phong'] ?></td>
                      <td> xóa </td>
                    </tr>
                <?php endforeach;
                endif;
                ?>
              </tbody>
            </table>

          </div>
        </div>
      </div>
  </main>
</div>