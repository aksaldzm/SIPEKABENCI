<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <br><br><br>
                <h4 class="page-title"><?= $title ?></h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <?php if ($user['level_id'] == 1) { ?>
                            <a href="<?= site_url('supadmin') ?>">
                                <i class="flaticon-home"></i>
                            </a>
                        <?php } else if ($user['level_id'] == 2) { ?>
                            <a href="<?= site_url('admin') ?>">
                                <i class="flaticon-home"></i>
                            </a>
                        <?php } ?>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#"><?= $this->uri->segment(1); ?></a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#"><?= $this->uri->segment(2); ?></a>
                    </li>
                </ul>
            </div>