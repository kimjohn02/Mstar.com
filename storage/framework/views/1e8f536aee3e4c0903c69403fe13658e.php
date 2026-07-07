<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Login - Morning Star Printing Press Co.'); ?></title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@600;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #0D47FF;
            --accent: #0056D2;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .auth-container {
            width: 100%;
            max-width: 450px;
            padding: 20px;
        }

        .auth-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        .auth-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .auth-header img {
            height: 60px;
            margin-bottom: 1rem;
        }

        .auth-header h1 {
            font-family: 'Poppins', sans-serif;
            color: #333333;
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
        }

        .auth-header p {
            color: #666666;
            margin: 0;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            font-weight: 600;
            color: #333333;
            margin-bottom: 0.5rem;
            display: block;
        }

        .form-control {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 10px 15px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.2rem rgba(13, 71, 255, 0.25);
        }

        .btn-submit {
            width: 100%;
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 1rem;
        }

        .btn-submit:hover {
            background-color: var(--accent);
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(13, 71, 255, 0.3);
        }

        .auth-footer {
            text-align: center;
            color: #666666;
        }

        .auth-footer a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
        }

        .auth-footer a:hover {
            text-decoration: underline;
        }

        .alert {
            border-radius: 8px;
            margin-bottom: 1.5rem;
        }

        .invalid-feedback {
            display: block;
            color: #dc3545;
            font-size: 0.875rem;
            margin-top: 0.5rem;
        }

        .form-check {
            margin-bottom: 1rem;
        }

        .form-check-input {
            border: 1px solid #ddd;
            cursor: pointer;
        }

        .form-check-input:checked {
            background-color: var(--primary);
            border-color: var(--primary);
        }

        .form-check-label {
            margin-left: 0.5rem;
            cursor: pointer;
            color: #666666;
        }
    </style>
</head>
<body>
    <div class="auth-container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Website\resources\views/layouts/auth.blade.php ENDPATH**/ ?>