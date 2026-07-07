<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Admin Dashboard - Morning Star Printing Press Co.'); ?></title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #0D47FF;
            --accent: #0056D2;
            --danger: #dc3545;
            --success: #28a745;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f8f9fa;
            color: #333333;
        }

        /* Sidebar */
        .sidebar {
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            color: white;
            min-height: 100vh;
            position: fixed;
            width: 250px;
            left: 0;
            top: 0;
            padding-top: 0;
            overflow-y: auto;
            z-index: 999;
        }

        .sidebar-header {
            padding: 2rem 1.5rem;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .sidebar-header img {
            height: 50px;
            margin-bottom: 1rem;
        }

        .sidebar-header h4 {
            font-family: 'Poppins', sans-serif;
            font-size: 1.1rem;
            margin: 0;
        }

        .sidebar-menu {
            padding: 1.5rem 0;
            list-style: none;
        }

        .sidebar-menu li {
            margin: 0;
        }

        .sidebar-menu a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            padding: 0.75rem 1.5rem;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
        }

        .sidebar-menu a:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            padding-left: 2rem;
        }

        .sidebar-menu a.active {
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
            border-left: 4px solid white;
            padding-left: 1.5rem;
        }

        .sidebar-menu i {
            margin-right: 1rem;
            width: 20px;
        }

        /* Main Content */
        .main-content {
            margin-left: 250px;
            padding: 2rem;
        }

        /* Header */
        .admin-header {
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            margin-bottom: 2rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .admin-header h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 1.8rem;
            color: #333333;
            margin: 0;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .user-profile img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        .logout-btn {
            background-color: var(--danger);
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .logout-btn:hover {
            background-color: #c82333;
        }

        /* Cards */
        .stat-card {
            background: white;
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .stat-card-icon {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .stat-card-value {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary);
            font-family: 'Poppins', sans-serif;
        }

        .stat-card-label {
            color: #666666;
            font-size: 0.9rem;
            margin-top: 0.5rem;
        }

        /* Table Styles */
        .table-container {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .table {
            margin: 0;
        }

        .table thead {
            background-color: #f8f9fa;
        }

        .table thead th {
            border-color: #dee2e6;
            font-weight: 600;
            color: #333333;
            text-transform: uppercase;
            font-size: 0.85rem;
        }

        .table tbody tr:hover {
            background-color: #f8f9fa;
        }

        /* Buttons */
        .btn-primary-admin {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary-admin:hover {
            background-color: var(--accent);
            color: white;
        }

        .btn-secondary-admin {
            background-color: #6c757d;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-danger-admin {
            background-color: var(--danger);
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-danger-admin:hover {
            background-color: #c82333;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                width: 60px;
            }

            .sidebar-header h4 {
                display: none;
            }

            .sidebar-menu a {
                justify-content: center;
                padding: 1rem;
            }

            .sidebar-menu i {
                margin-right: 0;
            }

            .main-content {
                margin-left: 60px;
                padding: 1rem;
            }

            .admin-header {
                flex-direction: column;
                gap: 1rem;
            }

            .admin-header h1 {
                font-size: 1.3rem;
            }
        }

        /* Alerts */
        .alert {
            border-radius: 8px;
            margin-bottom: 1.5rem;
        }

        /* Forms */
        .form-control {
            border-radius: 5px;
            border: 1px solid #ddd;
            padding: 0.5rem 0.75rem;
        }

        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.2rem rgba(13, 71, 255, 0.25);
        }

        .form-label {
            font-weight: 600;
            color: #333333;
            margin-bottom: 0.5rem;
        }
    </style>

    <?php echo $__env->yieldContent('styles'); ?>
</head>
<body>
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <img src="<?php echo e(asset('Morningstar.logo.jpg')); ?>" alt="Morning Star Logo">
            <h4>Admin Panel</h4>
        </div>
        <ul class="sidebar-menu">
            <li>
                <a href="<?php echo e(route('admin.dashboard')); ?>" class="<?php if(request()->routeIs('admin.dashboard')): ?> active <?php endif; ?>">
                    <i class="fas fa-chart-line"></i> Dashboard
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('admin.services.index')); ?>" class="<?php if(request()->routeIs('admin.services*')): ?> active <?php endif; ?>">
                    <i class="fas fa-briefcase"></i> Services
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('admin.contact-messages.index')); ?>" class="<?php if(request()->routeIs('admin.contact-messages*')): ?> active <?php endif; ?>">
                    <i class="fas fa-envelope"></i> Messages
                </a>
            </li>
            <li style="margin-top: auto; padding-top: 1.5rem; border-top: 1px solid rgba(255, 255, 255, 0.1);">
                <form action="<?php echo e(route('logout')); ?>" method="POST" style="display: inline;">
                    <?php echo csrf_field(); ?>
                    <button type="submit" style="background: none; border: none; color: rgba(255, 255, 255, 0.8); text-decoration: none; padding: 0.75rem 1.5rem; display: flex; align-items: center; cursor: pointer; transition: all 0.3s ease; width: 100%;">
                        <i class="fas fa-sign-out-alt" style="margin-right: 1rem; width: 20px;"></i> Logout
                    </button>
                </form>
            </li>
        </ul>
    </aside>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <div class="admin-header">
            <h1><?php echo $__env->yieldContent('page-title', 'Dashboard'); ?></h1>
            <div class="user-profile">
                <span><?php echo e(auth()->user()->name); ?></span>
                <form action="<?php echo e(route('logout')); ?>" method="POST" style="display: inline;">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="logout-btn">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </button>
                </form>
            </div>
        </div>

        <!-- Alerts -->
        <?php if($errors->any()): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> Please fix the following errors:
                <ul class="mb-0 mt-2">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>

        <?php if(session('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle"></i> <?php echo e(session('success')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>

        <!-- Content -->
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.js"></script>

    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Website\resources\views/layouts/admin.blade.php ENDPATH**/ ?>