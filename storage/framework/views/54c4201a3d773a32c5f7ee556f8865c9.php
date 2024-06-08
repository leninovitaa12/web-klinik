<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboar Klien</title>
        <link href="<?php echo e(asset('css/client.css')); ?>" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

            <!-- Boxicons -->
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <!-- My CSS -->

    </head>
    <body>

        <div class="container-cs">

            <!--Import Sidebar-->
            <?php echo $__env->make('layouts.bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- CONTENT -->
	        <section id="content">
		        <!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>

		</nav>
            <div class="content">
                <div class="anakcontent">
                    <div style="margin-top: 50px;"></div>
                    <div style="background-color: #475ffd;  width:40%; margin:auto;  padding: 20px 40px; border-radius: 10px;">
                        <h1 style="text-align: center; font-weight:bold; color:black; ">Data Klien</h1>
                    </div>
                    <div style="display: flex; justify-content: space-between; margin-top: 20px;">
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0">Cari :</h5>
                            <input type="text" placeholder="  Cari Klien..." style="margin-left:5px; border-radius:10px;">
                        </div>
                        
                        <a class="btn btn-custom " style="background-color:  #447abc;  padding: 10px;
                        color: white; font-weight: 600;" href="<?php echo e(route('admin.create')); ?>">Tambah</a>
                        <button class="btn btn-tambah">
                        </button>
                    </div>

                <table class="table-klien">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Nama Wali</th>
                            <th>Alamat</th>
                            <th>No.Telepon</th>
                            <th>Paket</th>
                            <th>Jenis Kelamin</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php $__empty_1 = true; $__currentLoopData = $data_kliens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataklien): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            
                            <td><?php echo e($dataklien->nama); ?></td>
                            
                            <td><?php echo e($dataklien->nama_wali); ?></td>
                            <td><?php echo e($dataklien->alamat); ?></td>
                            <td><?php echo e($dataklien->no_telepon); ?></td>
                            <td><?php echo e($dataklien->paket); ?></td>
                            <td><?php echo e($dataklien->jenis_kelamin); ?></td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="<?php echo e(route('admin.destroy', $dataklien->id)); ?>" method="POST">
                                    
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                </form>

                                
                            </td>
                        </tr>
                        <!-- Isi data lainnya di sini -->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <!-- Tampilkan pesan jika tidak ada data -->
                        <tr>
                            <td colspan="7" class="text-center">
                                <div class="alert alert-danger">
                                    Data Klien belum Tersedia.
                                </div>
                            </td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
                
                <?php echo e($data_kliens->links()); ?>

                </div>
            </div>
        </div>

        <script>
            //message with sweetalert
            <?php if(session('success')): ?>
                Swal.fire({
                    icon: "success",
                    title: "BERHASIL",
                    text: "<?php echo e(session('success')); ?>",
                    showConfirmButton: false,
                    timer: 2000
                });
            <?php elseif(session('error')): ?>
                Swal.fire({
                    icon: "error",
                    title: "GAGAL!",
                    text: "<?php echo e(session('error')); ?>",
                    showConfirmButton: false,
                    timer: 2000
                });
            <?php endif; ?>

        </script>
    </body>
</html>
<?php /**PATH D:\Program File\htdocs\1. FIX KLINIK WEB\Klinik_Insan_Permata\resources\views/admin/client.blade.php ENDPATH**/ ?>