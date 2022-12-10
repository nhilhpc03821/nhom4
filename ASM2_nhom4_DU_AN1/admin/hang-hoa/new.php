<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Hàng hóa - thêm mới</h1>
      <div class="card mb-4">
        <div class="card-body">





          <form action="index.php?act=addhh" method="post" class="formcontent mt" enctype="multipart/form-data">
            <br>
            <div class="row mb10">
              Loại
              <br />
              <select name="maloai">
                <?php
                foreach ($listloai as $loai) {
                  extract($loai);
                  echo '<option value="' . $ma_loai . '">' . $ten_loai . '</option>';
                }
                ?>


              </select>
            </div>
            <br />

            <div class="row mb10">
              Tên hàng hóa
              <br />
              <input type="text" name="tenhh" required />
            </div>
            <br />

            <div class="row mb10">
              Giá
              <br />
              <input type="text" name="giahh" required />
            </div>
            <br />

            <div class="row mb10">
              Hình
              <br />
              <input type="file" name="hinhhh" required />
            </div>
            <br />

            <div class="row mb10">
              <label for="editor">Mô tả</label>
              <br />
              <textarea name="motahh" id="" cols="30" rows="10"></textarea>
            </div>
            <br />




            <br />
            <input value="Thêm mới" type="submit" name="themmoi"></input>
            <button type="reset">Nhập lại</button>
            <button><a href="index.php?act=listhh" style="text-decoration: none;">Danh sách hàng hóa</a></button>
            <?php

            if (isset($thongbao) && ($thongbao != " ")) {
              echo " thêm thành công <br>" . $thongbao;
            }

            ?>
          </form>







        </div>
      </div>

    </div>
  </main>
</div>