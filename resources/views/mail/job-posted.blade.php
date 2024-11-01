<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Job Successfully Posted</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="max-w-3xl mx-auto my-10 bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="px-6 py-8 bg-blue-600 text-white text-center">
            <h1 class="text-2xl font-bold">Job Successfully Posted!</h1>
        </div>
        <div class="px-6 py-8">
            <p class="text-lg mb-4">Dear <span class="font-semibold">{{ $job->employer->user->name }}</span>,</p>
            <p class="mb-4">Your job posting titled <strong class="text-blue-600">{{ $job->title }}</strong> has been successfully created and is now live on our platform.</p>
            <a href="{{ url('/jobs/' . $job->id) }}" class="inline-block px-4 py-2 bg-blue-900 text-white font-semibold rounded hover:bg-blue-700 transition duration-300">
                View List of Job
            </a>
            <p class="mb-4">Thank you for using our service to find the perfect candidates for your company. We wish you the best in your recruitment process.</p>
            <p class="mb-4">If you have any questions or need assistance, feel free to reach out to us.</p>
            <p>Best regards,<br>
                <span class="font-semibold">The Job Portal Team</span></p>
        </div>
        <div class="px-6 py-4 bg-gray-100 text-center text-sm text-gray-500">
            <p>© {{ date('Y') }} Job Portal. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
