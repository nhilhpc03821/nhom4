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
                        <th>Tên Phòng</th>
                        <th>Số lượng khách</th>
                        <th>Giá</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Số lượng phòng</th>
                        <th>Ngày đặt</th>
                    </tr> 
                </thead>
                <tbody>

                    <?php
                        if(!empty($don_hang)): 
                            foreach($don_hang as $dh ): ?>
                                <tr>
                                    <td><?= $dh['ten_khach_hang'] ?></td>
                                    <td><?= $dh['ma_hh'] ?></td>
                                    <td><?= $dh['so_nguoi'] ?></td>
                                    <td><?= number_format($dh['gia']) ?></td>
                                    <td><?= $dh['email'] ?></td>
                                    <td><?= $dh['so_dien_thoai'] ?></td>
                                    <td><?= $dh['so_luong_phong'] ?></td>
                                    <td><?= $dh['ngay_dat_phong'] ?></td>
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