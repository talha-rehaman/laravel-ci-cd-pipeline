<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to IbexStack</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="font-[Inter] bg-gray-50 text-gray-800">

    <!-- Header -->
    <header class="bg-white shadow-sm fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <div class="text-2xl font-bold text-indigo-600">IbexStack</div>
            <nav class="space-x-6">
                <a href="#features" class="text-gray-700 hover:text-indigo-600 font-medium">Features</a>
                <a href="#about" class="text-gray-700 hover:text-indigo-600 font-medium">About</a>
                <a href="#contact" class="text-gray-700 hover:text-indigo-600 font-medium">Contact</a>
            </nav>
            <a href="#get-started" class="bg-indigo-600 text-white px-5 py-2 rounded-lg hover:bg-indigo-700 transition">
                Get Started
            </a>
        </div>
    </header>
    <!-- Hero Section -->
    <section class="pt-28 pb-20 bg-gradient-to-b from-indigo-50 to-white text-center">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-5xl font-extrabold text-gray-900 mb-6 leading-tight">
                Build Smarter, Launch Faster with <span class="text-indigo-600">IbexStack</span>
            </h1>
            <p class="text-lg text-gray-600 mb-8">
                Simplify your web development workflow with modern tools and automation. Deploy effortlessly with Git & hPanel integration.
            </p>
            <a href="#features" class="bg-indigo-600 text-white px-8 py-3 rounded-lg text-lg hover:bg-indigo-700 transition">
                Explore Features
            </a>
        </div>
    </section>

  
    <!-- Features Section -->
    <section id="features" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-12">Powerful Features</h2>

            <div class="grid md:grid-cols-3 gap-10">
                <div class="p-6 bg-gray-50 rounded-xl shadow hover:shadow-md transition">
                    <div class="text-indigo-600 text-4xl mb-4">⚡</div>
                    <h3 class="text-xl font-semibold mb-2">Fast Deployment</h3>
                    <p class="text-gray-600">Push code to GitHub and auto-deploy with hPanel integration seamlessly.</p>
                </div>

                <div class="p-6 bg-gray-50 rounded-xl shadow hover:shadow-md transition">
                    <div class="text-indigo-600 text-4xl mb-4">🧠</div>
                    <h3 class="text-xl font-semibold mb-2">Smart Automation</h3>
                    <p class="text-gray-600">Automate updates, backups, and testing pipelines effortlessly.</p>
                </div>

                <div class="p-6 bg-gray-50 rounded-xl shadow hover:shadow-md transition">
                    <div class="text-indigo-600 text-4xl mb-4">💎</div>
                    <h3 class="text-xl font-semibold mb-2">Elegant Design</h3>
                    <p class="text-gray-600">Built with TailwindCSS for speed, beauty, and full responsiveness.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-indigo-50">
        <div class="max-w-5xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-6">About IbexStack</h2>
            <p class="text-gray-700 leading-relaxed max-w-2xl mx-auto">
                IbexStack is a web solutions company empowering developers and businesses to scale faster with powerful hosting, automation, and deployment tools.
            </p>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="max-w-4xl mx-auto text-center px-6">
            <h2 class="text-3xl font-bold mb-6">Get in Touch</h2>
            <p class="text-gray-600 mb-8">We’d love to hear from you! Let’s create something amazing together.</p>

            <a href="mailto:itsme.talha64@gmail.com" class="bg-indigo-600 text-white px-8 py-3 rounded-lg hover:bg-indigo-700 transition">
                Contact Us
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-6 text-center">
        <p>© {{ date('Y') }} IbexStack. All rights reserved.</p>
    </footer>

</body>
</html>
