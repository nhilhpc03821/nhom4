<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Danh sách Liên hệ</h1>
            <div class="card mb-4">
                <div class="card-body">

                    <div class="row mb10">
                        <table id="lien-he" class="table table-bordered">
                            <thead>
                                <tr>

                                    <th>Tên khách hàng</th>
                                    <th>Email</th>
                                    <th>Nội Dung</th>
                                    <th>ID</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (!empty($lien_he)) :
                                    foreach ($lien_he as $lh) : ?>
                                        <tr>

                                            <td><?= $lh['ten_khach_hang'] ?></td>
                                            <td><?= $lh['email'] ?></td>
                                            <td><?= $lh['noi_dung'] ?></td>
                                            <td><?= $lh['id'] ?></td>
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