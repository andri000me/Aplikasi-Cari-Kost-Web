
<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <h3 style="font-family: 'Calibri', sans-serif;">
                    <i class="fa fa-modx ml-3 mr-3"></i><b>Carikost</b>
                    </h3>
                </div>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('administrator/dashboard') ?>">
                            <i class="fa fa-th-large mr-2"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo base_url('administrator/daftar_kost') ?>">
                            <i class="fa fa-list mr-2"></i>
                            <p>Daftar Kost</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo base_url('administrator/daftar_user') ?>">
                        <i class="fa fa-users mr-2"></i>
                            <p>Profil Pengguna</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo base_url('administrator/profil') ?>">
                        <i class="fa fa-user mr-2"></i>
                            <p>Profil</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        