
<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!-- icon title -->
    <link rel="icon" href="egov/img/logojateng.svg.png" type="image/icon type">
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- CSS -->
    <link rel="stylesheet" href="egov/style/sidebar.css">
    <link href="style/css/bootstrap.css" rel="stylesheet" >
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- JavaScript -->
    <script src="style/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="<?php echo e(asset('toastr/toastr.min.css')); ?>">

   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
      <img src="egov/img/logojateng.svg.png" alt="" width="30" height="30" style="margin-left:25px">
      <span class="logo_name" style="margin-left:5px"> EGOVERMENT</span>
    </div>
    <ul class="nav-links">
      <li>
          <div class="iocn-link">
            <a href="<?php echo e(route('pns')); ?>">
            <i class='bx bx-home-alt'></i>
          <span class="link_name">Dashboard</span>
            </a>
          </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="<?php echo e(route('pns')); ?>">Dashboard</a></li>
          </ul>
      </li>
      <li>
          <div class="iocn-link">
            <a href="#">
            <i class='bx bx-tag-alt' ></i>
          <span class="link_name">Absensi</span>
            </a>
            <i class='bx bxs-chevron-down arrow' ></i>
          </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="<?php echo e(route('absensi')); ?>">Absensi</a></li>
            <li><a href="<?php echo e(route('absensi')); ?>">Absen</a></li>
            <li><a href="#" data-bs-toggle="modal" data-bs-target="#ijin">Ijin/Sakit</a></li>
            <li><a href="#" data-bs-toggle="modal" data-bs-target="#dinasluar">Dinas Luar</a></li>
          </ul>
      </li>
        <li>
          <a href="<?php echo e(route('tabel')); ?>">
            <i class='bx bx-table'></i>
            <span class="link_name">History Absen</span>
          </a>
          <ul class="sub-menu">
              <li><a class="link_name" href="<?php echo e(route('tabel')); ?>">History Absen</a></li>
            </ul>
        </li>
      <?php if(auth()->check() && auth()->user()->is_admin == 1): ?>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-user-check' ></i>
            <span class="link_name">Admin</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Admin</a></li>
          <li><a href="<?php echo e(route('datakaryawan')); ?>">Data Karyawan</a></li>
          <li><a href="<?php echo e(route('presentasiAbsen')); ?>">Presentasi Absensi</a></li>
          <li><a href="#" data-bs-toggle="modal" data-bs-target="#tambahuser">Tambah User</a></li>
        </ul>
      </li>
      <?php endif; ?>
      <li>
      <?php if(auth()->check() && auth()->user()->is_admin == 2): ?>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-user' ></i>
            <span class="link_name">KABID</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">KABID</a></li>
          <li><a href="#">Surat Dinas Luar</a></li>
          <li><a href="#">Surat Ijin</a></li>
        </ul>
      </li>
      <?php endif; ?>
      <li>
    <div class="profile-details">
      <div class="profile-content">
        <!--<img src="image/profile.jpg" alt="profileImg">-->
      </div>
      <div class="image"><img src="egov/img/avatar.png" alt="Avatar" class="avatar"></div>
      <div class="name-job">
        <div class="profile_name"><?php echo e(Auth::user()->name); ?></div>
        <div class="job"><?php echo e(Auth::user()->role); ?></div>
      </div>
      <a class=" " href="<?php echo e(route('logout')); ?>"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        
        <i class='bx bx-log-out' > </i>
      </a>
      <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
        <?php echo csrf_field(); ?>
      </form>

    </div>
  </li>
</ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="logo_name"><?php echo $__env->yieldContent('title'); ?></span>
    </div>
    <main class="py-4" style="margin-left:30px">
      <?php echo $__env->yieldContent('content'); ?>
    </main>
  </section>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>
  <script src="<?php echo e(asset('toastr/toastr.min.js')); ?>"></script>
  <script src="<?php echo e(asset('toastr/toastr.min.js')); ?>"></script>
  <?php if(Session::has('success')): ?>
    <script>
        $( document ).ready(function() {
            toastr.success('<?php echo Session::get('success'); ?>', 'Berhasil');
        });
    </script>

    <?php endif; ?>
    <?php if(Session::has('fail')): ?>
        <script>
            $( document ).ready(function() {
                toastr.error('<?php echo Session::get('fail'); ?>', 'Gagal');
            });
        </script>
    <?php endif; ?>
</body>

<div class="modal fade" id="ijin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Absen Ijin/Sakit</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/header/surat" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                  <label for="name" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="<?php echo e(AUTH::user()->name); ?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?php echo e(AUTH::user()->email); ?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?php echo e(AUTH::user()->eemail); ?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Surat Ijin</label>
                    <input class="form-control" type="file" id="formFile" name="surat"  >
                  </div>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">submit</button>
              </form>
            </div>
      </div>
    </div>
</div>

<div class="modal fade" id="dinasluar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Absen Ijin/Sakit</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/header/surat" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                  <label for="name" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="<?php echo e(AUTH::user()->name); ?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?php echo e(AUTH::user()->email); ?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?php echo e(AUTH::user()->eemail); ?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="datepikcer">Tanggal Mulai DL</label>
                    <input data-provide="datepicker">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Dinas</label>
                    <input class="form-control" type="file" id="formFile" name="surat"  >
                  </div>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">submit</button>
              </form>
            </div>
      </div>
    </div>
</div>

<div class="modal fade" id="tambahuser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" action="/tambahuser" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                  <label for="name" class="form-label">Nama</label>
                  <input id ="name" type="text" class="form-control" name="name" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" aria-describedby="name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input id="email" type="email" class="form-control"  name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" >
                </div>
                <div class="mb-3">
                    <label for="eemail" class="form-label">NIP</label>
                    <input id="eemail" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="eemail" value="<?php echo e(old('eemail')); ?>" required autocomplete="eemail" maxlength="18">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password">
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="mb-3">
                    <label for="password-confrim" class="form-label">Confrim Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
                  <button type="submit" class="btn btn-primary"> <?php echo e(__('Submit')); ?></button>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </form>
            </div>
      </div>
    </div>
</div>




</html>





<?php /**PATH D:\Magang\ProjekAbsenEgov\AbsensiEGOV\resources\views/header.blade.php ENDPATH**/ ?>