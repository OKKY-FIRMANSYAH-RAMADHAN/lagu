<div class="container-fluid">
    <div class="row">
        <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
            <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="sidebarMenuLabel">Okky Firmansyah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2 <?= ($this->uri->segment(1) == "") ? 'text-danger' : '' ?>" aria-current="page" href="<?= base_url() ?>">
                                <svg class="bi">
                                    <use xlink:href="#house-fill" />
                                </svg>
                                Data Lagu
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2 <?= ($this->uri->segment(1) === "genre") ? 'text-danger' : '' ?>" href="<?= base_url() ?>genre">
                                <svg class="bi">
                                    <use xlink:href="#file-earmark" />
                                </svg>
                                Data Genre
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>