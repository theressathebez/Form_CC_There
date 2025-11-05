<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-color: #3A345B;
            font-family: 'Segoe UI', Arial, sans-serif;
        }

        .card {
            background-color: #F3C8DD;
        }

        .btn {
            background-color: #D183A9;
            color: #fff;
            transition: all 0.25s ease;
        }

        .btn:hover {
            background-color: #4B1535;
        }

        h1 {
            color: #4B1535;
        }
    </style>
</head>

<body class="flex justify-center items-center min-h-screen px-4">

    <div class="card p-8 rounded-2xl shadow-lg text-center max-w-md">
        <div class="flex justify-center mb-4">
            <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-[#4B1535]" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2l4-4m5 2a9 9 0 11-18 0a9 9 0 0118 0z" />
                </svg>
            </div>
        </div>

        <h1 class="text-3xl font-bold mb-3">Registration Successful! 🎉</h1>
        <p class="text-[#4B1535] mb-6 leading-relaxed">
            Thank you, <strong>{{ $name ?? 'Participant' }}</strong> 💜<br>
            You’ve successfully registered for <strong>Cloud Computing 2025</strong>.<br>
            Please check your inbox <strong>{{ $email ?? 'email' }}</strong> for confirmation details.
        </p>

        <a href="{{ url('/') }}" class="btn px-6 py-2 rounded-lg font-semibold shadow-md hover:shadow-lg">
            Back to Registration Form
        </a>
    </div>

</body>

</html>
