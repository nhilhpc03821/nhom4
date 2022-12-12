
<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Loại hàng - thêm mới</h1>
      <div class="card mb-4">
        <div class="card-body">






          <form action="index.php?act=addloai" method="post" class="formcontent mt">
            <div class=" mb10">
              Mã loại
              <br />
              <input type="text" disabled />
            </div>
            <br />
            <div class=" mb10">
              Tên loại
              <br />
              <input type="text"  name="tenloai" required/>
            </div>
            <br />
            <br />
            <input value="Thêm mới" type="submit" name="themmoi"></input>
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