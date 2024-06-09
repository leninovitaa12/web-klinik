<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Presensi</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/appointment.css')); ?>">
</head>
<body>
    <div class="container">
        <h1>Riwayat Presensi</h1>
        <table>
            <thead>
                <tr>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Keterangan</th>
                    <th>Waktu Presensi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $presensis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $presensi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($presensi->nik); ?></td>
                        <td><?php echo e($presensi->data_klien->nama); ?></td>
                        <td><?php echo e($presensi->keterangan); ?></td>
                        <td><?php echo e($presensi->created_at); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php /**PATH D:\KLINIK INSAN PERMATA\1. FIX KLINIK WEB\Klinik_Insan_Permata\resources\views\admin\riwayat_presensi.blade.php ENDPATH**/ ?>