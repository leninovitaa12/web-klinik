<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFIL ADMIN</title>
    <link href="<?php echo e(asset('css/profiladmin.css')); ?>" rel="stylesheet">
</head>
<body>

<div class="container-cs">
    <!-- Memanggil Sidebar -->
    <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="content">
        <div class="anakcontent">
            <div class="pr-adm">
                <h1>PROFIL ADMIN</h1>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3>Informasi Pribadi</h3>
                            </div>
                            <?php $__empty_1 = true; $__currentLoopData = $profile_admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <tr>
                                        <th>NIK</th>
                                        <td><?php echo e($data->nik); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Nama</th>
                                        <td><?php echo e($data->nama); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tempat Lahir</th>
                                        <td><?php echo e($data->tempat_lahir); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Lahir</th>
                                        <td><?php echo e($data->tanggal_lahir->format('d-m-Y')); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td><?php echo e($data->alamat); ?></td>
                                    </tr>
                                    <tr>
                                        <th>No. Telp</th>
                                        <td><?php echo e($data->no_telp); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td><?php echo e($data->email); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <td><?php echo e($data->jenis_kelamin); ?></td>
                                    </tr>
                                </table>
                            </div>
                            <!-- Tombol Edit -->
                            <div class="container">
                                <div class="d-flex">
                                    <div class="text-right flex-end">
                                             <?php echo csrf_field(); ?>
                                        <a href="<?php echo e(route('profil.edit_profil', ['profile' => $data->nik])); ?>" class="btn btn-primary">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <div class="alert alert-danger">
                                        Data Products belum Tersedia.
                                    </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</body>
</html>
<?php /**PATH D:\KLINIK INSAN PERMATA\1. FIX KLINIK WEB\Klinik_Insan_Permata\resources\views\profil\profile.blade.php ENDPATH**/ ?>