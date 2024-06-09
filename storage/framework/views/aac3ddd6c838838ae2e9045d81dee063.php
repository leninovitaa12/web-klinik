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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
			<a href="#" class="nav-link">Data Client</a>
		</nav>
            <div class="content">
                <div class="anakcontent">
                    <div style="display: flex; justify-content: space-between; height:45px; margin-top: 50px;">
                        <a class="btn btn-custom fs-6 " style="background-color:  #447abc;  padding: 10px;
                        color: white; " href="<?php echo e(route('admin.create')); ?>"><i class="bi bi-file-plus"></i> Tambah</a>
                    </div>

                <table class="table-klien">
                    <thead class="text-white">
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
                                    <a href="<?php echo e(route('admin.edit', $dataklien->id)); ?>" class="btn btn-sm btn-primary"><i class="bi bi-pencil-square"></i></a>
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-sm btn-danger"><i class="bi bi-trash3-fill"></i></button>
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
<?php /**PATH D:\KLINIK INSAN PERMATA\1. FIX KLINIK WEB\Klinik_Insan_Permata\resources\views\admin\client.blade.php ENDPATH**/ ?>