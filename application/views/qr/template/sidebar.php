 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="<?= base_url(); ?>qr/user/asset" class="brand-link">
     <img src="<?= base_url(); ?>assets/qrcode/images/favicon/favicon1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
     <span class="brand-text font-weight-light">AssetsApp</span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
     <!-- Sidebar Menu -->
     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item">
           <a href="<?= base_url(); ?>qr/user/asset" class="nav-link">
             <i class="nav-icon fas fa-tachometer-alt"></i>
             <p>
               Dashboard
             </p>
           </a>
         </li>
         <li class="nav-header">MENU</li>
         <li class="nav-item">
           <a href="<?= base_url(); ?>qr/user/asset/scan" class="nav-link">
             <i class="fas fa-camera"></i>
             <p>
               Scan Asset
             </p>
           </a>
         </li>
         <li class="nav-header">Akun</li>
         <li class="nav-item">
           <a href="<?= base_url(); ?>auth/logout" class="nav-link">
             <i class="nav-icon far fa fa-reply"></i>
             <p>
               Logout
             </p>
           </a>
         </li>
       </ul>
     </nav>
     <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
 </aside>