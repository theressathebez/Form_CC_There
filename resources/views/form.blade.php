<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-color: #3A345B;
            font-family: 'Segoe UI', Arial, sans-serif;
        }

        .card {
            background-color: #F3C8DD;
            backdrop-filter: blur(8px);
        }

        .input-field {
            background-color: #fff;
            border: 1px solid #D183A9;
            transition: all 0.25s ease;
        }

        .input-field:focus {
            border-color: #4B1535;
            box-shadow: 0 0 0 2px rgba(75, 21, 53, 0.2);
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
            letter-spacing: 0.5px;
        }
    </style>
</head>

<body class="flex justify-center items-center min-h-screen p-4">

    <div class="card p-8 rounded-2xl w-full max-w-md shadow-lg">
        <h1 class="text-2xl font-bold text-center">Cloud Computing xixi</h1>
        <h2 class="text-l font-bold mb-5 text-center text-red-800">Registration Form</h2>
        @if (session('success'))
            <div class="bg-green-100 text-green-800 p-3 rounded mb-4 text-center font-medium">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('send.message') }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label class="block mb-2 text-sm font-semibold text-[#4B1535]">Full Name</label>
                <input type="text" name="name" placeholder="Enter your full name"
                    class="input-field w-full rounded-md p-2.5 focus:outline-none" value="{{ old('name') }}">
                @error('name')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block mb-2 text-sm font-semibold text-[#4B1535]">Student Email</label>
                <input type="email" name="email" placeholder="Enter your student email"
                    class="input-field w-full rounded-md p-2.5 focus:outline-none" value="{{ old('email') }}">
                @error('email')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block mb-2 text-sm font-semibold text-[#4B1535]">Password</label>
                <input type="password" name="password" placeholder="Create a secure password"
                    class="input-field w-full rounded-md p-2.5 focus:outline-none">
                @error('password')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block mb-2 text-sm font-semibold text-[#4B1535]">Confirm Password</label>
                <input type="password" name="password_confirmation" placeholder="Confirm your password"
                    class="input-field w-full rounded-md p-2.5 focus:outline-none">
            </div>

            <div>
                <label class="block mb-2 text-sm font-semibold text-[#4B1535]">Birth of Date</label>
                <input type="date" name="birth_of_date"
                    class="input-field w-full rounded-md p-2.5 focus:outline-none" value="{{ old('birth_of_date') }}">
                @error('birth_of_date')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="btn w-full py-2.5 rounded-md font-semibold text-sm shadow-sm hover:shadow-md">
                Register for Cloud Computing 2025
            </button>
        </form>
    </div>
</body>

</html>
