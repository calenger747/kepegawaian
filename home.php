            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row">
                    <?php
                            if ($_SESSION['leveluser'] == 'SUPER ADMIN') {
                                include('_nav/button-admin-super.php');
                            } elseif ($_SESSION['leveluser'] == 'ADMIN') {
                                include('_nav/button-admin-super.php');
                            } elseif ($_SESSION['leveluser'] == 'USER') {
                                include('_nav/button-user.php');
                            }

                        ?>
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="colmd-12">
                        <!-- card new -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title m-b-0">News Updates</h4>
                            </div>
                            <ul class="list-style-none">
                                <?php

                                    $view = mysqli_query($connect, "SELECT * FROM tbl_news ORDER BY tanggal DESC LIMIT 5");
                                                    
                                    while ($row = mysqli_fetch_array($view)) {        
                                ?>
                                <li class="d-flex no-block card-body border-top">
                                    <i class="mdi mdi-newspaper w-30px m-t-5"></i>
                                    <div>
                                        <a href="#" class="m-b-0 font-medium p-0"><?php echo $row['judul']; ?></a>
                                        <span class="text-muted"><?php echo $row['deskripsi']; ?></span>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="tetx-right">
                                            <h5 class="text-muted m-b-0"><?php echo tgl_news($row['tanggal']); ?></h5>
                                            <span class="text-muted font-16"><?php echo bln_news($row['tanggal']); ?></span>
                                        </div>
                                    </div>
                                </li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
            </div>