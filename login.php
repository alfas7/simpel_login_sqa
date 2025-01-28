<?php
session_start();

// Define credentials array
$valid_credentials = [
    [
        'username' => 'admin',
        'password' => 'admin1234'
    ],
    [
        'username' => 'alamin',
        'password' => 'alamin123'
    ]
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $is_valid = false;
    foreach ($valid_credentials as $cred) {
        if ($username === $cred['username'] && $password === $cred['password']) {
            $is_valid = true;
            break;
        }
    }

    if ($is_valid) {
        $_SESSION['username'] = $username;
        header("Location: home.php");
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Brag Spot</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-md w-96">
            <!-- Logo and Title -->
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800">
                    <i class="bi bi-chat"></i> Brag Spot
                </h1>
                <p class="text-gray-600 mt-2">Welcome back! Please login to continue.</p>
            </div>

            <!-- Error Message -->
            <?php if (isset($error)): ?>
            <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline"><?php echo $error; ?></span>
            </div>
            <?php endif; ?>

            <!-- Login Form -->
            <form method="POST" class="space-y-6">
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                    <input 
                        type="text" 
                        id="username" 
                        name="username" 
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                        required 
                        placeholder="Enter your username"
                    >
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <div class="relative">
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                            required 
                            placeholder="Enter your password"
                        >
                        <span 
                            class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer" 
                            onclick="togglePassword()"
                        >
                            <i id="toggleIcon" class="bi bi-eye-slash text-gray-500"></i>
                        </span>
                    </div>
                </div>

                <div>
                    <button 
                        type="submit"
                        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                    >
                        Sign in
                    </button>
                </div>
            </form>

            <!-- Additional Info -->
            <div class="mt-6 text-center text-sm">
                <p class="text-gray-600">
                    For testing, use these credentials:<br>
                    Username: admin | Password: admin1234<br>
                    Username: alamin | Password: alamin123
                </p>
            </div>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('toggleIcon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('bi-eye-slash');
                toggleIcon.classList.add('bi-eye');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('bi-eye');
                toggleIcon.classList.add('bi-eye-slash');
            }
        }
    </script>
</body>
</html>