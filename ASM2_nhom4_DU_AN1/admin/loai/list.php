<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Loại hàng - danh sách</h1>
      <div class="card mb-4">
        <div class="card-body">



          <table id="datatablesSimple" style="width: 100%;border: 1px gray solid;" class="table table-bordered">
            <thead style="border-bottom: 2px solid black;">
              <tr>

                <th>Mã loại</th>
                <th>Tên loại</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
              <?php
              foreach ($listloai as $loai) {
                extract($loai);

                $sualoai = "index.php?act=sualoai&maloai=" . $ma_loai;
                $xoaloai = "index.php?act=xoaloai&maloai=" . $ma_loai;

                echo '
                    <tr>
                  
                    <td>' . $ma_loai . '</td>
                    <td>' . $ten_loai . '</td>
                    <td>
                    <a href="' . $sualoai . '" class="suabtn"><input type="button" value="Sửa"></a>
                    <a href="' . $xoaloai . '" class="xoabtn"><input type="button" value="Xóa"></a>
                    </td>
                    </tr>
                    ';
              }
              ?>

            </tbody>
          </table>







        </div>
      </div>


      <form action="" class="mt">

        <button><a href="index.php?act=addloai">Nhập Thêm Mới</a></button>
      </form>



    </div>
  </main>
</div>