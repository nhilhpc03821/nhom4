
<?php
if(is_array($dm)){
    extract($dm);
}
?>



<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Loại hàng - chỉnh sửa</h1>
      <div class="card mb-4">
        <div class="card-body">




          <form action="index.php?act=updateloai" method="post" class="formcontent mt">
            <input hidden type="text" name="maloai" value="<?php echo $ma_loai ?>">
            <div class=" mb10">
              Mã loại
              <br />
              <input type="text" value="<?php echo $ma_loai ?>" disabled />
            </div>
            <br />
            <div class=" mb10">
              Tên loại
              <br />
              <input type="text"  name="tenloai" value="<?php echo $ten_loai  ?>"/>
            </div>
            <br />
            <br />
            <input value="Cập nhật" type="submit" name="capnhat"></input>
            <button type="reset">Nhập lại</button>
            <button><a href="index.php?act=listloai" style="text-decoration: none;">Danh sách loại</a></button>
        <?php
    
           if(isset($thongbao)&&($thongbao!="")){
            echo "<br>". $thongbao;
           }
        
        ?>
        </form>


        

        
  </div> 
      </div>
      
    </div>
  </main>
</div>


  